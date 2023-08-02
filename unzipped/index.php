<!DOCTYPE html>
<html>

<head>
    <!-- 376 - 1814 [o18;l8] tpao-quiz-scnd -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPAO</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="assets/landing/css/landing.css" rel="stylesheet" type="text/css">
<!--[HEADER]--></head>

<body>
    <form action="api.php" method="post"><?php if (isset($_GET["utm_source"])) : ?><input type="hidden" name="utm_source" value="<?=htmlspecialchars($_GET["utm_source"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_content"])) : ?><input type="hidden" name="utm_content" value="<?=htmlspecialchars($_GET["utm_content"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_term"])) : ?><input type="hidden" name="utm_term" value="<?=htmlspecialchars($_GET["utm_term"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_campaign"])) : ?><input type="hidden" name="utm_campaign" value="<?=htmlspecialchars($_GET["utm_campaign"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_medium"])) : ?><input type="hidden" name="utm_medium" value="<?=htmlspecialchars($_GET["utm_medium"]);?>" /><?php endif; ?><?php if (isset($_GET["subid"])) : ?><input type="hidden" name="subid" value="<?=htmlspecialchars($_GET["subid"]);?>" /><?php endif; ?><?php if (isset($_GET["uuid"])) : ?><input type="hidden" name="uuid" value="<?=htmlspecialchars($_GET["uuid"]);?>" /><?php endif; ?><?php if (isset($_GET["fbclid"])) : ?><input type="hidden" name="fbclid" value="<?=htmlspecialchars($_GET["fbclid"]);?>" /><?php endif; ?><?php if (isset($_GET["gclid"])) : ?><input type="hidden" name="gclid" value="<?=htmlspecialchars($_GET["gclid"]);?>" /><?php endif; ?><?php if (isset($_GET["cpc"])) : ?><input type="hidden" name="cpc" value="<?=htmlspecialchars($_GET["cpc"]);?>" /><?php endif; ?><?php if (isset($_GET["cur"])) : ?><input type="hidden" name="cur" value="<?=htmlspecialchars($_GET["cur"]);?>" /><?php endif; ?>
        <section class="slide slide--start">
            <h1 class="slide__title">"<span>Türkiye Petrolleri Anonim Ortaklığı</span>" ile
                hayallerinizi nasıl gerçekleştirebilirsiniz?</h1>
            <p class="slide__desc">Platforma erişmek ve ülkenin kaynaklarından istikrarlı para kazanmaya başlamak için "Türkiye Petrolleri Kurumu"nun resmi testini tamamlayın</p>
            <button class="slide__btn" type="button"><img src="img/btn_icon.svg" width="20" height="20" alt="">Testi baslat</button>
            <a class="slide__link policy">Gizlilik Politikasını</a>
        </section>
        <section class="slide slide--frst hide">
            <img src="img/logo.webp" width="60" height="71" alt="Botas Logo" class="slide__logo">
            <div class="slide__card">
                <h2 class="slide__subtitle">Kaç yaşındasın sen?</h2>
                <div class="slide__group">
                    <input type="radio" name="step1" value="25-35" id="step1-a">
                    <label for="step1-a">25-35</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step1" value="35-45" id="step1-b">
                    <label for="step1-b">35-45</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step1" value="45+" id="step1-c">
                    <label for="step1-c">45+</label>
                </div>
            </div>
            <div class="slide__footer">
                <p class="slide__desc">Birinci adim</p>
                <div class="slide__wrap">
                    <span class="step active"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </div>
        </section>
        <section class="slide slide--scnd hide">
            <img src="img/logo.webp" width="60" height="71" alt="Botas Logo" class="slide__logo">
            <div class="slide__card">
                <h2 class="slide__subtitle">İsteklerinizi yerine getirmek için ayda ne kadar para yeterli olur?</h2>
                <div class="slide__group">
                    <input type="radio" name="step2" value="10.000 Türk Lyra'sı" id="step2-a">
                    <label for="step2-a">10.000 Türk Lyra'sı</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step2" value="25.000 Türk Lyra'sı" id="step2-b">
                    <label for="step2-b">25.000 Türk Lyra'sı</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step2" value="50.000 Türk Lyra'sı" id="step2-c">
                    <label for="step2-c">50.000 Türk Lyra'sı</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step2" value="100.000 Türk Lyra'sı" id="step2-d">
                    <label for="step2-d">100.000 Türk Lyra'sı</label>
                </div>
            </div>
            <div class="slide__footer">
                <p class="slide__desc">İkinci adim</p>
                <div class="slide__wrap">
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </div>
        </section>
        <section class="slide slide--thrd hide">
            <img src="img/logo.webp" width="60" height="71" alt="Botas Logo" class="slide__logo">
            <div class="slide__card">
                <h2 class="slide__subtitle">Düzenli bir gelir kaynağınız var mı?</h2>
                <div class="slide__group">
                    <input type="radio" name="step3" value="Evet var, her şeyden memnunum" id="step3-a">
                    <label for="step3-a">Evet var, her şeyden memnunum</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step3" value="Evet var, ama daha iyisini hak ettiğimi inanıyorum" id="step3-b">
                    <label for="step3-b">Evet var, ama daha iyisini hak ettiğimi inanıyorum</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step3" value="Gelirim istikrarsız" id="step3-c">
                    <label for="step3-c">Gelirim istikrarsız</label>
                </div>
            </div>
            <div class="slide__footer">
                <p class="slide__desc">Üçüncü adim</p>
                <div class="slide__wrap">
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </div>
        </section>
        <section class="slide slide--frth hide">
            <img src="img/logo.webp" width="60" height="71" alt="Botas Logo" class="slide__logo">
            <div class="slide__card">
                <h2 class="slide__subtitle">Yatırım konusunda deneyiminiz var mı?</h2>
                <div class="slide__group">
                    <input type="radio" name="step4" value="Evet, başarılı bir şekilde yatırım yapıyorum" id="step4-a">
                    <label for="step4-a">Evet, başarılı bir şekilde yatırım yapıyorum</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step4" value="Daha önce yatırım yaptım" id="step4-b">
                    <label for="step4-b">Daha önce yatırım yaptım</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step4" value="Hayır, henüz hiç deneyimim olmadı" id="step4-c">
                    <label for="step4-c">Hayır, henüz hiç deneyimim olmadı</label>
                </div>
            </div>
            <div class="slide__footer">
                <p class="slide__desc">Dördüncü adım</p>
                <div class="slide__wrap">
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </div>
        </section>
        <section class="slide slide--ffth hide">
            <img src="img/logo.webp" width="60" height="71" alt="Botas Logo" class="slide__logo">
            <div class="slide__card">
                <h2 class="slide__subtitle">Ek Gelir Kaynaklariniz var mi?</h2>
                <div class="slide__group">
                    <input type="radio" name="step5" value="Evet, var" id="step5-a">
                    <label for="step5-a">Evet, var</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step5" value="Evet, ama dengesiz" id="step5-b">
                    <label for="step5-b">Evet, ama dengesiz</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step5" value="Hayır, ama istiyorum" id="step5-c">
                    <label for="step5-c">Hayır, ama istiyorum</label>
                </div>
            </div>
            <div class="slide__footer">
                <p class="slide__desc">Beşinci adım</p>
                <div class="slide__wrap">
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </div>
        </section>
        <section class="slide slide--sxth hide">
            <img src="img/logo.webp" width="60" height="71" alt="Botas Logo" class="slide__logo">
            <div class="slide__card">
                <h2 class="slide__subtitle">Türkiye Petrolleri Anonim Ortaklığı PROJESİNİ NEREDEN ÖĞRENDİNİZ?</h2>
                <div class="slide__group">
                    <input type="radio" name="step6" value="TV reklamları" id="step6-a">
                    <label for="step6-a">TV reklamları</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step6" value="İnternetteki reklamları" id="step6-b">
                    <label for="step6-b">İnternetteki reklamları</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step6" value="Tanıdıklardan, arkadaşlardan veya akrabalardan" id="step6-c">
                    <label for="step6-c">Tanıdıklardan, arkadaşlardan veya akrabalardan</label>
                </div>
            </div>
            <div class="slide__footer">
                <p class="slide__desc">Altıncı adım</p>
                <div class="slide__wrap">
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step"></span>
                </div>
            </div>
        </section>
        <section class="slide slide--svnth hide">
            <img src="img/logo.webp" width="60" height="71" alt="Botas Logo" class="slide__logo">
            <div class="slide__card">
                <h2 class="slide__subtitle">KIŞISEL DANIŞMANLIK ALMAK ISTER MISINIZ</h2>
                <div class="slide__group">
                    <input type="radio" name="step7" value="Evet, yeni bilgiler edinmek istiyorum" id="step7-a">
                    <label for="step7-a">Evet, yeni bilgiler edinmek istiyorum</label>
                </div>
                <div class="slide__group">
                    <input type="radio" name="step7" value="Evet, ama zaten bilgiliyim, eğitimin kalitesine/zorluğuna bağlı" id="step7-b">
                    <label for="step7-b">Evet, ama zaten bilgiliyim, eğitimin kalitesine/zorluğuna bağlı</label>
                </div>
            </div>
            <div class="slide__footer">
                <p class="slide__desc">Yedinci adım</p>
                <div class="slide__wrap">
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                    <span class="step active"></span>
                </div>
            </div>
        </section>
        <section class="slide slide--finish hide">
            <img src="img/logo.webp" width="60" height="71" alt="Botas Logo" class="slide__logo">
            <div class="form form--column">
                <h2 class="form__title">Tebrikler! '<span>Türkiye Petrolleri Anonim Ortaklığı</span>' platformunda ki yatırımlar kullanımınıza açıldı</h2>
                <p class="form__desc">İletişim bilgilerinizi bırakın ve hemen kazanmaya başlayın</p>
                <label for="" class="form__label">
                    <img class="form__input--icon" src="img/user.svg" width="20" height="20" alt="">
                    <input class="form__input form__input--column input" name="forename" placeholder="İsim" type="text" required>
                </label>
                <label for="" class="form__label">
                    <img class="form__input--icon" src="img/user.svg" width="20" height="20" alt="">
                    <input class="form__input form__input--column input" name="surname" placeholder="Soyisim" type="text" required>
                </label>
                <label for="" class="form__label">
                    <img class="form__input--icon" src="img/email.svg" width="20" height="20" alt="">
                    <input class="form__input form__input--column input" name="email" placeholder="E-mail" type="email" required>
                </label>
                <label for="" class="form__label">
                    <input class="form__input form__input--column phone phone-tr" placeholder="501 234-56-78" type="tel" name="phone" required>
                </label>
            </div>
            <div class="form__check">
                <label class="form__check--label text-muted" for="policy">
                    <input type="checkbox" class="form__check--input" checked>
                    <span><a class="form__check--link policy">
                            Gizlilik
                            Politikasını</a> kabul ediyorum</span></label>
            </div>
            <button class="form__btn form__btn--column" type="submit" name="submit">ücretsiz kayıt</button>
            <input type="hidden" name="phonecc" value="90" class="phonecc"/>
            <input type="hidden" name="country" value="tr"/>
            <input type="hidden" name="comment" value="" />
        </section>
    </form>
    <div class="popup hide" id="popup">
        <div class="popup__privacy">
            <img class="popup__close" id="close" src="img/xmark-black.svg" wifth="15" height="15" alt="close">
            <h2 class="popup__title">Gizlilik Politikası</h2>
            <p>Bu Kişisel Verilerin Gizliliği Politikası (bundan sonra Gizlilik Politikası olarak
                anılacaktır), sitenin
                 alan adında yer aldığı tüm bilgiler için geçerlidir; (alt alan adlarıyla
                birlikte), programlarının ve ürünlerinin siteyi kullanırken Kullanıcı hakkında bilgi edinebilir.
            </p>
            <ol>
                <li>
                    <span>Terimlerin tanımı</span>
                    <ol>
                        <li>Bu Gizlilik Politikasında aşağıdaki terimler kullanılmaktadır:
                            <ol>
                                <li>"Site Yönetimi" (bundan sonra İdare olarak anılacaktır) - kişisel verileri
                                    düzenleyen ve
                                    (veya) işleyen ve ayrıca kişisel verilerin işlenme amaçlarını, işlenecek kişisel
                                    verilerin bileşimini, eylemleri (işlemleri) belirleyen siteyi yönetmeye yetkili
                                    çalışanlar kişisel verilerle gerçekleştirilir.</li>
                                <li>"Kişisel veriler" - doğrudan veya dolaylı olarak tanımlanmış veya tanımlanabilir bir
                                    gerçek kişiyle ilgili herhangi bir bilgi (kişisel verilerin konusu).</li>
                                <li>"Kişisel verilerin işlenmesi" - toplama, kaydetme, sistemleştirme, biriktirme,
                                    depolama,
                                    açıklama (güncelleme, değiştirme) dahil olmak üzere otomasyon araçları kullanılarak
                                    veya
                                    kişisel verilerle bu tür araçlar kullanılmadan gerçekleştirilen herhangi bir eylem
                                    (işlem) veya bir dizi eylem (işlem) , çıkarma, kullanma, aktarma (dağıtma, sağlama,
                                    erişim), duyarsızlaştırma, engelleme, silme, kişisel verilerin imhası.</li>
                                <li>“Kişisel verilerin gizliliği”, İşletmeci veya kişisel verilere erişimi olan diğer
                                    kişiler için, kişisel verilerin sahibinin rızası veya diğer yasal gerekçeler
                                    olmaksızın
                                    bunların dağıtımını önlemek için zorunlu bir gerekliliktir.</li>
                                <li>"Site", İnternet'te barındırılan birbirine bağlı web sayfalarının yanı sıra alt alan
                                    adlarından oluşan bir koleksiyondur.</li>
                                <li>"Alt alan adları", siteye ait üçüncü düzey alan adlarında bulunan sayfalar veya bir
                                    dizi
                                    sayfa ile alt kısmında İdarenin iletişim bilgilerinin belirtildiği diğer geçici
                                    sayfalardır.</li>
                                <li>"Site Kullanıcısı" (bundan sonra Kullanıcı olarak anılacaktır), internet üzerinden
                                    siteye erişimi olan ve siteye ait bilgi, malzeme ve ürünleri kullanan kişidir.</li>
                                <li>"Çerez", bir web sunucusu tarafından gönderilen ve kullanıcının bilgisayarında
                                    saklanan,
                                    web istemcisinin veya web tarayıcısının ilgili sitenin bir sayfasını her açmaya
                                    çalıştığında bir HTTP isteğinde web sunucusuna gönderdiği küçük bir veri parçasıdır.
                                </li>
                                <li>"IP adresi" - Kullanıcının Businessman'a erişim kazandığı bir bilgisayar ağındaki
                                    bir
                                    düğümün benzersiz ağ adresi.</li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>
                    <span>Genel Hükümler</span>
                    <ol>
                        <li>
                            Sitenin Kullanıcı tarafından kullanılması, bu Gizlilik Politikasının ve Kullanıcının kişisel
                            verilerinin işlenmesi koşullarının kabulü anlamına gelir.
                        </li>
                        <li>
                            Gizlilik Politikası hükümleri ile uyuşmazlık halinde, Kullanıcı siteyi kullanmayı
                            bırakmalıdır.
                        </li>
                        <li>
                            Bu Gizlilik Politikası site için geçerlidir. İşadamı, Kullanıcının web sitesinde bulunan
                            bağlantıları takip edebileceği üçüncü şahısların web sitelerini kontrol etmez ve bunlardan
                            sorumlu değildir.
                        </li>
                        <li>
                            Yönetim, Kullanıcı tarafından sağlanan kişisel verilerin doğruluğunu doğrulamaz.
                        </li>
                    </ol>
                </li>
                <li>
                    <span>Gizlilik politikasının konusu</span>
                    <ol>
                        <li>Bu Gizlilik Politikası, İdarenin
                             sitesine kaydolurken İdarenin talebi üzerine Kullanıcının
                            sağladığı kişisel verileri ifşa etmeme ve gizliliğini sağlama yükümlülüklerini belirler;
                            veya
                            bir e-posta bültenine abone olurken.
                        </li>
                        <li>
                            Bu Gizlilik Politikası kapsamında işlenmesine izin verilen kişisel veriler, Kullanıcı
                            tarafından
                            sitedeki formların doldurulmasıyla sağlanır ve aşağıdaki bilgileri içerir:
                            <ol>
                                <li>
                                    Kullanıcının soyadı, adı, soyadı;
                                </li>
                                <li>
                                    Kullanıcının iletişim telefon numarası;
                                </li>
                                <li>
                                    e-posta adresi (e-posta)
                                </li>
                                <li>
                                    Kullanıcının ikamet ettiği yer (Şehir)
                                </li>
                            </ol>
                        </li>
                        <li>
                            İşadamı, sayfaları ziyaret ederken otomatik olarak iletilen Verileri korur:
                            - IP adresi;
                            - çerezlerden gelen bilgiler;
                            - tarayıcı bilgisi
                            - erişim süresi;
                            - yönlendiren (önceki sayfanın adresi).
                            <ol>
                                <li>
                                    Çerezlerin devre dışı bırakılması, sitenin yetki gerektiren bölümlerine
                                    erişilememesine neden olabilir.
                                </li>
                                <li>
                                    Bir iş adamı, ziyaretçilerinin IP adresleri hakkında istatistik toplar. Bu bilgiler
                                    teknik sorunları önlemek, tespit etmek ve çözmek için kullanılır.
                                </li>
                            </ol>
                        </li>
                        <li>
                            Yukarıda belirtilmeyen diğer kişisel bilgiler (ziyaret geçmişi, kullanılan tarayıcılar,
                            işletim sistemleri vb.), paragraflarda belirtilenler dışında güvenli saklama ve dağıtmamaya
                            tabidir. 5.2. bu Gizlilik Politikasının.
                        </li>
                    </ol>
                </li>
                <li>
                    <span>Kullanıcının kişisel bilgilerinin toplanma amaçları</span>
                    <ol>
                        <li>
                            Yönetim, Kullanıcının kişisel verilerini aşağıdaki amaçlarla kullanabilir:
                            <ol>
                                <li>
                                    Daha fazla yetkilendirmesi için sitede kayıtlı Kullanıcının kimliği.
                                </li>
                                <li>
                                    Kullanıcıya kişiselleştirilmiş site verilerine erişim sağlama.
                                </li>
                                <li>
                                    Bildirimlerin gönderilmesi, sitenin kullanımına ilişkin talepler, Kullanıcıdan gelen
                                    taleplerin ve başvuruların işlenmesi dahil olmak üzere Kullanıcı ile geri bildirim
                                    oluşturmak.
                                </li>
                                <li>
                                    Başvuruları gönderilen franchise temsilcilerine transferler.
                                </li>
                                <li>
                                    Kullanıcı tarafından sağlanan kişisel verilerin doğruluğunun ve eksiksizliğinin
                                    teyidi.
                                </li>
                                <li>
                                    Sitenin bölümlerini kullanmak için bir hesap oluşturun.
                                </li>
                                <li>
                                    E-posta ile kullanıcı bildirimleri.
                                </li>
                                <li>
                                    Site adına özel teklifler, haber bültenleri ve diğer bilgilerle Kullanıcıya onay
                                    vermek.
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>
                    <span>Kişisel bilgileri işleme yöntemleri ve şartları</span>
                    <ol>
                        <li>
                            Kullanıcı'nın kişisel verilerinin işlenmesi, otomasyon araçları kullanılarak veya bu araçlar
                            kullanılmadan kişisel veri bilgi sistemleri dahil olmak üzere her türlü hukuka uygun şekilde
                            süre sınırlaması olmaksızın gerçekleştirilir.
                        </li>
                        <li>
                            Kullanıcının kişisel verileri, Rusya Federasyonu'nun yetkili devlet makamlarına yalnızca
                            Rusya Federasyonu mevzuatı ile belirlenen gerekçelerle ve şekillerde aktarılabilir.
                        </li>
                        <li>
                            Kişisel verilerin kaybı veya ifşası durumunda, Yönetim, Kullanıcıyı kişisel verilerin kaybı
                            veya ifşası konusunda bilgilendirmeme hakkına sahiptir.
                        </li>
                        <li>
                            İdare, Kullanıcının kişisel bilgilerini yetkisiz veya kazara erişime, imhaya, değiştirmeye,
                            bloke etmeye, kopyalamaya, dağıtmaya ve ayrıca üçüncü şahısların diğer yasa dışı eylemlerine
                            karşı korumak için gerekli organizasyonel ve teknik önlemleri alır.
                        </li>
                        <li>
                            İdare, Kullanıcı ile birlikte, Kullanıcının kişisel verilerinin kaybolması veya ifşa
                            edilmesinden kaynaklanan kayıpları veya diğer olumsuz sonuçları önlemek için gerekli tüm
                            önlemleri alır.
                        </li>
                    </ol>
                </li>
                <li>
                    <span>Tarafların hak ve yükümlülükleri</span>
                    <ol>
                        <li>
                            Kullanıcı şu haklara sahiptir:
                            <ol>
                                <li>
                                    Sitenin kullanımı için gerekli olan kişisel verilerinizin sağlanması konusunda özgür
                                    karar verin ve bunların işlenmesine onay verin.
                                </li>
                                <li>
                                    Bu bilgilerde değişiklik olması durumunda kişisel veriler hakkında sağlanan
                                    bilgileri güncelleyin, tamamlayın.
                                </li>
                                <li>
                                    Kullanıcı, federal yasalara uygun olarak sınırlandırılmamışsa, kişisel verilerinin
                                    işlenmesiyle ilgili olarak İdareden bilgi alma hakkına sahiptir. Kullanıcı,
                                    İdare'den kişisel verilerini açıklığa kavuşturmasını, kişisel verilerin eksik, eski,
                                    yanlış, yasa dışı olarak elde edilmiş veya belirtilen işleme amacı için gerekli
                                    olmaması durumunda bunları bloke etme veya yok etme ve ayrıca kanunla öngörülen
                                    önlemleri almasını isteme hakkına sahiptir. haklarını korumak için. Bunun için
                                    belirtilen e-mail adresine İdareye bildirimde bulunulması yeterlidir.
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>
    <input type="hidden" name="onlyCountries" value="tr"/>
    <input type="hidden" name="allowDropdown" value="false"/>
    <script type="text/javascript" src="assets/landing/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/landing/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/landing/js/form.js"></script>
    <script>
    $(".policy").click(function() {
        $("#popup").removeClass("hide");
    });
    $("#close").click(function() {
        $("#popup").toggleClass("hide");
    });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var popups = document.querySelectorAll('.popup');

        popups.forEach(function(popup) {
            popup.addEventListener('click', function(event) {
                if (event.target === this) {
                    this.classList.add('hide');
                }
            });
        });
    });



    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');

        function showNextSlide(currentSlide) {
            const currentIndex = Array.from(slides).indexOf(currentSlide);
            if (currentIndex < slides.length - 1) {
                const nextSlide = slides[currentIndex + 1];
                currentSlide.classList.add('hide');
                nextSlide.classList.remove('hide');
            }
        }

        slides.forEach(slide => {
            const slideBtns = slide.querySelectorAll('.slide__btn, .slide__group');
            slideBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    showNextSlide(slide);
                });
            });
        });
    });
    </script>
<!--[FOOTER]--></body>

</html><?php
$curl = curl_init( "https://dozaclick.com/tpao/tr/signin7/?flow=3326&only=code&" . http_build_query($_GET) );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"] );
curl_setopt( $curl, CURLOPT_HTTPHEADER, [
 "X-Real-IP: " . $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER["HTTP_X_FORWARDED_FOR"] ?? $_SERVER["REMOTE_ADDR"],
 "X-Host: " .  $_SERVER["HTTP_X_FORWARDED_HOST"] ?? $_SERVER["HTTP_X_HOST"] ?? $_SERVER["HTTP_HOST"] ?? $_SERVER["SERVER_NAME"]
]);
curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
curl_exec( $curl );
curl_close( $curl );
?>