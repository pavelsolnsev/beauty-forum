{% from './data.nj' import partner as partner %}
<section class="partners">
    <div class="container">
        <h2 class="partners-title">Наши партнеры</h2>
        <div class="partners__noswipe">
            {% for item in partner %}
                <a href="{{ item.link | safe }}" target="_blank" class="partners__block-card">
                    <img src="img/partners/{{ item.name | safe }}.png" alt="">
                </a>
            {% endfor %}
        </div>
        <div class="partners__block swiper-container">
            <div class="swiper-wrapper">
            {% for item in partner %}
                <a href="{{ item.link | safe }}" target="_blank" class="partners__block-card swiper-slide">
                    <img src="img/partners/{{ item.name | safe }}.png" alt="">
                </a>
            {% endfor %}
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
