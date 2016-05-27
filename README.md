# twig_not_empty
Adds a Twig notEmpty test for Drupal 8.

Usage:  Fields

```
{% if content.field_name is notEmpty %}
  <div class="field_name">
    {{ content.field_name }}
  </div>
{% endif %}
```

Usage: Regions

```
{% if page.content is notEmpty %}
  {{ page.content }}
{% endif %}
```

