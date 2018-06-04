<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/css_blog.css" />
	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title><?php echo $title?></title>
</head>
<body onload="onLoadHandler();" onscroll="butonUp()">
	<script src="script.js" type="text/javascript"></script>
	<div id="top"></div>
	<a id ="go-to-top" href="#top">Up&#8593;</a>
	<div class="header">
		<a href="index.php"><span class="logo"><img src="images/logo2.png"></span></a>

		<ul class="header-menu">	
			<li class="text-menu"><a href="despre.php">Despre</a></li>
			<li class="text-menu"><a href="istorie.php">Istorie</a></li>
			<li class="dropdown">
				<a href="atractii.php" class="text-menu">Atracții turistice</a>
				<div class="dropdown-content">
			        <a href="javascript:void(0)" class="empty"></a>
					<a href="cladiri.php">Clădiri istorice</a>
					<a href="monumente.php">Monumente și statui</a>
					<a href="muzee.php">Muzee și galerii de artă</a>
					<a href="palate.php">Palate și case memoriale</a>
					<a href="spatii.php">Spații verzi</a>
					<a href="piete.php">Piețe publice</a>
					<a href="lacasuri.php">Lăcașuri de cult</a>
					<a href="poduri.php">Poduri</a>
				</div>
			</li>
			<li class="dropdown"><a href="distractie.php" class="text-menu">Distracție</a>
				<div class="dropdown-content">
					<a href="javascript:void(0)" class="empty"></a>
					<a href="cafenele.php">Cafenele</a>
					<a href="restaurante.php">Restaurante</a>
					<a href="cluburi.php">Cluburi</a>
					<a href="diverse.php">Diverse</a>
				</div>
			</li>
			<li class="dropdown"><a  class="text-menu">Campus</a>
				<div class="dropdown-content">
					<a href="javascript:void(0)" class="empty"></a>
					<a href="universitati.php">Universități</a>
					<a href="complex.php">Complex</a>
				</div>
			</li>
			<li class="text-menu"><a href="blog.php">Blog</a></li>
			<li class="text-menu"><button id="myBtn">Video</button></li>
			<li class="text-menu"><a href="" onclick="document.getElementById('login').style.display='block'; return false;">Login</a></li>

		</ul>
		<!-- The Modal -->
	<div id="myModal" class="modal2">

	<!-- Modal content -->
	<div class="modal-content2">
		<span class="close2">&times;</span>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/zhW78s84xuI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	
	</div>

</div>
		<div id="login" class="modal">
			<form class="modal-content animate" action="login.php" method="post">
				<div class="login_container">
					<div id="closebtn_container">
						<span onclick="document.getElementById('login').style.display='none'" class="close" title="Close">&times;</span>
					</div>
					<label for="username"><b>Username</b></label>
					<input type="text" placeholder="Introdu username" name="username" id="username" required>

					<label for="password"><b>Password</b></label>
					<input type="password" placeholder="Introdu parola" name="password" id="password" required>

					<button type="submit" id="login_button">Login</button>
				</div>

				<div class="login_container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
				</div>
			</form>
		</div>
	</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>