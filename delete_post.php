<?php require_once("includes/connect.php") ?>
<?php require_once("includes/functions.php"); ?>

<?php include("includes/simple_header.php"); ?>	

			
			<?php
			
				if (intval($_GET['info']) ==0){
					header("location: index.php");
				}

				$id = mysql_prep($_GET['info']);
				if ($posts= get_posts_by_id($id)){
				$query="DELETE FROM posts WHERE id = {$id} LIMIT 1";
				$result = mysqli_query($connection, $query);
				if (mysqli_affected_rows($connection) == 1){
					header("Location: content.php");
				} else {
					echo "Information deletion failed!";
					echo mysqli_error($connection);
					echo "<a href = \"content.php\">Return to our Admin Dashboard</a>";
				}
				} else{
					header("Location: content.php");
				}
?>

<?php
     if(isset($connection)){
		$connection->close();
	
	}
?>