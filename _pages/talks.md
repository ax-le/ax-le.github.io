---
layout: page
title: talks
permalink: /talks/
nav: false
horizontal: true
---

<div class="projects">

  {% assign talks_by_year = site.talks | group_by_exp: "talk", "talk.year" | sort: "name" | reverse %}
  {% for year_group in talks_by_year %}
  {% assign year = year_group.name %}
  <a id="{{ year }}" href=".#{{ year }}">
    <h2 class="category">{{ year }}</h2>
  </a>

    {% for talk in year_group.items %}
        <div class="clearfix">
        {% include talk.liquid %}
        </div>
    {% endfor %}
    
  {% endfor %}


</div>

