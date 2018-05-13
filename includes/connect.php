<?php
 
 // 1 and 2. create connection to go_timi_test data base (CREATE CONNECTION AND SELECT DB)

require 'constants.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if(!$conn){
	die("Unable to connect to DB");
}
?>
