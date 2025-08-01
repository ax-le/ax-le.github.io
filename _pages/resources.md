---
layout: page
title: additional resources
permalink: /resources/
nav: false
horizontal: true
display_categories: [examples, conferences]
---

<div class="projects">

  {% for category in page.display_categories %}
  <a id="{{ category }}" href=".#{{ category }}">
    <h2 class="category">{{ category }}</h2>
  </a>
  {% assign categorized_resources = site.resources | where: "category", category %}
  {% assign sorted_resources = categorized_resources | sort: "year" | reverse %}

  <!-- Generate cards for each project -->

  {% if page.horizontal %}

    <div class="container">
      <div class="row row-cols-1 row-cols-md-2">
      {% for project in sorted_resources %}
        {% include projects_horizontal.liquid %}
      {% endfor %}
      </div>
    </div>

  {% else %}

    <div class="row row-cols-1 row-cols-md-3">
      {% for project in sorted_resources %}
        {% include projects.liquid %}
      {% endfor %}
    </div>

  {% endif %}

  {% endfor %}

</div>
