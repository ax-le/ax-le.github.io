---
layout: page
title: teaching
permalink: /teaching/
description: Courses I'm involved in.
nav: true
nav_order: 5
display_categories: [Still Given, Given in the Past]
---

<div class="projects">

  {% for category in page.display_categories %}
  <a id="{{ category }}" href=".#{{ category }}">
    <h2 class="category">{{ category }}</h2>
  </a>
  {% assign categorized_courses = site.teaching | where: "category", category %}
  {% assign sorted_courses = categorized_courses | sort: "importance" %}


    {% for course in sorted_courses %}
        <div class="clearfix">
        {% include course.liquid %}
        </div>
    {% endfor %}
    
  {% endfor %}


</div>

