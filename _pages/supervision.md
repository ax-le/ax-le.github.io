---
layout: page
title: supervision
permalink: /supervision/
description: People I supervise(d)
nav: true
nav_order: 4
display_categories: [PhD, Intern]
horizontal: true
---

<div class="projects">
    {% for category in page.display_categories %}
    <a id="{{ category }}" href=".#{{ category }}">
      <h2 class="category">{{ category }}</h2>
    </a>
    {% assign categorized_profiles = site.supervision | where: "category", category %}
    {% assign sorted_profiles = categorized_profiles | sort: "starting_date" | reverse %}

        {% for person in sorted_profiles %}
          <div class="clearfix">
            {% include person.liquid %}
          </div>
        {% endfor %}
    {% endfor %}
</div>

