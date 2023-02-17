{% from './data.nj' import speaker as speaker %}
<section class="speakers lazy" id="speakers">
    <div class="container">
        <h2 class="speakers-title">Спикеры</h2>
        <div class="speakers__block" data-more-options='{ "target": ".speakers__block-card", "init_desktop": 6, "init_mobile": 2, "show_desktop": 3, "show_mobile": 2 }'>
            {% for item in speaker %}
                <div class="speakers__block-card" data-more-hidden>
                    <div class="speakers__block-card__top">
                        <h3 class="name">{{ item.name | safe }}</h3>
                        <div class="work">{{ item.work | safe }}</div>
                        <a href="#popup-{{ item.id | safe }}" class="link" data-fancybox>Подробнее</a>
                    </div>
                    <div class="speakers__block-card__speaker">
                        <img src="img/speakers/{{ item.id | safe }}.png" alt="">
                    </div>
                </div>
            {% endfor %}
        </div>
        <div class="speakers__block-button" data-more-button>
            Показать еще спикеров
        </div>
    </div>
</section>