<?php
	$title = "GoTimișoara - Complexul Studențesc";
	include("includes/header.php");
?>	
	<div class="campus">
	<div class="slideshow">
<div class="slideshow-container">
	<div class="mySlides1">
<img src="images/palate\ancorei.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\apelor.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\banca_nationala.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\bruck.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\casa-emmer0001-1-848x566.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\dauerbach.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\dejan.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\dicastrial TiBi Nicolaevici.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\hilt.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\lloyd.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\loffler.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\mercur.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\mercy.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\neptun.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\neuhausz.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\palat-merbl-istorice-2.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\szechenyi.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/palate\weiss.jpg" style="width:100%">
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