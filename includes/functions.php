<?php

function confirm_query($result){
	if(!$result){
		die("Unable to connect");
	}
}

function get_info_from_table($table){
	global $conn;
	$query = "SELECT * ";
	$query .= "FROM {$table} ";
	$result_set = mysqli_query($conn, $query);
	confirm_query($result_set);
	return $result_set;
}

function get_info_by_id($information_id){
	global $conn;
	$query = "SELECT * ";
	$query .= "FROM information ";
	$query .= "WHERE id = " . $information_id;
	$query .= " LIMIT 1";
	$result_set = mysqli_query($conn, $query);
	confirm_query($result_set);
	if ($info = mysqli_fetch_assoc($result_set)){
		return $info;
	} else {
		return NULL;
	}
}


function get_pages_by_id($page_id){
	global $conn;
	$query = "SELECT * ";
	$query .= "FROM pages ";
	$query .= "WHERE id = " . $page_id;
	$query .= " LIMIT 1";
	$result_set = mysqli_query($conn, $query);
	confirm_query($result_set);
	if ($page = mysqli_fetch_assoc($result_set)){
		return $page;
	} else {
		return NULL;
	}
}

function find_selected_page(){
	global $sel_table1;
	global $sel_table2;
	global $table1;
	global $table2;
	
	if (isset($_GET['info'])){
		$table1 = $_GET['info'];
		$sel_table1 = get_info_by_id($_GET['info']);
		$sel_table2 = NULL;
		$table2 = 0;
	}elseif(isset($_GET['page'])){
		$table1 = 0;
		$table2 = $_GET['page'];
		$sel_table1 = NULL;
		$sel_table2 = get_pages_by_id($table2);
		//$sel_table2 = get_info_by_id($_GET['page']);
}else{
		$table1 = 0;
		$sel_table1 = NULL;
		$table2 = 0;
	
}
}
?>
