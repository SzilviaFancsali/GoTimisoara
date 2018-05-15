<?php require_once("includes/functions.php"); ?>
<?php
	//creare conectiune
	require("constants.php");
	$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
	confirm_query($connection);
?>