<?php
	$title = "GoTimișoara - Poduri";
	include("includes/header.php");
?>	
	<div class="campus">
	<div class="slideshow">
	<div class="slideshow-container">
	<div class="mySlides1">
<img src="images/poduri\andrei saguna.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\decebal.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\michelangelo.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\mihai viteazul.JPG" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\pasarela gelu.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\pasarela uzina.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\Pasarela îndrăgostiților.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\pod metalic.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\podul de fier.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\Podul General Ioan Dragalina.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/poduri\podul iuliu maniu.jpg" style="width:100%">
</div>
	<a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
	<a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
	</div>
	</div>
	</div>
<script>
var slideIndex = [1];
var slideId = ["mySlides1"]
showSlides(1, 0);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
<?php
include("includes/footer.php");
?>