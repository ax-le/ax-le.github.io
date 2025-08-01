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

    <a id="stuff I made" href=".#stuff_i_made">
      <h2 class="category">Stuff I made</h2>
    </a>
    <div class="clearfix">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-1">
                <div class="card h-100 hoverable">
                    <div class="row no-gutters">
                        <div class="card-body">
                            <h1 align="center" class="card-title">NDC</h1>
                            <h5>Instrumental groove rock/metal band - Trio (drummer)</h5>
                                <div class="social">
                                    <div class="contact-icons">
                                        <a href="https://open.spotify.com/intl-fr/artist/76YwJfiLX2BZpTQIA8SkxB?si=o9PAl9beQci_WhVaMc98NQ" target="_blank"><i class="fab fa-spotify"></i></a>
                                        <a href="https://deezer.page.link/zfW3Wv3ikxqNt9vW9" target="_blank"><i class="fab fa-deezer"></i></a>
                                        <a href="https://ndcmusic.bandcamp.com/album/dragon-baton" target="_blank"><i class="fab fa-bandcamp"></i></a>
                                        <a href="https://www.youtube.com/playlist?list=PLbrbETXTA4-AO8fy5eDiYYkdLs8FtZOp4" target="_blank"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <br><br>
                                <div align="center">
                                    <h2>Awesome clip</h2>
                                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/61QtrT5_kCU?si=yJjjHsAO5TXHD9s3" width="80%" height="300px" title="NDC awesome video clip" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
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
