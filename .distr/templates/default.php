<?php
$version = isset($_GET['version']) ? strtolower($_GET['version']) : '';
$partner = isset($_GET['partner']) ? strtolower($_GET['partner']) : '';
$lang = isset($_GET['lang']) ? strtolower($_GET['lang']) : 'ru';
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');

require_once $ROOT . 'version.php';
?>

<!DOCTYPE html>
<html lang="<?=$lang;?>">
<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
    var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
    j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
    f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-<?=$GTMID?>');
  </script>
  <!-- End Google Tag Manager -->

  <base href="<?= $BASE_HREF ?>">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?=$desc;?>">
  <meta name="application-name" content="<?=$title;?>">
  
  
  <title><?=$title;?></title>

  <meta property="og:title" content="<?=$title;?>">
  <meta property="og:description" content="<?=$desc;?>">
  <meta property="og:url" content="http://<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
  <meta property="og:image" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
  <meta property="og:type" content="article">
	<link rel="image_src" href="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">


  <link href="//synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
  <link href="//synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

  <link rel="stylesheet" href="https://cdn.synergy.ru/libs/bootstrap/bootstrap-4.5.2.min.css">
  <link rel="stylesheet" href="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.css" />
  <link rel="stylesheet" href="https://cdn.synergy.ru/libs/swiper/swiper-5.4.5.min.css" />

  <link href="css/fonts/stylesheet.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

</head>
<body class="<?= $version ? 'version-'.$version : '' ?> <?= $partner ? 'partner-'.$partner : '' ?>">
<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?=$GTMID?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

{% import 'form/macro.php' as form %}

<div class="wrapper">
  {% block blocks %}
  {% endblock %}

  <div class="popups" hidden>
    {% block popups %}
    {% endblock %}
  </div>

  <a href="//sydi.ru" hidden></a>
</div>

<!-- Плагины и хелперы -->
<script src="https://cdn.synergy.ru/libs/jquery/jquery-3.4.1.js"></script>
<script src="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.js"></script>
<script src="https://cdn.synergy.ru/libs/swiper/swiper-5.4.5.min.js"></script>

<!-- Скрипт ALM Lander -->
<script src="https://syn.su/js/lander.js" defer></script>
<script src="js/script.js" defer></script>
<script>
  function price_page() {
    setTimeout(function(){
      location.replace('https://synergyglobal.ru/lp/beauty-forum/price');
    }, 100);
  }
  
  function thanks_page() {
    setTimeout(function(){
      location.replace('https://synergyglobal.ru/lp/beauty-forum/thanks');
    }, 100);
  }
</script>
</body>
</html>