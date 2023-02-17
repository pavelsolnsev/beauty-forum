<section class="popup popup_form" id="popup-phone">
    <div class="container">
    {{ form.form(form="form", title='Заказать звонок', button='Заказать') }}
    </div>
</section>
<section class="popup popup_form" id="popup-reg">
    <div class="container">
    {{ form.form(form="form") }}
    </div>
</section>
<section class="popup popup_form" id="popup-partners">
    <div class="container">
    {{ form.form(form="form_partners", title='Стать партнером форума', button='Отправить') }}
    </div>
</section>

{% from '../speakers/data.nj' import speaker as speaker %}
{% for item in speaker %}
<section class="popup popup_speakers" id="popup-{{ item.id | safe }}">
    <div class="popup_speakers__flex">
        <div class="popup_speakers__flex-speaker">
            <h3 class="title">{{ item.name | safe }}</h3>
            <p class="name">{{ item.text | safe }}</p>
            <img src="img/speakers/{{ item.id | safe }}.png" class="speaker_picture" alt="">
        </div>
        <div class="popup_speakers__flex-form">
        {{ form.form(form="form", button='Отправить') }}
        </div>
    </div>
</section>
{% endfor %}