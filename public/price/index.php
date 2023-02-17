<?php
$version = isset($_GET['version']) ? strtolower($_GET['version']) : '';
$partner = isset($_GET['partner']) ? strtolower($_GET['partner']) : '';
$lang = isset($_GET['lang']) ? strtolower($_GET['lang']) : 'ru';
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');

require_once $ROOT . 'version.php';
include_once $ROOT . 'config.php';
include_once $ROOT . 'elastic.php';
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

  <link rel="stylesheet" href="https://cdn.synergy.ru/fonts/ProximaNova/style.min.css" />
  <link rel="stylesheet" href="https://cdn.synergy.ru/fonts/Montserrat/style.min.css" />
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



<div class="wrapper">
  
    
      
<header class="header price__fixed lazy">

    <div class="container">
        <div class="header__block">
            <div class="header__block-logo">
                <img src="img/header/logo.svg" alt="">
            </div>
            
            
            
            <div class="header__block-link price__block">
                <a href="<?=$phone_link?>" class="phone"><?=$phone?></a>
                <a href="<?=$phone_link?>" class="phone-mobile"><img src="img/header/phone.svg" alt=""></a>
                <a href="#popup-phone" class="link" data-fancybox>Заказать звонок</a>
            </div>
            
        </div>
    </div>
    <div class="menu__mobile menu-noactive">
        <div class="container">
            <ul class="header__list-mobile">
                <li class="header__item"><a href="#concept" class="header__link scroll">Концепция</a></li>
                <li class="header__item"><a href="#about" class="header__link scroll">Темы</a></li>
                <li class="header__item"><a href="#speakers" class="header__link scroll">Спикеры</a></li>
                <!-- <li class="header__item"><a href="#price" class="header__link scroll">Участие</a></li> -->
            </ul>
        </div>
    </div>
</header>
      
<section class="price__page lazy" id="price__page">
    <div class="container">
        <div class="price__page__top">
            <h2 class="price__page__top-title">
            Чтобы завершить регистрацию, выберите<br> пакет участия
            </h2>
        </div>
        <div class="price__page__block">
            <div class="price__page__block-card">
                <h3 class="title">Online</h3>
                <div class="card_block">
                    <div class="card_block-block">
                        <div class="card_block-price"><?= $online_price ?> руб.</div>
                        <ul class="card_block-list">
                            <li>Онлайн-участие</li>
                            <li>Запись форума</li>
                            <li>Подарки и скидки от партнеров</li>
                            <li>Подписка на платформу Synergy.online на 1 месяц</li>
                            <li>Трансляция отдельной онлайн-сцены</li>
                        </ul>
                    </div>
                    <a href="#payments-Online" class="card_block-btn" data-fancybox>Участвовать</a>
                </div>
            </div>
        
            <div class="price__page__block-card">
                <h3 class="title">Comfort</h3>
                <div class="card_block">
                    <div class="card_block-block">
                        <div class="card_block-price"><?= $comfort_price ?> руб.</div>
                        <ul class="card_block-list">
                            
            <li>Аккредитация в зоне Comfort</li>
            <li>Welcome Coffee</li>
            <li>Запись форума</li>
            <li>Подарки и скидки от партнеров</li>
            <li>Подписка на платформу Synergy.online на 1 месяц</li>
            
                        </ul>
                    </div>
                    <a href="#payments-Comfort" class="card_block-btn" data-fancybox>Участвовать</a>
                </div>
            </div>
        
            <div class="price__page__block-card">
                <h3 class="title">VIP</h3>
                <div class="card_block">
                    <div class="card_block-block">
                        <div class="card_block-price"><?= $vip_price ?> руб.</div>
                        <ul class="card_block-list">
                            
            <li>Аккредитация в зоне VIP</li>
            <li>Welcome Coffee</li>
            <li>Запись форума</li>
            <li>Подарки и скидки от партнеров</li>
            <li>Подписка на платформу Synergy.online на 6 месяцев</li>
            <li>Запись трансляции онлайн-сцены </li>
            
                        </ul>
                    </div>
                    <a href="#payments-VIP" class="card_block-btn" data-fancybox>Участвовать</a>
                </div>
            </div>
        
        </div>
    </div>
</section>

<div hidden>
    <div class="popup popup_form" id="payments-Online">
        
        <div class="container">
            


<form action="<?=$action_payment?>&type=ticketless" class="form ">

 
  <div class="form__title ">Купить</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    
    
    
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" placeholder="" class="form__input " value="67278846"   >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="event_id" type="hidden" placeholder="" class="form__input " value="160"   >
  
</div>

    
    

    <button class="button form__btn" type="submit">Купить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
    
    <div class="popup popup_form" id="payments-Comfort">
        
        <div class="container">
            


<form action="<?=$action_payment?>&type=ticket" class="form ">

 
  <div class="form__title ">Купить</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    
    
    
<div class="form__item ">
  
  <input name="tickets_count" type="number" placeholder="1" class="form__input " value="1" min=1  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" placeholder="" class="form__input " value="<?= $product_comfort ?>"   >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="event_id" type="hidden" placeholder="" class="form__input " value="160"   >
  
</div>

    
    

    <button class="button form__btn" type="submit">Купить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
    
    <div class="popup popup_form" id="payments-VIP">
        
        <div class="container">
            


<form action="<?=$action_payment?>&type=ticket" class="form ">

 
  <div class="form__title ">Купить</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    
    
    
<div class="form__item ">
  
  <input name="tickets_count" type="number" placeholder="1" class="form__input " value="1" min=1  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" placeholder="" class="form__input " value="<?= $product_vip ?>"   >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="event_id" type="hidden" placeholder="" class="form__input " value="160"   >
  
</div>

    
    

    <button class="button form__btn" type="submit">Купить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
    
</div>
      
<footer class="footer lazy">

    <div class="container">
        <div class="footer__block">
            <div class="footer__block-logo">
                
                <img src="img/footer/logo.svg" alt="">
                
            </div>
            <div class="footer__block-link">
                <a href="#privacy" data-fancybox class="link">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>


    
  
  <a href="//sydi.ru" hidden></a>
  <div class="popups" hidden>
    
      <section class="popup popup_form" id="popup-phone">
    <div class="container">
    


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Заказать звонок</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Заказать</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

    </div>
</section>
<section class="popup popup_form" id="popup-reg">
    <div class="container">
    


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Участвовать</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

    </div>
</section>
<section class="popup popup_form" id="popup-partners">
    <div class="container">
    


<form action="<?=$action;?>&form=form_partners" class="form ">

 
  <div class="form__title ">Стать партнером форума</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

    </div>
</section>



<section class="popup popup_speakers" id="popup-shipilova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Ксения<br> Шипилова</h3>
            <p class="name">Бьюти-ментор, основательница Aesthetiks Beauty Group и сети салонов Keep Looking</p>
            <img src="img/speakers/shipilova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-mamontova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Татьяна<br> Мамонтова</h3>
            <p class="name">Управляющий акционер «Здравницы «Лаго-Наки» с 2008 года, президент Клуба «Высший принцип»</p>
            <img src="img/speakers/mamontova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-shilova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Татьяна<br> Шилова </h3>
            <p class="name">Врач-офтальмохирург, профессор, доктор медицинских наук, главный врач сети офтальмологических центров «Клиника доктора Шиловой и «Smile Eyes»</p>
            <img src="img/speakers/shilova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-oksuzyan">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Роберт<br> Оксузян</h3>
            <p class="name">Основатель ювелирного бренда GODSFORGE, парапсихолог, таролог, коуч</p>
            <img src="img/speakers/oksuzyan.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-dubinskaya">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Анастасия<br> Дубинская</h3>
            <p class="name">Ученый-психофизиолог, специалист по&nbsp;нейромышечной реабилитации лица. Ведущий практикующий эксперт по&nbsp;антивозрастному массажу. Основатель и&nbsp;руководитель школы естественного омоложения &laquo;Ревитоника&raquo;. Преподаватель кафедры физической терапии и&nbsp;медицинской реабилитации ФГБУ &laquo;Национальный медицинский исследовательский центр реабилитации и&nbsp;курортологии&raquo; Министерства здравоохранения Российской Федерации.</p>
            <img src="img/speakers/dubinskaya.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-rudnev">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Юрий<br> Руднев</h3>
            <p class="name">Креативный директор проекта European Fashion Union, Beauty Edition</p>
            <img src="img/speakers/rudnev.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-poletaev">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Александр<br> Полетаев</h3>
            <p class="name">Доктор медицинских наук, Профессор, научный руководитель Медицинского Исследовательского Центра «Иммункулус»</p>
            <img src="img/speakers/poletaev.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-semenova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Анастасия<br> Семенова</h3>
            <p class="name">Химик-технолог, создательница бренда натуральной косметики SmoRodina</p>
            <img src="img/speakers/semenova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-cruk">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Майя<br> Крук</h3>
            <p class="name">Глава организационного комитета  European Fashion Union, Beauty Edition</p>
            <img src="img/speakers/cruk.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-kopylova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Юлия<br> Копылова</h3>
            <p class="name">Кандидат медицинских наук, гинеколог, эстетическая гинекология</p>
            <img src="img/speakers/kopylova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-moroz">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Ольга<br> Мороз</h3>
            <p class="name">Владелица и главный врач Клиники эстетической медицины Ольги Мороз<br>Автор запатентованных уникальных безоперационных методик «Стройное лицо», «Стройный силуэт»</p>
            <img src="img/speakers/moroz.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-lepetuk">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Снежана<br> Лепетюк</h3>
            <p class="name">Генеральный продюссер школы специалистов сферы Beauty, проект European Fashion Union </p>
            <img src="img/speakers/lepetuk.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-karkukli">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Елена<br> Каркукли</h3>
            <p class="name">Основатель и&nbsp;Главный тренер первого в&nbsp;России центра по&nbsp;фейсфитнесу, специалист по&nbsp;естественному оздоровлению. Практикует методики для лица и&nbsp;тела с&nbsp;2012 года. Автор книг-бестселлеров. Телеведущая, эксперт на&nbsp;телевидении и&nbsp;радио, а&nbsp;также в&nbsp;печатных СМИ.</p>
            <img src="img/speakers/karkukli.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-ribakova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Татьяна<br> Рыбакова</h3>
            <p class="name">Эксперт по здоровому образу жизни и блогер, создатель образовательной онлайн платформы, принимает участие в крупных рекламных компаниях</p>
            <img src="img/speakers/ribakova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-kohas">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Ольга<br> Кохас</h3>
            <p class="name">Вице-Президент Евразийской Трихологической Ассоциации, врач-трихолог, главный врач Клиники Доктора Кохас</p>
            <img src="img/speakers/kohas.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-kolotova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Татьяна<br> Колотова</h3>
            <p class="name">Сертифицированный терапевт, классический гомеопат и антропософский врач, специалист по психосоматике, применяет новую германскую медицину и регрессивную терапию</p>
            <img src="img/speakers/kolotova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-gostr">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Андрей<br> Гострый</h3>
            <p class="name">Основатель и руководитель Института интегральной превентивной и антивозрастной медицины PreventAge</p>
            <img src="img/speakers/gostr.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-dron">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Марина<br> Дорн</h3>
            <p class="name">Бьюти-блогер, косметолог, нутрициолог</p>
            <img src="img/speakers/dron.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-klimenko">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Мила<br> Клименко</h3>
            <p class="name">Основатель международного бренда Nikk Mole, создатель крупнейших профессиональных косметических марок для бровей Nikk Mole и Ekko Beauty</p>
            <img src="img/speakers/klimenko.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-anasha">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Анна<br> Атнашева</h3>
            <p class="name">Бизнес-эксперт, генеральный директор GESS</p>
            <img src="img/speakers/anasha.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-leo">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Вадим<br> Леонтьев</h3>
            <p class="name">Кандидат медицинских наук, врач-дерматовенеролог, косметолог</p>
            <img src="img/speakers/leo.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-ment">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Никита<br> Метелица</h3>
            <p class="name">Основатель Института Биохакинга и Здоровья, бизнес и life-коуч</p>
            <img src="img/speakers/ment.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-deriab">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Оксана<br> Дерябина</h3>
            <p class="name">Главный врач New Face Clinic, к.м.н, эксперт антивозрастной медицины, дерматокосметолог, сертифицированный тренер компании LuxeFace&LuxeBody</p>
            <img src="img/speakers/deriab.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-svecha">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Олег<br> Свечкин</h3>
            <p class="name">Генеральный директор и основатель RamaYoga, К.Э.Н.</p>
            <img src="img/speakers/svecha.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-kizub">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Светлана<br> Кизуб</h3>
            <p class="name">Врач, дерматолог, косметолог, трихолог. Тренер и наставник международной компании Allergan</p>
            <img src="img/speakers/kizub.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-vasia">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Юрий<br> Васильченко</h3>
            <p class="name">Тренер компании Альфа-медика, специалист по медицинской технике B.Well Swiss (Швейцария)</p>
            <img src="img/speakers/vasia.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-prozorini">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Ирина<br> Прозорини</h3>
            <p class="name">Основательница бренда люксовой парфюмерии PROZORINI PERFUME, бизнес-леди и&nbsp;автор женских тренингов</p>
            <img src="img/speakers/prozorini.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-reznikova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Маргарита<br> Резникова</h3>
            <p class="name">Косметолог-дерматолог, руководитель косметологического направления Beauty Club Lume&nbsp;21</p>
            <img src="img/speakers/reznikova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-chudina">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Анна<br> Чудина</h3>
            <p class="name">Косметолог, врач-инъекционист</p>
            <img src="img/speakers/chudina.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-ushakova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Елена <br>Ушакова</h3>
            <p class="name">Fashion-блогер, профессиональный стилист, селебрити-стилист, работала с&nbsp;глянцевыми СМИ&nbsp;&mdash; Cosmopolitan, Buro24/7, Wedding magazine</p>
            <img src="img/speakers/ushakova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-pastuhova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Анастасия <br>Павлова</h3>
            <p class="name">Сооснователь сети студий Skynails. Блогер. Эксперт по продвижению в БЬЮТИ индустрии.</p>
            <img src="img/speakers/pastuhova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-simonan">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Лилит <br>Симонян</h3>
            <p class="name">Визажист, более 6&nbsp;лет работает в&nbsp;beauty-индустрии, подготовила уже более 2000 учениц по&nbsp;всей России и&nbsp;странам СНГ, совладелец @face_to_face_msk</p>
            <img src="img/speakers/simonan.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-shelengovskiy">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Павел <br>Шеленговский</h3>
            <p class="name">Представитель makeup-академии Юрия Столярова, кандидат наук, предприниматель, продюсер</p>
            <img src="img/speakers/shelengovskiy.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-grinko">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Людмила Пастухова <br>и Анна Гринько</h3>
            <p class="name">Учредители и&nbsp;совладелецы сети медицинских центров красоты 100ЛИЦА</p>
            <img src="img/speakers/grinko.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-bashmakova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Алина <br>Башмакова</h3>
            <p class="name">Основатель дистрибьюторской компании BEAUTY BASH Official</p>
            <img src="img/speakers/bashmakova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-vladikina">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Ксения <br>Владыкина</h3>
            <p class="name">Основатель и дизайнер бренда FRESHDRESS</p>
            <img src="img/speakers/vladikina.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

<section class="popup popup_speakers" id="popup-sharova">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">Анна <br>Шарова</h3>
            <p class="name">Косметический химик-технолог, основатель бренда косметики ANNA SHAROVA</p>
            <img src="img/speakers/sharova.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        


<form action="<?=$action;?>&form=form" class="form ">

 
  <div class="form__title ">Принять участие бесплатно</div>

  
  <div class="form__fields flex">
    
    
<div class="form__item ">
  
  <input name="name" type="text" placeholder="Имя" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" placeholder="Телефон" class="form__input " value=""  required >
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" placeholder="E-mail" class="form__input " value=""  required >
  
</div>

    

    

    <button class="button form__btn" type="submit">Отправить</button>

  </div>
    <div class="form__bottom-wrapper">
      
    <div class="form__bottom flex">
      <label class="form__footer flex">
        <div class="form__footer-checkbox">
          <input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-icon"></div>
        </div>
        <div class="form__footer-text">
        Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с <a href="#privacy" data-fancybox>Политикой конфиденциальности</a>.
        </div>
      </label>
    </div>

    </div>
</form>

        </div>
    </div>
</section>

    
  </div>
</div>

<!-- Плагины и хелперы -->
<script src="https://cdn.synergy.ru/libs/jquery/jquery-3.4.1.js"></script>
<script src="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.js"></script>
<script src="https://cdn.synergy.ru/libs/swiper/swiper-5.4.5.min.js"></script>

<!-- Скрипт ALM Lander -->
<script src="https://syn.su/js/lander.js" defer></script>
<script src="js/script.js" defer></script>

</body>
</html>