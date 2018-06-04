<?php session_start();

	function logged_in(){
	return isset($_SESSION['id_user']);
	}

	function confirm_logged_in(){
	if (!logged_in()){
		redirect_to("index.php");
	}
	}

	function is_admin(){
		if ($_SESSION['username'] == 'admin')
			return True;
		else
			return False;
	}

	function confirm_admin(){
		if (!is_admin()) 
			redirect_to("dashboard.php");
	}

?>
