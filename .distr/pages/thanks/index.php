{% extends "default.php" %}
<div class="wrapper">
  {% block blocks %}
    {% set THANKS = true %}
      {% include 'header/block.php' %}
      {% include 'thanks/block.php' %}
      {% include 'footer/block.php' %}
    {% set THANKS = false %}
  {% endblock %}
  <a href="//sydi.ru" hidden></a>
</div>