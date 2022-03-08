<div class="base">
<div class="profile">
  <div class="photo">
	<img src="imgs/light_photo_sympa.jpeg"/>
  </div>
  <div class="info">
	<h1 class="name"><a href="index.php">Axel Marmoret</a></h1>
	<h2 class="job">PhD Student, Computer Science Engineer</h2>
  </div>
</div>
<?php
$homeurl = '/index.php';
  $currentpage = $_SERVER['REQUEST_URI'];
  if(!str_ends_with($currentpage, 'index.php')) {
    include('about_me.php');
  }    
?>
<div class="contact">
  <h3>Contact Me</h3>
  <div class="email"><a href="mailto:axel.marmoret@irisa.fr"><i class="fas fa-envelope"></i><span>My mail adress</span></a></div>
  <div class="address"><a href="https://goo.gl/maps/3sw2My34x8vZPEP86" target="_blank"><i class="fas fa-map-marker"></i><span>Living in Rennes, France</span></a></div>
</div>
<div class="follow">
  <h3>Follow Me</h3>
  <div class="box">
	<a href="https://gitlab.inria.fr/amarmore" target="_blank"><i class="fab fa-gitlab "></i></a>
	<a href="https://hal.archives-ouvertes.fr/search/index/?q=%2A&authFullName_s=Axel+Marmoret" target="_blank"><i class="far fa-file-alt"></i></a>
	<a href="https://fr.linkedin.com/in/axel-marmoret-732491136" target="_blank"><i class="fab fa-linkedin"></i></a>
	<a href="https://open.spotify.com/user/e-xa" target="_blank"><i class="fab fa-spotify"></i></a>
  </div>
</div>
</div>
  