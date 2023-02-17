{% macro form(form="form_registration", type__ticket, form_class, title_class, button_class, title='Принять участие бесплатно', button='Участвовать', form_text, add_fields, exclude_fields, footer_text) %}

{% if form=='payments' %}
<form action="<?=$action_payment?>&type={{ type__ticket }}" class="form {{form_class}}">
{% else %}
<form action="<?=$action;?>&form={{ form }}" class="form {{form_class}}">
{% endif %}
 
  <div class="form__title {{ title_class }}">{{ title | safe }}</div>

  {% if form_text.length %}
  <div class="form__text">{{ form_text | safe }}</div>
  {% endif %}
  <div class="form__fields flex">
    {% if not exclude_fields.name %}
    {{ form_item( 'name', 'text', '', 'Имя', true ) }}
    {% endif %}

    {% if not exclude_fields.phone %}
    {{ form_item(  'phone', 'text', '', 'Телефон', true ) }}
    {% endif %}

    {% if not exclude_fields.email %}
    {{ form_item( 'email', 'email', '', 'E-mail', true ) }}
    {% endif %}

    {% if add_fields.length %}
    {% for item in add_fields %}
    {{ form_item( item.name, item.type, item.value, item.placeholder, item.required, item.inputcl) }}
    {% endfor %}
    {% endif %}

    <button class="button form__btn" type="submit">{{ button }}</button>

  </div>
    <div class="form__bottom-wrapper">
      {{ form_policy() }}
    </div>
</form>
{% endmacro %}




{% macro form_item(name, type, value, placeholder, required, inputcl, num) %}
<div class="form__item {{ 'd-none' if type == 'hidden' }}">
  {% if type == 'textarea' %}
  <textarea name="{{ name }}" placeholder="{{ placeholder }}" class="form__input form__textarea" {{ 'required' if required }}></textarea>
  {% else %}
  <input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder }}" class="form__input {{ inputcl }}" value="{{ value }}" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} {{ 'pattern="[0-9]*" inputmode="numeric"' if num }}>
  {% endif %}
</div>
{% endmacro %}

{% macro form_policy() %}
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
{% endmacro %}