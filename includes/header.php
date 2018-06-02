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
					<a href="">Clădiri istorice</a>
					<a href="">Monumente și statui</a>
					<a href="">Muzee și galerii de artă</a>
					<a href="">Palate și case memoriale</a>
					<a href="">Spații verzi</a>
					<a href="">Piețe publice</a>
					<a href="">Lăcașuri de cult</a>
					<a href="">Poduri</a>
				</div>
			</li>
			<li class="dropdown"><a href="distractie.php" class="text-menu">Distracție</a>
				<div class="dropdown-content">
					<a href="javascript:void(0)" class="empty"></a>
					<a href="cafenele.php">Cafenele</a>
					<a href="restaurante.php">Restaurante</a>
					<a href="cluburi.php">Cluburi</a>
					<a href="cluburi.php">Diverse</a>
				</div>
			</li>
			<li class="text-menu"><a href="campus.php">Campus</a></li>
			<li class="text-menu"><a href="blog.php">Blog</a></li>
			<li class="text-menu"><a href="https://www.youtube.com/watch?v=zhW78s84xuI">Video</a></li>
			<li class="text-menu"><a href="" onclick="document.getElementById('login').style.display='block'; return false;">Login</a></li>

		</ul>

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
