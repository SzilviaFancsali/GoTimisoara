function butonUp() {
    if ((document.documentElement.scrollTop > 100) || (document.body.scrollTop > 100)) 
        document.getElementById("go-to-top").style.display = "block";
    else 
        document.getElementById("go-to-top").style.display = "none";
	if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) 
        document.getElementById("go-to-top").style.bottom = "85px";
    else
 		document.getElementById("go-to-top").style.bottom = "20px";
}
function getDate(){
	var dt = new Date();
	document.getElementById(data).innerHTML=dt.getYear();
}

function onLoadHandler(){

	var modal = document.getElementById('login');

	window.onclick = function(event) {
    	if (event.target == modal) {
        	modal.style.display = "none";
    	}
	}

}
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}



