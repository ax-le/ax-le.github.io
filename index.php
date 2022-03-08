<?php include('header.php'); ?>
<body>
<div class="content">
  <?php include('side_bar_profile.php'); ?>
  <div class="func">
      <?php include('menu.php'); ?>
      <div class="content_block">
        <h3><i class="fas fa-smile"></i>Hello!</h3>
        My name is Axel Marmoret, I'm 25 years old, and I'm a PhD Student at IRISA, Rennes in France.<br>
        My PhD focuses on <a class="inner-link" href="research.php">structural segmentation of music</a>, that is, techniques to retrieve simplified organisation of a song.<br>
        For this task, I have mainly studied three paths (for now):<br>
        <ul>
          <dl>
            <dt><a class="inner-link" href="NTD.php">Nonnegative Tucker Decomposition</a> (Tensor Algebra)</dt>
            <dd>- A tensor factorization technique, similar in some way to NMF (Nonnegative Matrix Factorization) which is largely studied in MIR. This work resulted in a publication at the ISMIR 2020 conference and a sumbission at the ICASSP 2022 conference (see the "Publications" page).</dd>
            <br>
            <dt><a class="inner-link" href="barwisecompression.php">Barwise Music Compression</a></dt>
            <dd>- Linear and non-linear compression models, applied to a barwise representation of a song. This compressed representation is then used to infer the song structure.</dd>
            <br>
            <dt><a class="inner-link" href="polytopes.php">Polytopic representation of music</a></dt>
            <dd>- A paradigm which defines a local cost on a musical segment. The goal is then to minimize a global cost. At this time, it's mainly based on previous work from other researchers, and only works for symbolic audio.</dd>
          </dl>
        </ul>
        Finally, I am a music passionate (convenient for this subject !).<br>
        I also play drums (since 15 years or so), and I recently started bass (4 years ago).<br>
      </div>
      <div>
      </div>
    <?php include('footer.php'); ?>
  </div>
</div>
</body></html>
