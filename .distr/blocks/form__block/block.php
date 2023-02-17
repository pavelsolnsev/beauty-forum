{% if WHITE %}
<section class="form__block white lazy">
{% else %}
<section class="form__block lazy">
{% endif %}
    <div class="container">
        {{ form.form('form', form_class='form__vertical', title_class='section-title') }}
    </div>
</section>