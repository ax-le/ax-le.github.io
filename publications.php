<?php include('header.php'); ?>
<script>
function open_or_close(id){
  var myDiv = document.getElementById(id)
  if (myDiv.style.display=='block'){
	myDiv.style.display='none';
  } else {
	myDiv.style.display='block';
  }
};
</script>
<body>
<div class="content">
  <?php include('side_bar_profile.php'); ?>
  <div class="func">
      <?php include('menu.php'); ?>
    <h1>Conference Papers</h1>
    <h2>Accepted</h2>
    <div class="content_block">
      <h2>Uncovering Audio Patterns in Music with Nonnegative Tucker Decomposition for Structural Segmentation.</h2>
      Axel Marmoret, Jérémy Cohen, Nancy Bertin, Frédéric Bimbot. ISMIR 2020 - 21st International Society for Music Information Retrieval, Oct 2020, Montréal (Online), Canada. pp.1-7.
      <br><br>
        <div class="box">
          <a href="javascript:void(0);" onclick="open_or_close('uncov_abstract')"><i class="fas fa-info-circle"></i></a>
          <a href="javascript:void(0);" onclick="open_or_close('uncov_bibtex')"><i class="fas fa-quote-left"></i></a>
          <a href="https://hal.archives-ouvertes.fr/hal-02928733v1" target="_blank"><i class="fas fa-unlock-alt"></i></a>
          <a href="https://gitlab.inria.fr/amarmore/musicntd/-/tree/0.1.0" target="_blank"><i class="fab fa-gitlab"></i></a>
          <a href="https://youtu.be/qN8_y-k9KxI" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    <div id="uncov_bibtex" class="hidden_content_block">
      <div class="citation_content">
          <p>@inproceedings{marmoret2020uncovering,
  title={Uncovering Audio Patterns in Music with Nonnegative Tucker Decomposition for Structural Segmentation},
  author={Marmoret, Axel and Cohen, Jeremy and Bertin, Nancy and Bimbot, Frederic},
  booktitle={ISMIR 2020-21st International Society for Music Information Retrieval},
  year={2020}}</p>
      </div>
    </div>
    <div id="uncov_abstract" class="hidden_content_block">
      <div class="citation_content">
          <p>Abstract: Recent work has proposed the use of tensor decomposition to model repetitions and to separate tracks in loop-based electronic music.
          The present work investigates further on the ability of Nonnegative Tucker Decompositon (NTD) to uncover musical patterns and structure in pop songs in their audio form.
          Exploiting the fact that NTD tends to express the content of bars as linear combinations of a few patterns, we illustrate the ability of the decomposition to capture and single out repeated motifs in the corresponding compressed space, which can be interpreted from a musical viewpoint.
          The resulting features also turn out to be efficient for structural segmentation, leading to experimental results on the RWC Pop data set which are potentially challenging state-of-the-art approaches that rely on extensive example-based learning schemes.
        </p>
      </div>
    </div>
  </div>

  <h2>Under review</h2>
  <div class="content_block">
    <h2>Barwise Compression Schemes for Audio-Based Music Structure Analysis </h2>
    Axel Marmoret, Jérémy Cohen, Frédéric Bimbot. arXiv preprint arXiv:2202.04981.
    <h4><em>Submitted to SMC 2022</em></h4>
      <div class="box">
        <a href="javascript:void(0);" onclick="open_or_close('barcomp_abstract')"><i class="fas fa-info-circle"></i></a>
        <a href="javascript:void(0);" onclick="open_or_close('barcomp_bibtex')"><i class="fas fa-quote-left"></i></a>
        <a href="https://hal.archives-ouvertes.fr/hal-03600873" target="_blank"><i class="fas fa-unlock-alt"></i></a>
        <a href="https://gitlab.inria.fr/amarmore/barwisemusiccompression" target="_blank"><i class="fab fa-gitlab"></i></a>
      </div>
  <div id="barcomp_bibtex" class="hidden_content_block">
    <div class="citation_content">
        <p>@article{marmoret2022barwise,
  title={Barwise Compression Schemes for Audio-Based Music Structure Analysis},
  author={Marmoret, Axel and Cohen, J{\'e}r{\'e}my E and Bimbot, Fr{\'e}d{\'e}ric},
  journal={arXiv preprint arXiv:2202.04981},
  year={2022}}</p>
    </div>
  </div>
  <div id="barcomp_abstract" class="hidden_content_block">
    <div class="citation_content">
        <p>Abstract: Music Structure Analysis (MSA) consists in segmenting a music piece in several distinct sections.
          We approach MSA within a compression framework, under the hypothesis that the structure is more easily revealed by a simplified representation of the original content of the song.
          More specifically, under the hypothesis that MSA is correlated with similarities occurring at the bar scale, linear and non-linear compression schemes can be applied to barwise audio signals.
          Compressed representations capture the most salient components of the different bars in the song and are then used to infer the song structure using a dynamic programming algorithm.
          This work explores both low-rank approximation models such as Principal Component Analysis or Nonnegative Matrix Factorization and "piece-specific" Auto-Encoding Neural Networks, with the objective to learn latent representations specific to a given song.
          Such approaches do not rely on supervision nor annotations, which are well-known to be tedious to collect and possibly ambiguous in MSA description.
          In our experiments, several unsupervised compression schemes achieve a level of performance comparable to that of state-of-the-art supervised methods (for 3s tolerance) on the RWC-Pop dataset, showcasing the importance of the barwise compression processing for MSA.
      </p>
    </div>
  </div>
</div>
<h1>Pre-prints</h1>
<div class="content_block">
  <h2>Nonnegative Tucker Decomposition with Beta-divergence for Music Structure Analysis of audio signals.</h2>
  Axel Marmoret, Florian Voorwinden, Valentin Leplat, Jérémy E Cohen, Frédéric Bimbot. arXiv preprint arXiv:2110.14434.
  <h4><em>Rejected from ICASSP 2022</em></h4>
    <div class="box">
      <a href="javascript:void(0);" onclick="open_or_close('nonnegative_abstract')"><i class="fas fa-info-circle"></i></a>
      <a href="javascript:void(0);" onclick="open_or_close('nonnegative_bibtex')"><i class="fas fa-quote-left"></i></a>
      <a href="https://hal.archives-ouvertes.fr/hal-03409508v1" target="_blank"><i class="fas fa-unlock-alt"></i></a>
      <a href="https://gitlab.inria.fr/amarmore/nonnegative-factorization/-/tree/v0.2.0" target="_blank"><i class="fab fa-gitlab"></i></a>
    </div>
<div id="nonnegative_bibtex" class="hidden_content_block">
  <div class="citation_content">
      <p>@article{marmoret2021nonnegative,
  title={Nonnegative Tucker Decomposition with Beta-divergence for Music Structure Analysis of audio signals},
  author={Marmoret, Axel and Voorwinden, Florian and Leplat, Valentin and Cohen, J{\'e}r{\'e}my E and Bimbot, Fr{\'e}d{\'e}ric},
  journal={arXiv preprint arXiv:2110.14434},
  year={2021}}</p>
  </div>
</div>
<div id="nonnegative_abstract" class="hidden_content_block">
  <div class="citation_content">
      <p>Abstract: Nonnegative Tucker Decomposition (NTD), a tensor decomposition model, has received increased interest in the recent years because of its ability to blindly extract meaningful patterns in tensor data.
      Nevertheless, existing algorithms to compute NTD are mostly designed for the Euclidean loss.
      On the other hand, NTD has recently proven to be a powerful tool in Music Information Retrieval.
      This work proposes a Multiplicative Updates algorithm to compute NTD with the beta-divergence loss, often considered a better loss for audio processing.
      We notably show how to implement efficiently the multiplicative rules using tensor algebra, a naive approach being intractable.
      Finally, we show on a Music Structure Analysis task that unsupervised NTD fitted with beta-divergence loss outperforms earlier results obtained with the Euclidean loss.
</p>
  </div>
</div>
</div>


    <div></div>
    <footer>
      <div class="copyright">
        <p>For the theme: Copyright (c) 2020 by Naomi Bastian Weatherford <a target="_blank" class="inner-link" href="https://codepen.io/astronaomical/pen/KexYgb">(https://codepen.io/astronaomical/pen/KexYgb)</a></p>
      </div>
    </footer>
  </div>
</div>
</body></html>
