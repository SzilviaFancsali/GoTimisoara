<?php require_once "includes/functions.php"; ?>
<?php require_once "includes/connect.php"; ?>
<?php
$title = "Administrator dashboard";
include("includes/simple_header.php");
?>
<div id = "add_form">
	<h2>Add info</h2>
	<form action="create_info.php" method="post">
	<p>Titlu:
		<input type="text" name="adminForm" value="" id="adminForm" />
	</p>
	<p>
		<input type="date" name="date">
	</p>
	<p>Categorie:
		<select name ="category"> 
		<?php
			$result = get_info_from_table('categories');
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<option value=\"{$row['id']}\">{$row['menu']}</option>";
				}
		?>
		</select>
	</p>
	<p>Conținut:
	 	<textarea name="content" rows="10" cols="30">Adaugă conținut</textarea> 
	</p>
	<p>Vizibilitate:
		<input type="radio" name="visible" value="0"/>No &nbsp;
		<input type="radio" name="visible" value="1"/>Yes
	</p>
	<input type="submit" value="Add info"/>
	</form>
	<a href="index.php">Cancel</a>
 </div>
 <div>
 <?php
 $test = get_info_from_table('posts');
	while ($row = mysqli_fetch_assoc($test)) {
				echo $row['content'];
				echo "<br/>";
		}
 ?>
 </div>
 </body>
 </html>

<?php
 	// 5. close connection  
	require_once("includes/close_connection.php"); 
?>