<?php
	$title = "GoTimișoara - Lăcașuri de cult";
	include("includes/header.php");
?>	
	<div class="campus">
	<div class="slideshow">
	<div class="slideshow-container">
	<div class="mySlides1">
<img src="images/lacasuri\Biserica călugărilor mizericordieni.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/lacasuri\Biserica Nașterea Maicii Domnului.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/lacasuri\Biserica Piariștilor.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/lacasuri\biserica Preasfântă Inimă a lui Isus.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/lacasuri\catedrala.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/lacasuri\domul.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/lacasuri\millennium.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/lacasuri\notre dame.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/lacasuri\ortodoxa sarbeasca din fabric.jpg" style="width:100%">
</div>
<div class="mySlides1">
<img src="images/lacasuri\Sinagoga Cetate.jpg" style="width:100%">
</div>
	<a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
	<a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
	</div>
	</div>
	</div>
<script>
var slideIndex = [1];
var slideId = ["mySlides1" ]
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