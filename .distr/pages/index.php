{% extends "default.php" %}

{% block blocks %}
    {% include 'header/block.php' %}
    {% include 'intro/block.php' %}
    {% include 'form__block/block.php' %}
    {% include 'concept/block.php' %}
    {% set WHITE = true %}
        {% include 'form__block/block.php' %}
    {% set WHITE = false %}
    {% include 'about/block.php' %}
    {% include 'speakers/block.php' %}
    {#% include 'price/block.php' %#}
    {% include 'partners/block.php' %}
    {% include 'support/block.php' %}
    {% include 'organizer/block.php' %}
    {% set BOTTOM = true %}
        {% include 'intro/block.php' %}
    {% set BOTTOM = false %}
    {% include 'form__block/block.php' %}
    {% include 'footer/block.php' %}
{% endblock %}


{% block popups %}
    {% include 'popups/block.php' %}
{% endblock %}
