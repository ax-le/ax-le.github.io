---
layout: page
title: talks
permalink: /talks/
nav: false
horizontal: true
display_years: [2024,2023,2022]
---

<div class="projects">


  {% for year in page.display_years %}
  <a id="{{ year }}" href=".#{{ year }}">
    <h2 class="category">{{ year }}</h2>
  </a>
  {% assign categorized_talks = site.talks | where: "year", year %}

    {% for talk in categorized_talks %}
        <div class="clearfix">
        {% include talk.liquid %}
        </div>
    {% endfor %}
    
  {% endfor %}


</div>

