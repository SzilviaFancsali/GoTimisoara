<?php
	$title = "GoTimișoara - Restaurante";
	include("includes/header.php");
?>	
	<div class="restaurante">
	<div class="slideshow">
	<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 17</div>
    <img src="images/restaurante/caprice.jpg" style="width:100%">
    <div class="text">Restaurant CAPRICE</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 17</div>
    <img src="images/restaurante/casabunicii.jpg" style="width:100%">
    <div class="text">Casa bunicii</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 17</div>
    <img src="images/restaurante/casabuniciidumbravita.jpg" style="width:100%">
    <div class="text">Casa bunicii 2 - Dumbrăvița</div>
  </div>

    <div class="mySlides fade">
    <div class="numbertext">4 / 17</div>
    <img src="images/restaurante/casadelsole.jpg" style="width:100%">
    <div class="text">Casa del Sole</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">5 / 17</div>
    <img src="images/restaurante/craft.jpg" style="width:100%">
    <div class="text">Craft Rooftop</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">6 / 17</div>
    <img src="images/restaurante/dafjunior.jpg" style="width:100%">
    <div class="text">DAF Junior</div>
  </div>
  
	<div class="mySlides fade">
    <div class="numbertext">7 / 17</div>
    <img src="images/restaurante/dinar.jpg" style="width:100%">
    <div class="text">Restaurant Dinar</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">8 / 17</div>
    <img src="images/restaurante/flora.jpg" style="width:100%">
    <div class="text">Restaurant Flora</div>
  </div>
  
	<div class="mySlides fade">
    <div class="numbertext">9 / 17</div>
    <img src="images/restaurante/koloro.jpg" style="width:100%">
    <div class="text">KOLORO</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">10 / 17</div>
    <img src="images/restaurante/lloyd.jpg" style="width:100%">
    <div class="text">Lloyd</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">11 / 17</div>
    <img src="images/restaurante/localhost.jpg" style="width:100%">
    <div class="text">Localhost Pub</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">12 / 17</div>
    <img src="images/restaurante/merlot.jpg" style="width:100%">
    <div class="text">Restaurant Merlot</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">13 / 17</div>
    <img src="images/restaurante/nora.jpg" style="width:100%">
    <div class="text">Restaurant Nora</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">14 / 17</div>
    <img src="images/restaurante/riviere.jpg" style="width:100%">
    <div class="text">Rivière Brasserie</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">15 / 17</div>
    <img src="images/restaurante/sky-restaurant.jpg" style="width:100%">
    <div class="text">Sky Restaurant</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">16 / 17</div>
    <img src="images/restaurante/valery.jpg" style="width:100%">
    <div class="text">Valery</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">17 / 17</div>
    <img src="images/restaurante/vineri15.jpg" style="width:100%">
    <div class="text">Vineri 15</div>
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
	<span class="dot" onclick="currentSlide(8)"></span>
    <span class="dot" onclick="currentSlide(9)"></span>
	<span class="dot" onclick="currentSlide(10)"></span>
	<span class="dot" onclick="currentSlide(11)"></span>
	<span class="dot" onclick="currentSlide(12)"></span>
	<span class="dot" onclick="currentSlide(13)"></span>
	<span class="dot" onclick="currentSlide(14)"></span>
	<span class="dot" onclick="currentSlide(15)"></span>
	<span class="dot" onclick="currentSlide(16)"></span>
	<span class="dot" onclick="currentSlide(17)"></span>
</div>
</div>
<script>
showSlides(1);
</script>
<?php $var = "Restaurante"; include "map_include.php"; ?>
</div>
<?php
	include("includes/footer.php");
?>