<?php

if (empty( $_POST )) die("Bad request");
$data = $_POST;
$data["ip"] = $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( $_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] );
$data["ua"] = $_SERVER["HTTP_USER_AGENT"];
if (isset( $data["phonecc"] )) $data["phone"] = $data["phonecc"].$data["phone"];

session_start();
date_default_timezone_set('Europe/Kiev');
if (isset($_SESSION['visited']) ||
    strlen($_POST['forename']) >= 50 ||
    strlen($_POST['surname']) >= 25 ||
    strlen($_POST['email']) >= 50 ||
    strlen($_POST['phone']) >= 18 ||
    stripos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) === FALSE ||
    $_SESSION['landingViewed'] != TRUE) {

    $result = array(
        'status'    => 'ok',
        'id'        => rand(100000, 999999),
        'pin'       => rand(100000, 999999),
    );

    header( "Location: success.php?" . http_build_query(array_merge( $result, $_GET )) );
    die();

}
unset($_SESSION['landingViewed']);
require_once 'assets/php/function.php';

if (!isset($data['surname']))
    list($data['forename'], $data['surname']) = explode(" ", $data['forename'], 2);
if (!isset($_POST['email']))
    $data["email"] = str_replace(array(" ", "'" , "`"), "", strtolower(translate($data["forename"], "auto", "en")).strtolower(translate($data["surname"], "auto", "en")).rand(10000, 99999)."@gmail.com");
if (preg_match('/[A-Za-z0-9._-]+[A-Za-z0-9]@[A-Za-z-]+\.[A-Za-z]{2,5}[^.]/', $data["email"], $email) == 0)
    $data["email"] = preg_replace('/[^A-Za-z0-9]/ui', '', preg_replace("/\@.+/", "", $data["email"])) . "@gmail.com";
else
    $data["email"] = $email[0];
$data['surname'] = preg_replace('/\s+/', '', $data['surname']);
$data['forename'] = preg_replace('/\s+/', '', $data['forename']);
$data['email'] = preg_replace('/\s+/', '', $data['email']);
$data["phone"] = preg_replace('/[^0-9]/ui', '', $data["phone"]);
$requestLog = array(
    'time'      => date('Y-m-d H:i:s'),
    'fullName'  => $data['forename'] . " " . $data['surname'],
    'email'     => $data['email'],
    'phone'     => str_replace(array(' ', '-'), '', $data['phone']),
    'country'   => $data['country'],
    'get'       => $_GET,
);
logFile($requestLog, 'assets/log/beforeSend.log');

$data = http_build_query( $data );
$curl = curl_init( "text");
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_TIMEOUT, 30 );
curl_setopt( $curl, CURLOPT_POST, 1 );
curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );
curl_setopt( $curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"] );
curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
$result = json_decode( curl_exec( $curl ), true );
curl_close( $curl );

$requestLog = array_merge($requestLog, $result);
logFile($requestLog, 'assets/log/afterSend.log');
error_log("Send lead to Alter with status{$result['status']}:" . urldecode(http_build_query($request)));

if ($result['status'] == 'error') {

    $_SESSION['visited'] = true;
    header( "Location: success.php?" . http_build_query(array_merge( $result, $_GET )) );
    die();

}
else {

    if (isset($_POST['subid']) && $_POST['subid'] != '') {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://successes0o.com/click.php?cnv_id=". $_POST['subid']. "&cnv_status=lead",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $response = curl_exec($curl);
        curl_close($curl);

    }
    header( "Location: success.php?" . http_build_query(array_merge( $result, $_GET )) );
    die();
}

?>