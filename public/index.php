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



<div class="wrapper">
  
    
<header class="header">

    <div class="container">
        <div class="header__block">
            <div class="header__block-logo">
                <img src="img/header/logo.svg" alt="">
            </div>
            
            <ul class="header__block-nav">
                <li><a href="#concept" class="scroll">Концепция</a></li>
                <li><a href="#about" class="scroll">Темы</a></li>
                <li><a href="#speakers" class="scroll">Спикеры</a></li>
                <!-- <li><a href="#price" class="scroll">Участие</a></li> -->
            </ul>
            
            
            <div class="header__block-link">
                <a href="<?=$phone_link?>" class="phone"><?=$phone?></a>
                <a href="<?=$phone_link?>" class="phone-mobile"><img src="img/header/phone.svg" alt=""></a>
                <a href="#popup-phone" class="link" data-fancybox>Заказать звонок</a>
            </div>
            <div class="burger-menu"></div>
            
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
    
<section class="intro lazy">

    <div class="container">
        <div class="intro__flex">
            <div class="intro__logo">
                <img src="img/intro/logo.svg" alt="">
            </div>
            <div class="intro__block">
                <div class="intro__block-type">
                    БЕСПЛАТНОЕ УЧАСТИЕ ОНЛАЙН
                </div>
                <div class="intro__block-data">
                    <span>6&nbsp;ноября 2020</span>
                    <!-- <div class="line"></div>
                    <span>Golden Palace Москва</span> -->

                </div>
                <h1 class="intro__block-title">Synergy Beauty Forum</h1>
                <h2 class="intro__block-subtitle">Форум о&nbsp;красоте, beauty-индустрии<br>и&nbsp;заботе о&nbsp;себе</h2>
                <div class="intro__block-link">
                    #КрасивыйФорум
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="form__block lazy">

    <div class="container">
        


<form action="<?=$action;?>&form=form_registration" class="form form__vertical">

 
  <div class="form__title section-title">Принять участие бесплатно</div>

  
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
    <section class="concept lazy" id="concept">
    <div class="container">
        <div class="concept__block">
            <div class="concept__block-text">
                <h2 class="concept__title">Концепция</h2>
                <p class="concept__text">Современная красота&nbsp;&mdash; это не&nbsp;только хороший макияж и&nbsp;сумка из&nbsp;последней коллекции, это внутреннее ощущение, уверенность в&nbsp;себе и&nbsp;своем теле. Все достигают этого по-разному, поэтому мы&nbsp;собрали экспертов, которые расскажут, как подчинить себе beauty-тренды, достичь гармонии, сохранить и&nbsp;подчеркнуть свою красоту.</p>
                <div class="concept-block">
                    <div class="concept-block__card">Выступления спикеров</div>
                    <div class="concept-block__card">Мастер-классы</div>
                    <!-- <div class="concept-block__card">Фотозона</div>
                    <div class="concept-block__card">Выставка</div> -->
                </div>
            </div>
            <div class="concept__block-img">
                <img src="img/concept/picture.png" alt="">
            </div>
        </div>
    </div>
</section>
    
        
<section class="form__block white lazy">

    <div class="container">
        


<form action="<?=$action;?>&form=form_registration" class="form form__vertical">

 
  <div class="form__title section-title">Принять участие бесплатно</div>

  
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
    
    <section class="about lazy" id="about">
    <div class="container">
        <h2 class="about-title">Synergy Beauty Forum</h2>
        <p class="about-text">Cобытие для всех, кого волнуют вопросы саморазвития и&nbsp;ухода за&nbsp;собой. Вы&nbsp;познакомитесь с&nbsp;главными представителями российской beauty-индустрии, попробуете новинки уходовой и&nbsp;декоративной косметики, научитесь фейслифтингу и&nbsp;найдете свое вдохновение.</p>
        <div class="about-subtitle">На Synergy Beauty Forum мы обсудим:</div>
        <div class="about__block">
            <div class="about__block-card">
                <img src="img/about/flower.svg" alt="">
                <span>Что такое биохакинг.<br> Внутренняя эволюция</span>
            </div>
            <div class="about__block-card">
                <img src="img/about/flower.svg" alt="">
                <span>Гормональное здоровье и управление стрессом</span>
            </div>
            <div class="about__block-card">
                <img src="img/about/flower.svg" alt="">
                <span>Меинстрим эстетической медицины XXI века</span>
            </div>
            <div class="about__block-card">
                <img src="img/about/flower.svg" alt="">
                <span>Антивозрастная косметология</span>
            </div>
            <div class="about__block-card">
                <img src="img/about/flower.svg" alt="">
                <span>Физические нагрузки и правильное питание</span>
            </div>
            <div class="about__block-card">
                <img src="img/about/flower.svg" alt="">
                <span>Техники дневного макияжа </span>
            </div>
        </div>
    </div>
</section>
    
<section class="speakers lazy" id="speakers">
    <div class="container">
        <h2 class="speakers-title">Спикеры</h2>
        <div class="speakers__block" data-more-options='{ "target": ".speakers__block-card", "init_desktop": 6, "init_mobile": 2, "show_desktop": 3, "show_mobile": 2 }'>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Ксения<br> Шипилова</h3>
                        <div class="work">Бьюти-ментор, основательница Aesthetiks Beauty Group</div>
                        <a href="#popup-shipilova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/shipilova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Татьяна<br> Мамонтова</h3>
                        <div class="work">Управляющий акционер «Здравницы «Лаго-Наки»</div>
                        <a href="#popup-mamontova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/mamontova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Татьяна<br> Шилова </h3>
                        <div class="work">Главный врач «Клиника доктора Шиловой и «Smile Eyes»</div>
                        <a href="#popup-shilova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/shilova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Роберт<br> Оксузян</h3>
                        <div class="work">Основатель ювелирного бренда GODSFORGE</div>
                        <a href="#popup-oksuzyan" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/oksuzyan.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Анастасия<br> Дубинская</h3>
                        <div class="work">Основатель школы омоложения &laquo;РЕВИТОНИКА&raquo;</div>
                        <a href="#popup-dubinskaya" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/dubinskaya.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Юрий<br> Руднев</h3>
                        <div class="work">Креативный директор проекта European Fashion Union</div>
                        <a href="#popup-rudnev" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/rudnev.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Александр<br> Полетаев</h3>
                        <div class="work">Научный руководитель Медицинского Исследовательского Центра «Иммункулус»</div>
                        <a href="#popup-poletaev" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/poletaev.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Анастасия<br> Семенова</h3>
                        <div class="work">Химик-технолог, создательница SmoRodina</div>
                        <a href="#popup-semenova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/semenova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Майя<br> Крук</h3>
                        <div class="work">Глава организационного комитета  European Fashion Union</div>
                        <a href="#popup-cruk" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/cruk.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Юлия<br> Копылова</h3>
                        <div class="work">Кандидат медицинских наук, гинеколог</div>
                        <a href="#popup-kopylova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/kopylova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Ольга<br> Мороз</h3>
                        <div class="work">Владелица и главный врач Клиники эстетической медицины Ольги Мороз</div>
                        <a href="#popup-moroz" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/moroz.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Снежана<br> Лепетюк</h3>
                        <div class="work">Генеральный продюссер школы специалистов сферы Beauty</div>
                        <a href="#popup-lepetuk" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/lepetuk.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Елена<br> Каркукли</h3>
                        <div class="work">Основатель первого в России центра по фейсфитнесу</div>
                        <a href="#popup-karkukli" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/karkukli.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Татьяна<br> Рыбакова</h3>
                        <div class="work">Блогер и эксперт по здоровому образу жизни</div>
                        <a href="#popup-ribakova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/ribakova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Ольга<br> Кохас</h3>
                        <div class="work">Вице-Президент Евразийской Трихологической Ассоциации</div>
                        <a href="#popup-kohas" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/kohas.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Татьяна<br> Колотова</h3>
                        <div class="work">Терапевт,  гомеопат и антропософский врач</div>
                        <a href="#popup-kolotova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/kolotova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Андрей<br> Гострый</h3>
                        <div class="work">Основатель и руководитель института PreventAge</div>
                        <a href="#popup-gostr" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/gostr.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Марина<br> Дорн</h3>
                        <div class="work">Бьюти-блогер, косметолог, нутрициолог</div>
                        <a href="#popup-dron" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/dron.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Мила<br> Клименко</h3>
                        <div class="work">Основатель международного бренда Nikk Mole</div>
                        <a href="#popup-klimenko" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/klimenko.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Анна<br> Атнашева</h3>
                        <div class="work">Бизнес-эксперт, генеральный директор GESS</div>
                        <a href="#popup-anasha" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/anasha.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Вадим<br> Леонтьев</h3>
                        <div class="work">Врач-дерматовенеролог, косметолог</div>
                        <a href="#popup-leo" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/leo.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Никита<br> Метелица</h3>
                        <div class="work">Основатель Института Биохакинга и Здоровья</div>
                        <a href="#popup-ment" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/ment.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Оксана<br> Дерябина</h3>
                        <div class="work">Главный врач New Face Clinic</div>
                        <a href="#popup-deriab" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/deriab.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Олег<br> Свечкин</h3>
                        <div class="work">Генеральный директор и основатель RamaYoga, К.Э.Н.</div>
                        <a href="#popup-svecha" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/svecha.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Светлана<br> Кизуб</h3>
                        <div class="work">Врач, дерматолог, косметолог, трихолог</div>
                        <a href="#popup-kizub" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/kizub.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Юрий<br> Васильченко</h3>
                        <div class="work">Специалист по медицинской технике B.Well Swiss</div>
                        <a href="#popup-vasia" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/vasia.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Ирина<br> Прозорини</h3>
                        <div class="work">Основательница бренда PROZORINI PERFUME</div>
                        <a href="#popup-prozorini" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/prozorini.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Маргарита<br> Резникова</h3>
                        <div class="work">Косметолог-дерматолог</div>
                        <a href="#popup-reznikova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/reznikova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Анна<br> Чудина</h3>
                        <div class="work">Косметолог, врач-инъекционист</div>
                        <a href="#popup-chudina" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/chudina.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Елена <br>Ушакова</h3>
                        <div class="work">Fashion-блогер, профессиональный стилист</div>
                        <a href="#popup-ushakova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/ushakova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Анастасия <br>Павлова</h3>
                        <div class="work">Сооснователь сети студий Skynails</div>
                        <a href="#popup-pastuhova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/pastuhova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Лилит <br>Симонян</h3>
                        <div class="work">Визажист, более 6 лет работает в beauty-индустрии</div>
                        <a href="#popup-simonan" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/simonan.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Павел <br>Шеленговский</h3>
                        <div class="work">Официальный визажист Maybelline NY</div>
                        <a href="#popup-shelengovskiy" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/shelengovskiy.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Людмила Пастухова <br>и Анна Гринько</h3>
                        <div class="work">Совладелецы сети центров красоты 100ЛИЦА</div>
                        <a href="#popup-grinko" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/grinko.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Алина <br>Башмакова</h3>
                        <div class="work">Основатель компании BEAUTY BASH Official</div>
                        <a href="#popup-bashmakova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/bashmakova.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Ксения <br>Владыкина</h3>
                        <div class="work">Основатель и дизайнер бренда FRESHDRESS</div>
                        <a href="#popup-vladikina" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/vladikina.png" alt="">
                    </div>
                </div>
            
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">Анна <br>Шарова</h3>
                        <div class="work">Основатель бренда косметики ANNA SHAROVA</div>
                        <a href="#popup-sharova" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/sharova.png" alt="">
                    </div>
                </div>
            
        </div>
        <div class="speakers__block-button" data-more-button>
            Показать еще спикеров
        </div>
    </div>
</section>
    
    
<section class="partners">
    <div class="container">
        <h2 class="partners-title">Наши партнеры</h2>
        <div class="partners__noswipe">
            
                <a href="https://lagonaki.com/" target="_blank" class="partners__block-card">
                    <img src="img/partners/lago.png" alt="">
                </a>
            
                <a href="https://sacohair.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/saco.png" alt="">
                </a>
            
                <a href="https://is-clinical.com.ua/" target="_blank" class="partners__block-card">
                    <img src="img/partners/clincal.png" alt="">
                </a>
            
                <a href="https://www.erborian.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/erborian.png" alt="">
                </a>
            
                <a href="https://hydrafacial.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/hydrafacial.png" alt="">
                </a>
            
                <a href="https://parkskazka.com/" target="_blank" class="partners__block-card">
                    <img src="img/partners/skazka.png" alt="">
                </a>
            
                <a href="https://simplygreen.club/" target="_blank" class="partners__block-card">
                    <img src="img/partners/smplygreen.png" alt="">
                </a>
            
                <a href="https://spadream.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/spaderman.png" alt="">
                </a>
            
                <a href="https://restup.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/gess.png" alt="">
                </a>
            
                <a href="https://restup.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/shtrih.png" alt="">
                </a>
            
                <a href="https://efremov.gold/catalog/zoloto/" target="_blank" class="partners__block-card">
                    <img src="img/partners/efremov.png" alt="">
                </a>
            
                <a href="https://beautybash.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/beat.png" alt="">
                </a>
            
                <a href="http://delfycosmetics.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/def.png" alt="">
                </a>
            
                <a href="https://cetre.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/centre.png" alt="">
                </a>
            
                <a href="https://masterjournal.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/master_journal.png" alt="">
                </a>
            
                <a href="https://lenusheenstyle.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/ushakova.png" alt="">
                </a>
            
                <a href="" target="_blank" class="partners__block-card">
                    <img src="img/partners/simonyan.png" alt="">
                </a>
            
                <a href="https://eva.ru/" target="_blank" class="partners__block-card">
                    <img src="img/partners/eva.png" alt="">
                </a>
            
                <a href="https://all.accor.com/ssr/app/accor/rates/8225/index.ru.shtml?dateIn=2020-11-05&nights=1&compositions=1&stayplus=false" target="_blank" class="partners__block-card">
                    <img src="img/partners/novotel.png" alt="">
                </a>
            
        </div>
        <div class="partners__block swiper-container">
            <div class="swiper-wrapper">
            
                <a href="https://lagonaki.com/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/lago.png" alt="">
                </a>
            
                <a href="https://sacohair.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/saco.png" alt="">
                </a>
            
                <a href="https://is-clinical.com.ua/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/clincal.png" alt="">
                </a>
            
                <a href="https://www.erborian.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/erborian.png" alt="">
                </a>
            
                <a href="https://hydrafacial.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/hydrafacial.png" alt="">
                </a>
            
                <a href="https://parkskazka.com/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/skazka.png" alt="">
                </a>
            
                <a href="https://simplygreen.club/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/smplygreen.png" alt="">
                </a>
            
                <a href="https://spadream.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/spaderman.png" alt="">
                </a>
            
                <a href="https://restup.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/gess.png" alt="">
                </a>
            
                <a href="https://restup.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/shtrih.png" alt="">
                </a>
            
                <a href="https://efremov.gold/catalog/zoloto/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/efremov.png" alt="">
                </a>
            
                <a href="https://beautybash.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/beat.png" alt="">
                </a>
            
                <a href="http://delfycosmetics.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/def.png" alt="">
                </a>
            
                <a href="https://cetre.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/centre.png" alt="">
                </a>
            
                <a href="https://masterjournal.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/master_journal.png" alt="">
                </a>
            
                <a href="https://lenusheenstyle.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/ushakova.png" alt="">
                </a>
            
                <a href="" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/simonyan.png" alt="">
                </a>
            
                <a href="https://eva.ru/" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/eva.png" alt="">
                </a>
            
                <a href="https://all.accor.com/ssr/app/accor/rates/8225/index.ru.shtml?dateIn=2020-11-05&nights=1&compositions=1&stayplus=false" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/novotel.png" alt="">
                </a>
            
            </div>
            <div class="swiper-nav">
                <div class="partner__btn-next swiper-button-next"></div>
                <div class="partner__pagination swiper-pagination"></div>
                <div class="partner__btn-prev swiper-button-prev"></div>
            </div>
        </div>
        <div class="partners__button">
            <a href="#popup-partners" data-fancybox>Стать партнером</a>
        </div>
    </div>
</section>

    <section class="support lazy" id="support">
    <div class="container">
        <h2 class="support-title">При поддержке Института Психологии</h2>
        <p class="support-text">Cобытие для всех, кого волнуют вопросы саморазвития и&nbsp;ухода за&nbsp;собой. Вы&nbsp;познакомитесь с&nbsp;главными представителями российской beauty-индустрии, попробуете новинки уходовой и&nbsp;декоративной косметики, научитесь фейслифтингу и&nbsp;найдете свое вдохновение.</p>
        <div class="support-subtitle">Институт психологии&nbsp;&mdash; это:</div>
        <div class="support__block">
            <div class="support__block-card">
                <img src="img/support/school.svg" alt="">
                <span>Бакалавриат, магистратура, краткосрочные программы дополнительного образования.</span>
            </div>
            <div class="support__block-card">
                <img src="img/support/school.svg" alt="">
                <span>Современные учебные планы, включающий в&nbsp;себя основы нейропсихологии, педагогики, консультативной психологии и&nbsp;психогенетики.</span>
            </div>
            <div class="support__block-card">
                <img src="img/support/school.svg" alt="">
                <span>Возможность обучения на&nbsp;дистанционной форме, в&nbsp;любое удобное время.</span>
            </div>
            <div class="support__block-card">
                <img src="img/support/school.svg" alt="">
                <span>Преподаватели&nbsp;&mdash; действующий психологи с&nbsp;огромным багажом знаний.</span>
            </div>
            <div class="support__block-card">
                <img src="img/support/school.svg" alt="">
                <span>Собственная психологическая лаборатория.</span>
            </div>
            <div class="support__block-card">
                <img src="img/support/school.svg" alt="">
                <span>Современное оборудованием для практической диагностики.</span>
            </div>
        </div>
    </div>
</section>
    <section class="organizer lazy">
    <div class="container">
        <h2 class="organizer-title">Организатор</h2>
        <p class="organizer-text">Корпорация &laquo;Синергия&raquo;&nbsp;&mdash; один из&nbsp;самых узнаваемых брендов в&nbsp;сфере российского образования. В&nbsp;структуру Корпорации входят более 50&nbsp;образовательных организаций и&nbsp;сервисных компаний.</p>
        <p class="organizer-text">&laquo;Синергия&raquo; обладает широкими ресурсами и&nbsp;огромным опытом в&nbsp;области организации онлайн- и&nbsp;офлайн-мероприятий, рекламных и&nbsp;маркетинговых кампаний, продаж, guest-менеджмента и&nbsp;digital-продвижения. Подтвержденная временем и&nbsp;практикой экспертиза Корпорации позволяет комплексно и&nbsp;оперативно решать любые задачи в&nbsp;области event-продакшена.</p>
    </div>
</section>
    
        
<section class="intro bottom lazy">

    <div class="container">
        <div class="intro__flex">
            <div class="intro__logo">
                <img src="img/intro/logo.svg" alt="">
            </div>
            <div class="intro__block">
                <div class="intro__block-type">
                    БЕСПЛАТНОЕ УЧАСТИЕ ОНЛАЙН
                </div>
                <div class="intro__block-data">
                    <span>6&nbsp;ноября 2020</span>
                    <!-- <div class="line"></div>
                    <span>Golden Palace Москва</span> -->

                </div>
                <h1 class="intro__block-title">Synergy Beauty Forum</h1>
                <h2 class="intro__block-subtitle">Форум о&nbsp;красоте, beauty-индустрии<br>и&nbsp;заботе о&nbsp;себе</h2>
                <div class="intro__block-link">
                    #КрасивыйФорум
                </div>
            </div>
        </div>
    </div>
</section>
    
    
<section class="form__block lazy">

    <div class="container">
        


<form action="<?=$action;?>&form=form_registration" class="form form__vertical">

 
  <div class="form__title section-title">Принять участие бесплатно</div>

  
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

<div class="fixed_button">
    <a href="#popup-reg" class="" data-fancybox><?=$btn?></a>
</div>



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