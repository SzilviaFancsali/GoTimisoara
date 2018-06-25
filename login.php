<?php require_once("includes/session.php");?>
<?php
    require_once ("includes/connect.php");
?>
<?php require_once("includes/functions.php");?>

<?php
	if (logged_in()){
		redirect_to("dashboard.php");
	}
	include_once("includes/form_functions.php");
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $query = "SELECT hashed_password
            FROM users
            WHERE username = '$username';";
     
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    if(mysqli_num_rows($result) == 0) 
    {
        header('Location: login.html');
    }
    $userData = mysqli_fetch_array($result);
    $isCorrect = password_verify($password, $userData['hashed_password']);
    if($isCorrect) 
    { 	$username=trim(mysql_prep($_POST['username']));
		$query2 = "SELECT id_user, username FROM users WHERE username='{$username}' LIMIT 1;";
		$result_set = mysqli_query($connection, $query2);
		confirm_query($result_set);
		$log_user=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
		$_SESSION['id_user'] = $log_user['id_user'];
		$_SESSION['username'] = $log_user['username']; 
        header('Location: dashboard.php');
    }else{
        header('Location: login.html');
    }
	
    ?>﻿

    <?php
    if(isset($connection)){
		$connection->close();
	}
    ?>