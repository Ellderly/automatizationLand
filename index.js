const express = require('express');
const multer = require('multer');
const path = require('path');
const JSZip = require('jszip');
const fs = require('fs-extra');
const unzipper = require('unzipper');
const franc = require('franc-min');

const app = express();
const upload = multer({ storage: multer.memoryStorage() });

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});

app.post('/upload', upload.single('file'), async (req, res) => {
    const domainName = path.parse(req.file.originalname).name;  // use filename without extension
    const uploadedZipPath = path.join(__dirname, 'uploaded.zip');
    const unzippedFolderPath = path.join(__dirname, 'unzipped');
    const integrationDirPath = path.join(__dirname, 'integration');

    fs.emptyDirSync(unzippedFolderPath);

    fs.writeFileSync(uploadedZipPath, req.file.buffer);

    fs.createReadStream(uploadedZipPath)
        .pipe(unzipper.Extract({ path: unzippedFolderPath }))
        .on('close', async () => {
            const zip = new JSZip();

            const filesByDirectory = {};

            const processDirectory = (dir, root = '') => {
                const dirPath = path.join(unzippedFolderPath, root, dir);
                fs.readdirSync(dirPath).forEach(file => {
                    const filePath = path.join(dirPath, file);
                    const stats = fs.statSync(filePath);
                    if (stats.isDirectory()) {
                        processDirectory(file, path.join(root, dir));
                    } else {
                        const key = path.join(root, dir);
                        if (!filesByDirectory[key]) {
                            filesByDirectory[key] = {};
                        }
                        filesByDirectory[key][file] = {
                            buffer: fs.readFileSync(filePath),
                            originalname: file
                        };
                    }
                });
            };

            processDirectory('');

            for (const dir in filesByDirectory) {
                const files = filesByDirectory[dir];

                if (files['index.php']) {
                    let fileData = files['index.php'].buffer;
                    let data = fileData.toString('utf8');


                    data = data.replace(/\$curl\s*=\s*curl_init\(\s*"(.*?&)"\s*\.\s*http_build_query\(\$_GET\)\s*\);/g, '$curl = curl_init("$1utm_campaign={$_SERVER[\'SERVER_NAME\']}&" . http_build_query($_GET));');

                    // remove all PHP codes within <form> tags that is not requiring 'landing_form.php'
                    data = data.replace(/<form[^>]*>(.*?)<\/form>/gs, function(match){
                        return match.replace(/<\?php(?!.*require 'assets\/php\/landing_form\.php';).*?\?>/gs, '');
                    });

                    const result = data
                        .replace(/<!doctype html>|<!DOCTYPE html>/g, '<?php\nsession_start();\n$_SESSION[\'landingViewed\'] = TRUE;\nif (isset($clickData))\n $link = "api .php?" . http_build_query($_GET) . (empty($_GET) ? ("clickid=") : ("&clickid=")) . $clickData[\'clickid\'];\nelse \n $link = "api.php?" .http_build_query($_GET);\n?>\n<!DOCTYPE html>')
                        .replace(/<input type="hidden"[^>]*\/?>/gs, '') // remove all hidden input fields including potential inner content
                        .replace('</body>', `<?php
 require_once 'assets/php/landing_pixel.php';
?>\n</body>`);


                    let intermediateResult = result.replace(/<form[^>]*>([\s\S]*?)<\/form>/g, function(match) {
                        return match.replace(/" \/>/g, '');
                    });

                    let finalResult = intermediateResult.replace(/<path\s[^>]*"\s*>/g, function(match){
                        return match.replace(/"\s*>/, '" />');
                    });



                    // Add the PHP script in the beginning of the form, replace action and add hidden inputs before the end of the form only when there is a type="tel" field in the form
                    finalResult = finalResult.replace(/<form([^>]*)>([\s\S]*?)<\/form>/g, function(match, formAttrs, formContent) {
                        if (formContent.includes('type="tel"')) {
                            // Replace the action attribute
                            let updatedAttrs = formAttrs.replace(/action="api\.php"/, 'action="<?=$link;?>"');
                            let newFormContent = `\n<?php require 'assets/php/landing_form.php'; ?>\n${formContent}\n<input type="hidden" name="comment" value="" />\n`;

                            // Find and remove the first quotation mark after the PHP require statement
                            let quoteIndex = newFormContent.indexOf('"', newFormContent.indexOf('<?php require'));
                            if (quoteIndex !== -1) {
                                console.log('The first quotation mark is at index:', quoteIndex);
                                newFormContent = newFormContent.slice(0, quoteIndex) + newFormContent.slice(quoteIndex + 1);
                            } else {
                                console.log('No quotation mark found in the script.');
                            }

                            return `<form${updatedAttrs}>${newFormContent}</form>`;
                        }
                        return match;
                    });


                    let visibleText = data.replace(/<\?php[\s\S]*?\?>/g, '').replace(/<[^>]*>/g, '');

                    let lang = franc(visibleText);

// Переводим коды языков в предпочитаемые
                    lang = transformLanguageCode(lang);

// Функция для преобразования кодов языков
                    function transformLanguageCode(code) {
                        switch(code) {
                            case 'rus':
                                return 'ru';
                            case 'tur':
                                return 'tr';
                            default:
                                return code;
                        }
                    }

                    let indexLastForm = finalResult.lastIndexOf('</form>');
                    let indexFirstScriptAfterForm = finalResult.indexOf('<script', indexLastForm);
                    finalResult = finalResult.slice(0, indexFirstScriptAfterForm) + '<input type="hidden" name="countryCode" value="' + lang + '"/>' + finalResult.slice(indexFirstScriptAfterForm);

                    fileData = Buffer.from(finalResult, 'utf8');
                    zip.file(path.join(dir, 'index.php'), fileData);

                    delete files['index.php'];

                }


                if (files['api.php']) {
                    let fileData = files['api.php'].buffer;
                    let existingApiData = fileData.toString('utf8').split('\n');  // split file into lines

                    // Find line that starts with "$urls" and extract first URL
                    let urlLine = existingApiData.find(line => line.trim().startsWith('$urls'));
                    let firstURL = urlLine.match(/"([^"]*)"/)[1];

                    // Load the new API PHP script template
                    let apiTemplate = fs.readFileSync(path.join(__dirname, 'api_template.php'), 'utf8');

                    // Insert the first URL into the new template
                    let newApiData = apiTemplate.replace('$curl = curl_init( "text");', `$curl = curl_init("${firstURL}");`);

                    // Convert back to a Buffer and add to the zip file
                    fileData = Buffer.from(newApiData, 'utf8');
                    zip.file(path.join(dir, 'api.php'), fileData);

                    delete files['api.php'];
                }


                if (files['success.html'] || files['success.php']) {
                    let fileData = (files['success.html'] ? files['success.html'].buffer : files['success.php'].buffer);
                    const data = fileData.toString('utf8');
                    const result = data
                        .replace(/<!DOCTYPE html>/i, '<?php\nsession_start();\n?>\n<!DOCTYPE html>')
                        .replace(/<\/head>/i, '<?=(($_GET[\'url\']) ? "<meta http-equiv=\\\"refresh\\\" content=\\\"3; url={$_GET[\'url\']}\\\" />" : "");?>\n</head>')
                        .replace(/<\/body>/i, `<?php
require_once 'assets/php/success_pixel.php';
if (!($_SESSION['visited'] ?? false)) {
?>
<!-- PIXEL -->
<?php
}
$_SESSION['visited'] = true;
?>\n</body>`);
                    fileData = Buffer.from(result, 'utf8');

                    // If success.php already exists, delete it before renaming success.html to success.php
                    if (files['success.php']) {
                        delete files['success.php'];
                    }

                    // Rename success.html to success.php if it exists, else write to existing success.php
                    zip.file(path.join(dir, 'success.php'), fileData);
                    if (files['success.html']) {
                        delete files['success.html'];
                    }
                }


                for (const base in files) {
                    zip.file(path.join(dir, base), files[base].buffer);
                }
            }

            const addIntegrationFilesToZip = (root = '') => {
                const dirPath = path.join(integrationDirPath, root);
                fs.readdirSync(dirPath).forEach(file => {
                    const filePath = path.join(dirPath, file);
                    const stats = fs.statSync(filePath);
                    if (stats.isDirectory()) {
                        addIntegrationFilesToZip(path.join(root, file));
                    } else {
                        const key = path.join(root, file);  // Removed 'domainName' from the path
                        zip.file(key, fs.readFileSync(filePath));
                    }
                });
            };


            addIntegrationFilesToZip();

            const archiveData = await zip.generateAsync({ type: 'nodebuffer' });
            const outputPath = path.join(__dirname, 'modified_files.zip');
            fs.writeFileSync(outputPath, archiveData);

            res.download(outputPath, (err) => {
                if (err) {
                    res.status(500).send({
                        message: 'Could not download the file. ' + err,
                    });
                }
            });
        });
    });

app.listen(3000, () => console.log('Server is running on port 3000'));