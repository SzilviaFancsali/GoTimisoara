<?php
    require_once "includes/functions.php";
    require_once "includes/connect.php";
    ?>

    <?php
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
    $userData = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $isCorrect = password_verify($password, $userData['hashed_password']);

    if($isCorrect) 
    {   
        header('Location: edit_info.php?info=1');
    }else{
        header('Location: login.html');
    }
    ?>﻿

    <?php
    if(isset($connection)){
		$connection->close();
	}
    ?>