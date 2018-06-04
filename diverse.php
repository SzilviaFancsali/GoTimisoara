<?php
	$title = "GoTimișoara - Diverse";
	include("includes/header.php");
?>	
	<div class="diverse">
	<div class="slideshow">
	<div class="slideshow-container_cluburi">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 9</div>
    <img src="images/diverse/4dx-imax.jpg" style="width:100%">
    <div class="text"> 4DX și IMAX</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 9</div>
    <img src="images/diverse/Arena-Paintball.jpg" style="width:100%">
    <div class="text">Arena Paintball</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 9</div>
    <img src="images/diverse/Balul-Vienez.jpg" style="width:100%">
    <div class="text">Balul Vienez</div>
  </div>

    <div class="mySlides fade">
    <div class="numbertext">4 / 9</div>
    <img src="images/diverse/blueline.jpg" style="width:100%">
    <div class="text">Blue Line - The Shooting Range</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">5 / 9</div>
    <img src="images/diverse/choco-kebab.jpg" style="width:100%">
    <div class="text">Choco Kebab</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">6 / 9</div>
    <img src="images/diverse/Exitgames-România.jpg" style="width:100%">
    <div class="text">Exitgames România</div>
  </div>
  
	<div class="mySlides fade">
    <div class="numbertext">7 / 9</div>
    <img src="images/diverse/Megazone-LaserTag.jpg" style="width:100%">
    <div class="text">Megazone LaserTag</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">8 / 9</div>
    <img src="images/diverse/Red-Motor.jpg" style="width:100%">
    <div class="text">Red Motor</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">9 / 9</div>
    <img src="images/diverse/Timisoara.jpg" style="width:100%">
    <div class="text">Plimbări cu hidrobicicleta sau caiacul</div>
  </div>
  
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<span class="dot" onclick="currentSlide(3)"></span> 
	<span class="dot" onclick="currentSlide(4)"></span>
	<span class="dot" onclick="currentSlide(5)"></span>
	<span class="dot" onclick="currentSlide(6)"></span>
	<span class="dot" onclick="currentSlide(7)"></span>
</div>
</div>
<?php $var = "Diverse"; include "map_include.php"; ?>
</div>
<?php
	include("includes/footer.php");
?>
