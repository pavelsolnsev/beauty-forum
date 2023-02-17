{% if PRICE %}
<header class="header price__fixed lazy">
{% else %}
<header class="header">
{% endif %}
    <div class="container">
        <div class="header__block">
            <div class="header__block-logo">
                <img src="img/header/logo.svg" alt="">
            </div>
            {% if PRICE %}
            {% else %}
            <ul class="header__block-nav">
                <li><a href="#concept" class="scroll">Концепция</a></li>
                <li><a href="#about" class="scroll">Темы</a></li>
                <li><a href="#speakers" class="scroll">Спикеры</a></li>
                <!-- <li><a href="#price" class="scroll">Участие</a></li> -->
            </ul>
            {% endif %}
            {% if PRICE %}
            <div class="header__block-link price__block">
                <a href="<?=$phone_link?>" class="phone"><?=$phone?></a>
                <a href="<?=$phone_link?>" class="phone-mobile"><img src="img/header/phone.svg" alt=""></a>
                <a href="#popup-phone" class="link" data-fancybox>Заказать звонок</a>
            </div>
            {% else %}
            <div class="header__block-link">
                <a href="<?=$phone_link?>" class="phone"><?=$phone?></a>
                <a href="<?=$phone_link?>" class="phone-mobile"><img src="img/header/phone.svg" alt=""></a>
                <a href="#popup-phone" class="link" data-fancybox>Заказать звонок</a>
            </div>
            <div class="burger-menu"></div>
            {% endif %}
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