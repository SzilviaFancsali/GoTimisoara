<?php
	$title = "GoTimișoara - Complexul Studențesc";
	include("includes/header.php");
?>	
	<div class="campus">
	<div class="slideshow">
	<div class="slideshow-container">
<div class="mySlides1">
<img src="images/monumente/libertatii\22552702_1480245402052055_2830548804586672033_n.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/monumente/libertatii\Adrian Doru Radu.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/monumente/libertatii\camelia.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/monumente/libertatii\camelia2.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/monumente/libertatii\Delicia Varzaru.jpg" style="width:100%">
</div>
	<a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
	<a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
</div>
<div class="slideshow">
<div class="slideshow-container">
<div class="mySlides2">
<img src="images/monumente/lupoaica\11695458_958025184257964_2438862127330232484_n.jpg" style="width:100%">
</div>
<div class="mySlides2">
<img src="images/monumente/lupoaica\d.s photography.jpg" style="width:100%">
</div>
<div class="mySlides2">
<img src="images/monumente/lupoaica\pamfil pirvulescu.jpg" style="width:100%">
</div>
	<a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>
</div>
<div class="slideshow">
<div class="slideshow-container">
<div class="mySlides3">
<img src="images/monumente/maria\1200px-Statuia_Sfânta_Maria_din_Piața_Maria.JPG" style="width:100%">
</div>
<div class="mySlides3">
<img src="images/monumente/maria\Dio - fotografiile mele.jpg" style="width:100%">
</div>
<div class="mySlides3">
<img src="images/monumente/maria\maria copy.jpg" style="width:100%">
</div>
	<a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
	<a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
</div>
</div>
<div class="slideshow">
<div class="slideshow-container">
<div class="mySlides4">
<img src="images/monumente/sf treime\18057071_1319048794838384_6634997418483822311_n.jpg" style="width:100%">
</div>
<div class="mySlides4">
<img src="images/monumente/sf treime\22555767_278104256033463_3626619373778515530_o.jpg" style="width:100%">
</div>
<div class="mySlides4">
<img src="images/monumente/sf treime\alexandru szasz.jpg" style="width:100%">
</div>
<div class="mySlides4">
<img src="images/monumente/sf treime\ani catalina.jpg" style="width:100%">
</div>
<div class="mySlides4">
<img src="images/monumente/sf treime\DanielStroe.jpg" style="width:100%">
</div>
	<a class="prev" onclick="plusSlides(-1, 3)">&#10094;</a>
	<a class="next" onclick="plusSlides(1, 3)">&#10095;</a>
</div>
</div>
</div>
<script>
var slideIndex = [1,1,1,1];
var slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4"]
showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);
showSlides(1, 3);
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