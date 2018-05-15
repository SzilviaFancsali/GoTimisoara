

<?php
	function mysql_prep($value){
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists("mysql_real_escape_string");
		if ($new_enough_php){
			if ($magic_quotes_active){
			$value=stripslashes($value);}
			$value = mysql_real_escape_string($value);
		} else {
			if (!$magic_quotes_active){
			$value=addslashes($value);}
		}
		return $value;
	}

	function confirm_query($result){
		if (!$result){
			die("Conectiune esuata");	
		}
	}
	function get_info_from_table($table){
		global $connection;
		$query = "SELECT *";
		$query .= " FROM {$table}";
		$query .=" ORDER BY position ASC";
		$result_set = mysqli_query($connection, $query);
		confirm_query($result_set);
		return $result_set;
	}
	
	function get_all_categories(){
		global $connection;
		$query="SELECT * FROM categories ORDER BY position ASC";
		$categories_set=mysqli_query($connection,$query);
		confirm_query($categories_set);
		return $categories_set;
	}
	
	
	function get_category_by_id($categories_id){
			global $connection;
			$query="SELECT * ";
			$query.="FROM categories ";
			$query.="WHERE id=" . $categories_id;
			$query.=" LIMIT 1";
			mysqli_select_db($connection,"categories");
			$result_set = mysqli_query($connection,$query);
			confirm_query($result_set);
			if ($info = mysqli_fetch_assoc($result_set)){
			return $info;
	} else {
		return NULL;
	}
	}
		function get_posts_by_id($posts_id){
			global $connection;
			$query="SELECT * ";
			$query.="FROM posts ";
			$query.="WHERE id=" . $posts_id;
			$query.=" LIMIT 1";
			mysqli_select_db($connection,"posts");
			$result_set = mysqli_query($connection,$query);
			confirm_query($result_set);
			if ($page = mysqli_fetch_assoc($result_set)){
			return $page;
	} else {
		return NULL;
	}
		}
		
	function find_selected_post(){
		
		global $sel_table1;
		global $table2;
		
		if(isset($_GET['info'])) {
		$sel_table1 = get_category_by_id($_GET['info']);
		$sel_t2=0;
		$table2=NULL;
	} elseif (isset($_GET['page'])) {
		$table2 = get_posts_by_id($_GET['page']);
		$table1=0;
		$sel_table1=NULL;
	} else {
		$table1 = 0;
		$sel_table1=NULL;
		$table2 = 0;
	}
}		

?>