{% if THANKS %}
<footer class="footer thanks_footer lazy">
{% else %}
<footer class="footer lazy">
{% endif %}
    <div class="container">
        <div class="footer__block">
            <div class="footer__block-logo">
                {% if THANKS %}
                <img src="img/header/logo.svg" alt="">
                {% else %}
                <img src="img/footer/logo.svg" alt="">
                {% endif %}
            </div>
            <div class="footer__block-link">
                <a href="#privacy" data-fancybox class="link">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>
{% if PRICE %}
{% else %}
<div class="fixed_button">
    <a href="#popup-reg" class="" data-fancybox><?=$btn?></a>
</div>
{% endif %}