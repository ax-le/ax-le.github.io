---
layout: page
title: music
permalink: /music/
description: Music stuff. That I make or that I listen to.
nav: true
nav_order: 7
display_categories: [Exciting new stuff, Classics]
horizontal: false
---
<div class="projects">
    <a id="stuff_i_made" href=".#stuff_i_made">
      <h2 class="category">Stuff I made</h2>
    </a>
    {% for band in site.data.bands %}
      {% include band.liquid band=band %}
    {% endfor %}
</div>


<div class="projects">
    {% for category in page.display_categories %}
        <a id="{{ category }}" href=".#{{ category }}">
            <h2 class="category">{{ category }} (ordered)</h2>
        </a>
        {% assign categorized_music = site.music | where: "category", category %}
        {% assign sorted_music = categorized_music | sort: "importance" %}
        <!-- Generate cards for each music -->

        <div class="row row-cols-1 row-cols-md-4">
            {% for music in sorted_music %}
            {% include music.liquid %}
            {% endfor %}
        </div>

    {% endfor %}

</div>
