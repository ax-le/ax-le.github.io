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
    <div class="content_block">
      <h2>nn_fac</h2>
      <h4 class="center">pip install nn-fac</h4>
	Toolbox of nonnegative factorization techniques, for both matrices (NMF) and tensors (NN-CP, NN-PARAFAC2 and NTD).
  <br>
	These decompositions are computed by solving NNLS (NonNegative Least Squares) problems on every factor when optimizing with respect to the Euclidean norm, or with Multiplicative Updates subject to each factor when optimizing the Beta-divergences.
  <br><br>
	Note: the techniques of this toolbox will soon be integrated to the <a class="inner-link" href="https://github.com/tensorly/tensorly" target="_blank">tensorly toolbox</a> thanks to my colleague <a class="inner-link" href="https://www.researchgate.net/profile/Caglayan-Tuna" target="_blank">Caglayan Tuna</a>! :)
  <br><br>
  <small>Axel Marmoret, Jérémy Cohen. nn_fac: Nonnegative Factorization techniques toolbox. 2020.</small>
  <br>
    <div class="box">
      <a href="javascript:void(0);" onclick="open_or_close('nn_fac_bibtex')"><i class="fas fa-quote-left"></i></a>
      <a href="https://gitlab.inria.fr/amarmore/nonnegative-factorization" target="_blank"><i class="fab fa-gitlab"></i></a>
    </div>
    <div id="nn_fac_bibtex" class="hidden_content_block">
      <div class="citation_content">
        <p>@Misc{marmoret2020nnfac,
          author={Marmoret, Axel and Cohen, Jeremy},
          title = {nn_fac},
          howpublished = {\url{https://gitlab.inria.fr/amarmore/nonnegative-factorization}},
          year = {2020}}</p>
        </div>
    </div>
    </div>
    <div class="content_block">
      <h2>MusicNTD</h2>
      <h4 class="center">pip install musicntd</h4>
      Code related to pre and post-processing of music when analyzed with NTD, notably for music segmentation.
      <br>
      See <a class="inner-link" href="NTD.html">Nonnegative Tucker Decomposition</a> or our article "Uncovering Audio Patterns in Music with Nonnegative Tucker Decomposition for Structural Segmentation." for more details.
      <br><br>
      <small>Axel Marmoret, Jérémy Cohen, Nancy Bertin, Frédéric Bimbot. 2020.</small>
      <div class="box">
        <a href="javascript:void(0);" onclick="open_or_close('musicntd_bibtex')"><i class="fas fa-quote-left"></i></a>
        <a href="https://gitlab.inria.fr/amarmore/musicntd" target="_blank"><i class="fab fa-gitlab"></i></a>
      </div>
      <div id="musicntd_bibtex" class="hidden_content_block">
        <div class="citation_content">
            <p>@Misc{marmoret2020musicntd,
              author={Marmoret, Axel and Cohen, Jeremy and Bertin, Nancy and Bimbot, Frederic},
              title = {{MusicNTD}},
              howpublished = {\url{https://gitlab.inria.fr/amarmore/musicntd}},
              year = {2020}}</p>
        </div>
      </div>
    </div>

    <div class="content_block">
      <h2>BarwiseMusicCompression</h2>
      <h4 class="center">pip install not available yet.</h4>
      Code related to linear and non-linear barwise music compression, then used for music segmentation.
      <br>
      See <a class="inner-link" href="barwisecompression.html">barwise music compression</a> or our article "Barwise Compression Schemes for Audio-Based Music Structure Analysis." for more details.
      <br><br>
      <small>Axel Marmoret, Jérémy Cohen, Frédéric Bimbot. 2022.</small>
      <div class="box">
        <!--<a href="javascript:void(0);" onclick="open_or_close('musicae_bibtex')"><i class="fas fa-quote-left"></i></a>-->
        <a href="https://gitlab.inria.fr/amarmore/barwisemusiccompression" target="_blank"><i class="fab fa-gitlab"></i></a>
      </div>
      <div id="musicae_bibtex" class="hidden_content_block">
        <div class="citation_content">
            <p>@softwareversion{marmoret:hal-03406224v1,
  TITLE = {{MusicAE: Encoding songs with Autoencoders to reveal structure}},
  AUTHOR = {Marmoret, Axel and Cohen, J{\'e}r{\'e}my E and Bimbot, Fr{\'e}d{\'e}ric},
  URL = {https://hal.archives-ouvertes.fr/hal-03406224},
  YEAR = {2021},
  MONTH = Oct,
  SWHID = {swh:1:dir:a5df9cf7e88b8893dc205465dbd7ba6595869d0a;origin=https://hal.archives-ouvertes.fr/hal-03406224;visit=swh:1:snp:18fb7d99d56d01720cd104405c78dfe757c06308;anchor=swh:1:rev:fb43c7c06c6483761726c753df0905510487458b;path=/},
  LICENSE = {BSD 3-Clause ''New'' or ''Revised'' License},
  FILE = {https://hal.archives-ouvertes.fr/hal-03406224/file/zipHal.zip},
  HAL_ID = {hal-03406224},
  HAL_VERSION = {v1}}</p>
        </div>
      </div>
    </div>

    <div class="content_block">
      <h2>MusicAE (deprecated)</h2>
      <h4 class="center">pip install musicae</h4>
      Code related to single-song autoencoding, then used for music segmentation. This code is actually deprecated, because contained in the larger "barwisemusiccompression" package.
      <br>
      See the Single-Song AutoEncoder part in <a class="inner-link" href="barwisecompression.html">barwise music compression</a> or our article "Barwise Compression Schemes for Audio-Based Music Structure Analysis." for more details.
      <br><br>
      <small>Axel Marmoret, Jérémy Cohen, Frédéric Bimbot. 2021.</small>
      <div class="box">
        <a href="javascript:void(0);" onclick="open_or_close('musicae_bibtex')"><i class="fas fa-quote-left"></i></a>
        <a href="https://gitlab.inria.fr/amarmore/musicae" target="_blank"><i class="fab fa-gitlab"></i></a>
      </div>
      <div id="musicae_bibtex" class="hidden_content_block">
        <div class="citation_content">
            <p>@softwareversion{marmoret:hal-03406224v1,
  TITLE = {{MusicAE: Encoding songs with Autoencoders to reveal structure}},
  AUTHOR = {Marmoret, Axel and Cohen, J{\'e}r{\'e}my E and Bimbot, Fr{\'e}d{\'e}ric},
  URL = {https://hal.archives-ouvertes.fr/hal-03406224},
  YEAR = {2021},
  MONTH = Oct,
  SWHID = {swh:1:dir:a5df9cf7e88b8893dc205465dbd7ba6595869d0a;origin=https://hal.archives-ouvertes.fr/hal-03406224;visit=swh:1:snp:18fb7d99d56d01720cd104405c78dfe757c06308;anchor=swh:1:rev:fb43c7c06c6483761726c753df0905510487458b;path=/},
  LICENSE = {BSD 3-Clause ''New'' or ''Revised'' License},
  FILE = {https://hal.archives-ouvertes.fr/hal-03406224/file/zipHal.zip},
  HAL_ID = {hal-03406224},
  HAL_VERSION = {v1}}</p>
        </div>
      </div>
    </div>

	<div class="content_block">
      <h2>MusicOnPolytopes</h2>
      Code associated with the polytopical framework, used as a structural segmentation criterion for symbolic music.
      <br>
      See <a class="inner-link" href="polytopes.html">Polytopes</a> for more details.
      <br><br>
    <small>Axel Marmoret, Jérémy Cohen, Frédéric Bimbot. 2021.</small>
    <div class="box">
      <a href="javascript:void(0);" onclick="open_or_close('musicpolytopes_bibtex')"><i class="fas fa-quote-left"></i></a>
      <a href="https://gitlab.inria.fr/amarmore/musiconpolytopes" target="_blank"><i class="fab fa-gitlab"></i></a>
    </div>
    <div id="musicpolytopes_bibtex" class="hidden_content_block">
      <div class="citation_content">
        <p>@Misc{marmoret2021musiconpolytopes,
          author={Marmoret, Axel and Cohen, J{\'e}r{\'e}my E and Bimbot, Fr{\'e}d{\'e}ric},
          title = {{MusicOnPolytopes}},
          howpublished = {\url{https://gitlab.inria.fr/amarmore/musiconpolytopes}},
          year = {2021}}</p>
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
