<?php
	$title = "GoTimișoara - Complexul Studențesc";
	include("includes/header.php");
?>	
	<div class="campus">
	<div class="slideshow">
	<div class="slideshow-container">
	
  <div class="mySlides1">
    <img src="images/complex/unde_mananc/3f.jpg" style="width:100%">
	<div class="text">3f</div>
  </div>

  <div class="mySlides1">
    <img src="images/complex/unde_mananc/Cantina-Studențească-Politehnica-Timișoara.jpg" style="width:100%">
    <div class="text">Cantina Studențească Politehnica Timișoara</div>
  </div>

  <div class="mySlides1">
    <img src="images/complex/unde_mananc/Casa-Moc.jpg" style="width:100%">
	<div class="text">Casa Moc</div>
  </div>

    <div class="mySlides1">
    <img src="images/complex/unde_mananc/Clătite-La-Pinochio.jpg" style="width:100%">
	<div class="text">Clătite La Pinochio</div>
  </div>
  
    <div class="mySlides1">
    <img src="images/complex/unde_mananc/Napoleon.jpg" style="width:100%">
	<div class="text">Napoleon</div>
  </div>
  
    <div class="mySlides1">
    <img src="images/complex/unde_mananc/oxford.jpg" style="width:100%">
	<div class="text">Oxford</div>
  </div>
  
      <div class="mySlides1">
    <img src="images/complex/unde_mananc/Paradisul-Piraților.jpg" style="width:100%">
	<div class="text">Paradisul Piraților</div>
  </div>
  
    <div class="mySlides1">
    <img src="images/complex/unde_mananc/Pret-A-Manger.jpg" style="width:100%">
	<div class="text">Pret-A-Manger</div>
  </div>
  
  <div class="mySlides1">
    <img src="images/complex/unde_mananc/Studentspub.jpg" style="width:100%">
	<div class="text">Student's Pub</div>
  </div>
  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
</div>

<div class="slideshow">
<div class="slideshow-container">
  <div class="mySlides2">
    <img src="images/complex/unde_relaxez/ATU-PUB.jpg" style="width:100%">
	<div class="text">ATU Pub</div>
  </div>

  <div class="mySlides2">
    <img src="images/complex/unde_relaxez/BiblioTech-Cafe.jpg" style="width:100%">
	<div class="text">Bibliotech Cafe</div>
  </div>

  <div class="mySlides2">
     <img src="images/complex/unde_relaxez/Caffe-Tabaco.jpg" style="width:100%">
	<div class="text">Caffe Tabaco</div>
  </div>
  
    <div class="mySlides2">
     <img src="images/complex/unde_relaxez/Wake-Up-Cafe.jpg" style="width:100%">
	<div class="text">WakeUp Cafe</div>
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>
</div>
<div class="slideshow">
<div class="slideshow-container">
  <div class="mySlides3">
    <img src="images/complex/unde_invat/uptbiblio.jpg" style="width:100%">
	<div class="text">Biblioteca Centrală a Universității Politehnica Timișoara</div>
  </div>

  <div class="mySlides3">
    <img src="images/complex/unde_invat/uvtbiblio.jpg" style="width:100%">
	<div class="text">Biblioteca Centrală Universitară "Eugen Todoran"</div>
  </div>

  <a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
</div>
</div>
</div>

<script>
var slideIndex = [1,1,1];
var slideId = ["mySlides1", "mySlides2", "mySlides3"]
showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);

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
<div id="footer">
	<img class="footer-icon" src="images/favicon.ico"><span class="footer-text">Copyright</span><span id="data" 
	class="footer-text"></span><span class="footer-text2">- HTTPS://CLS </span>
    <a class="footer-menu" href="despre.html"> Despre</a>
    <a class="footer-menu" href="istorie.html"> Istorie</a>
    <a class="footer-menu" href="atractii.html"> Atracții turistice</a>
    <a class="footer-menu" href="distractie.html">Distracție</a>
    <a class="footer-menu" href="campus.html">Campus</a>
    <span class="footer-text3">Copyright Pictures: KIoseph, Camelia Mirela, Delicia Varzaru, Siky Marco, Adrian Toth, Stan Leonte</span>
	</div>
</body>
</html>
