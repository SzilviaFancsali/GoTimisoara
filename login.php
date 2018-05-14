

    <?php
    require_once "includes/functions.php";
    include "includes/connect.php";
    ?>

    <? 

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT hashed_password
            FROM users
            WHERE username = '$username';";
     
    $result = mysqli_query($conn, $query);
    confirm_query($result);
     
    if(mysqli_num_rows($result) == 0) 
    {
        header('Location: login.html');
    }
     
    $userData = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $isCorrect = password_verify($password, $userData['hashed_password']);
    
    if($isCorrect) 
    {   
        header('Location: admin_dashboard.php');
    }else{
        header('Location: login.html');
    }

    ?>﻿

    <?php
    include "includes/connect.php";
    ?>
