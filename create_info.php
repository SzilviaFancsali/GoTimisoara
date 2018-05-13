<?php 

require 'includes/functions.php';
include "includes/connect.php";

?>

<?php
	$title = $_POST['adminForm']; 
	$category = trim($_POST['category']);
	//$categories_set = get_info_from_table('categories');
	
	/*while ($rows = mysqli_fetch_assoc($categories_set)){
		if(strcmp($category, $rows['menu']) == 0) {$category=$rows['id']; break;}
		else $category=rows['id'];
	}
	*/
	$date = $_POST['date'];
	$content = $_POST['content'];
	$visible = $_POST['visible'];

	$result = get_info_from_table('posts');
	$position = mysqli_num_rows($result) + 1; //to-add: derive position from date
?>


<?php

	$query = "INSERT INTO posts (
				id_categories, title, date, content, position, visible
				) VALUES (
				'{$category}', '{$title}', '{$date}', '{$content}', '{$position}', '{visible}'
				)";

	if(mysqli_query($conn, $query)) {
		header("location: admin_dashboard.php");
		exit;
	} else {
		echo "<p>Info create failed</p>";

	}

?>

<?php
	require_once "includes/close_connection.php"; 
?>
