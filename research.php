<?php include('header.php'); ?>
<body>
<div class="content">
  <?php include('side_bar_profile.php'); ?>
  <div class="func">
      <?php include('menu.php'); ?>
      <div class="content_block">
        <h3><i class="fas fa-grip-horizontal"></i>Structural Segmentation of Music</h3>
        My PhD focuses on structural segmentation of music, that is, techniques to retrieve a simplified organisation of a song.<br>
        The core idea in structural segmentation is that music is based on a limited set of segments which are repeated across the song (potentially with alteration).<br>
        <img class="content-img" src="imgs/structural_segmentation.png"/><br>
        As presented above, a classical musical structure is the alternation of verses, chorus and solos.<br>

        Structure is multi-dimensional, as every segment can be divided in shorter segments, musical phrases or lines, and, conversely, segments may be gathered.<br>
        <br>
        For this task, I have mainly studied three paths (for now):
        <ul class="inline">
          <ul>
            <dl>
              <dt><a class="inner-link" href="NTD.php">Nonnegative Tucker Decomposition (click to expand)</a></dt>
              <dd>- In short: it's a tensor factorization technique, similar in some way to NMF (Nonnegative Matrix Factorization), which can extract patterns in the song.</dd>
              <br>
              <dt><a class="inner-link" href="barwisecompression.php">Barwise Music Compression (click to expand)</a></dt>
              <dd>- In short: it uses linear and non-linear compression methods to compress the different bars of the song, and then infers the song structure with these compressed representations.</dd>
              <br>
              <dt><a class="inner-link" href="polytopes.php">Polytopic representation of music (click to expand)</a></dt>
              <dd>- In short: it's a paradigm which defines a local cost on a musical segment. The goal is then to minimize the sum of these local costs at the scale of the song.</dd>
            </dl>
          </ul>
        </ul>
      </div>

      <div class="content_block">
        <h3><i class="fas fa-headphones"></i>Music in general</h3>
        Finally, I am passionate about music (convenient for this subject !).<br>
        I also play drums (since 15 years or so), and I recently started bass (4 years ago).<br>
        Even if my musical practice is not directly related to my research, it is a huge part of my life, and, consequently, has a strong impact on my interest for the field (and on how I conceive music).
      </div>
      <div>
      </div>
    <footer>
      <div class="copyright">
        <p>For the theme: Copyright (c) 2020 by Naomi Bastian Weatherford <a target="_blank" class="inner-link" href="https://codepen.io/astronaomical/pen/KexYgb">(https://codepen.io/astronaomical/pen/KexYgb)</a></p>
      </div>
    </footer>
  </div>
</div>
</body></html>
