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