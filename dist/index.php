<?php

require_once('OrangeAPI.php');

$orange = new APIclient();
$orange->url = ORANGE_URL; $orange->token = ORANGE_TOKEN; $orange->saltKey =
ORANGE_SALT; $orange->setSessionToken(ORANGE_SESSION); $r =
$orange->request('GET','landing',array( 'landing' => 'dynamic-amazon',
'sublanding' => $_GET['city'], 'step' => 'inicio' )); if ($r->response->status
!= 200){ die("dato no valido"); } $googleCaptchaKey =
'6Le8B98UAAAAAEmi5xa44pxFv4UEOF5O0IEnbho4'; $id_google_tag;
$id_google_analytics; if (($_GET['ag']) === 'or') { $id_google_tag =
$orange->get('id-google-ads-orange'); $id_google_analytics =
$orange->get('id-google-analytics-orange'); }else{ $id_google_tag =
$orange->get('id-google-ads-thera'); $id_google_analytics =
$orange->get('id-google-analytics-thera'); } switch (($_GET['campaign'])) { case
'or-display': $token = $orange->get('or-display'); break; case 'th-display':
$token = $orange->get('th-display'); break; case 'or-youtube': $token =
$orange->get('or-youtube'); break; case 'th-youtube': $token =
$orange->get('th-youtube'); break; case 'conv': $token = $orange->get('conv');
break; case 'branding': $token = $orange->get('branding'); break; default:
$token = ''; break; } ?>

<script>
  var theToken = "<?= $token; ?>"
  console.log(theToken)
</script>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Megacable - Amazon</title>
    <link rel="icon" href="fav.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="fav.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Facebook Pixel Code -->
    <script>
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return
        n = f.fbq = function () {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments)
        }
        if (!f._fbq) f._fbq = n
        n.push = n
        n.loaded = !0
        n.version = "2.0"
        n.queue = []
        t = b.createElement(e)
        t.async = !0
        t.src = v
        s = b.getElementsByTagName(e)[0]
        s.parentNode.insertBefore(t, s)
      })(
        window,
        document,
        "script",
        "https://connect.facebook.net/en_US/fbevents.js"
      )
      fbq("init", "1944558472454005")
      fbq("track", "PageView")
    </script>
    <noscript
      ><img
        height="1"
        width="1"
        style="display: none"
        src="https://www.facebook.com/tr?id=1944558472454005&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Global site tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=<?=$id_google_tag;?>"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || []
      function gtag() {
        dataLayer.push(arguments)
      }
      gtag("js", new Date())
      gtag("config", "<?=$id_google_tag;?>")
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=<?=$id_google_analytics;?>"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || []
      function gtag() {
        dataLayer.push(arguments)
      }
      gtag("js", new Date())
      gtag("config", "<?=$id_google_analytics;?>")
    </script>

    <style>
      .fixed-send-form {
        z-index: 1000 !important;
      }
    </style>
  </head>

  <body id="body">
    <div
      class="g-recaptcha"
      data-sitekey="<?=$googleCaptchaKey;?>"
      data-callback="sendForm"
      data-size="invisible"
    ></div>

    <?php include 'templates/fixed-send-form/fixed-send-form.php';?>
    <?php include 'templates/preload/preload.php';?>
    <?php include 'templates/pop-up/pop-up.php';?>
    <?php include 'templates/header/header.php';?>
    <?php include 'templates/hero/hero.php';?>
    <div class="Amazon-promo">
      <div class="container">
        <div class="row Amazon-promo__wrapper-title">
          <div class="col text-center">
            <img src="assets/img/promo/title2.png" alt="" class="img-fluid" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="Amazon-promo__item">
              <img src="assets/img/promo/amazon.png" alt="" />
              <p>
                ENVIOS GRATIS en millones de productos disponibles en
                www.amazon.com.mx
              </p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="Amazon-promo__item">
              <img src="assets/img/promo/music.png" alt="" />
              <p>Más de 2 millones de canciones en tu perfil de Amazon Music</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="Amazon-promo__item">
              <img src="assets/img/promo/video.png" alt="" />
              <p>
                Accede a tus contenidos favoritos, series y pelícilas de autor,
                material exclusivo y mucho más!
              </p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="Amazon-promo__item">
              <img src="assets/img/promo/twitch.png" alt="" />
              <p>
                Diviertete en linea a través de tu Suscripción en Twitch con
                Amazon
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'templates/producto/producto-hbo.php';?>
    <?php include 'templates/footer/footer.php';?>
    <?php include 'templates/legales/legales.php';?>
    <?php include 'templates/fixed-cta/fixed-cta.php';?>
    <?php include 'templates/fixed-form/fixed-form.php';?>

    <script src="assets/js/vendors/vendors.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.8/lottie_html.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/get-url-values.js"></script>
  </body>
</html>
