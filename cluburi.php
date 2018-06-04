<?php
	$title = "GoTimișoara - Cluburi";
	include("includes/header.php");
?>	
	<div class="cluburi">
	<div class="slideshow">
	<div class="slideshow-container_cluburi">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 7</div>
    <img src="images/cluburi/bunker.jpg" style="width:100%">
    <div class="text"> CAPRICE</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 7</div>
    <img src="images/cluburi/club30.jpg" style="width:100%">
    <div class="text">Club30</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 7</div>
    <img src="images/cluburi/epicsociety.jpg" style="width:100%">
    <div class="text">Epic Society</div>
  </div>

    <div class="mySlides fade">
    <div class="numbertext">4 / 7</div>
    <img src="images/cluburi/Fratelli.jpg" style="width:100%">
    <div class="text">Fratelli</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">5 / 7</div>
    <img src="images/cluburi/Heaven.jpg" style="width:100%">
    <div class="text">Heaven</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">6 / 7</div>
    <img src="images/cluburi/Molly-Malones.jpg" style="width:100%">
    <div class="text">Molly Malone's</div>
  </div>
  
	<div class="mySlides fade">
    <div class="numbertext">7 / 7</div>
    <img src="images/cluburi/noname.jpg" style="width:100%">
    <div class="text">No Name</div>
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
<?php $var = "Cluburi"; include "map_include.php"; ?>
</div>
<?php
	include("includes/footer.php");
?>