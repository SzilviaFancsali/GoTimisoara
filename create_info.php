<?php require_once("includes/connect.php") ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/simple_header.php"); ?>
<?php
	$errors=array();
	
	$required_fields=array('category','menu', 'position', 'visible', 'content');
	foreach($required_fields as $fieldname){
	if (!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
		$errors[]=$fieldname;
	}	
	}
	
	$fields_with_lengths = array('menu' =>200);
	foreach($fields_with_lengths as $fieldname => $maxlength){
		if(strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength){
		$errors[]= $fieldname;
		}
	}
	
	if (!empty($errors)){
		header("Location: new_info.php");
		exit;
	}
?>

<?php
	$menu = mysql_prep($_POST['menu']); 
	$result = get_info_from_table('posts');
	$position =	mysqli_num_rows($result) +1;
	$visible = mysql_prep($_POST['visible']);
	$category = mysql_prep(trim($_POST['category']));
	$date= $_POST['date'];
	$content= $_POST['content'];
?>

<?php

	$query="INSERT INTO posts(
	categories_id,menu, date, position, visible, content) VALUES (
	{$category},'{$menu}', {$date}, {$position}, {$visible}, '{$content}'
	)";
	
	if (mysqli_query($connection, $query)){
		header("location: content.php");
		exit;
	}else{
		echo "<p>FAIL, nu se poate crea postarea!</p>";
	}

?>

<?php	$connection->close(); ?>