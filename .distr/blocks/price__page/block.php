{% from './data.nj' import products_data as products_data %}
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
        {% for product in products_data %}
            <div class="price__page__block-card">
                <h3 class="title">{{ product.name | safe }}</h3>
                <div class="card_block">
                    <div class="card_block-block">
                        <div class="card_block-price">{{ product.price | safe }} руб.</div>
                        <ul class="card_block-list">
                            {{ product.text | safe }}
                        </ul>
                    </div>
                    <a href="#payments-{{ product.name | safe }}" class="card_block-btn" data-fancybox>Участвовать</a>
                </div>
            </div>
        {% endfor %}
        </div>
    </div>
</section>

<div hidden>
    <div class="popup popup_form" id="payments-Online">
        {%
            set add_fields = [
                {
                    name: 'product_id',
                    type: 'hidden',
                    value: '67278846'
                },
                {
                    name: 'event_id',
                    type: 'hidden',
                    value: '160'
                }
            ]
        %}
        <div class="container">
            {{ form.form(form='payments', type__ticket='ticketless', title='Купить', button='Купить', add_fields=add_fields) }}
        </div>
    </div>
    {% for product in products_data %}
    <div class="popup popup_form" id="payments-{{ product.name }}">
        {%
            set add_fields = [
            {
                name: 'tickets_count',
                type: 'number',
                placeholder: '1',
                value: '1'
            },
            {
                name: 'product_id',
                type: 'hidden',
                value: product.product_id | safe
            },
            {
                name: 'event_id',
                type: 'hidden',
                value: '160'
            }
            ]
        %}
        <div class="container">
            {{ form.form(form='payments', type__ticket='ticket', title='Купить', button='Купить', add_fields=add_fields) }}
        </div>
    </div>
    {% endfor %}
</div>