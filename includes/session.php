<?php session_start();

	function logged_in(){
	return isset($_SESSION['id_user']);
	}

	function confirm_logged_in(){
	if (!logged_in()){
		redirect_to("index.php");
	}
	}

?>