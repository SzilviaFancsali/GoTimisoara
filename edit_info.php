<?php require_once("includes/connect.php") ?>
<?php require_once("includes/functions.php"); ?>

<?php 	find_selected_post();	?>

<?php include("includes/simple_header.php"); ?>	
<div id="content">
	<table id="table">
		<tr>
			<td id="nav">
			<dl class="info">
			<?php
			
				$query= "SELECT * FROM categories ORDER BY position ASC";
				$categories_set=$connection->query($query);
				confirm_query($categories_set);
				while ($categories=$categories_set->fetch_array()){
					echo "<dt";
					global $table1;
					if ($categories["id"] == $table1['id']){
					echo " class=\"selected\"";
					}
					echo "><a href=\"edit_info.php?info=" . urlencode($categories["id"]) . 
					"\">{$categories["menu"]}</a></dt>";
				$query="SELECT * FROM posts WHERE categories_id = {$categories["id"]} ORDER BY position ASC";
				$posts_set=$connection->query($query);
				confirm_query($posts_set);
				echo "<dl class=\"pages\">";
				while ($posts= $posts_set->fetch_array()){
					echo "<dt";
					if ($posts["id"]==$table2['id']){
						echo " class=\"selected\"";
					}
					echo"><a href=\"edit_page.php?page=" . urlencode($posts["id"]) .
					"\">{$posts["menu"]}</a></dt>";
				}
				echo "</dl>"; 
				}
			?>
			</dl>	
			<br><br>
			<div id="new">
			<a href="new_info.php">Adaugă postare</a>
			</div>
			</td>
			
			<?php
			
				if (intval($_GET['info']) ==0){
					redirect_to("content.php");
				}
				if (isset($_POST['submit'])){
					$errors=array();
				//validare form
					$required_fields=array('menu','position','visible');
					foreach($required_fields as $fieldname){
						if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]) && !is_numeric($_POST[$fieldname]))){
							$errors[]=$fieldname;
						}
					}						
				$fields_with_lengths = array('menu' => 200);
				foreach($fields_with_lengths as $fieldname => $maxlength){
							if(strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength){
				$errors[]= $fieldname;
					}
				}
				if (empty($errors)){
					$id = mysql_prep($_GET['info']);
					$menu = mysql_prep($_POST['menu']); 
					$position =	mysql_prep($_POST['position']);
					$visible = mysql_prep($_POST['visible']);
					
					$query="UPDATE categories SET
					menu='{$menu}',
					position = {$position},
					visible = {$visible} 
					WHERE id = {$id}";
					
					$result= mysqli_query($connection, $query);
					if (mysqli_affected_rows($connection)==1){
						$message="Editare .";
					}else{
						$message="FAIL!!!";
						$message.="<br/>" . mysqli_error();
					}	
						
					} else{
						$message= "Au fost" . count($errors) . " erori!";
					}
				}
			?>
			
			<td id="main"> 
				<h2> Editare <?php echo $sel_table1['menu']; ?></h2>
				
				<?php
				
					if (!empty($message)){
						echo "<p class=\"message\">" . $message . "</p>";				
					}
				
				?>
				
				<?php
				//fields with errors
				if (!empty($errors)){
					echo "<p class=\"errors\">";
					echo "PCorectează următoarele câmpuri:<br />";
					foreach($errors as $error){
						echo " * " . $error . "<br />";
					} echo "</p>";
				}
				?>
				
				<form action="edit_info.php?info=<?php echo urlencode($sel_table1['id']); ?>" method="post">
				<p> Titlu:
					<input type="text" name="menu" value="<?php echo $sel_table1['menu']; ?>" id="menu" />
				</p>
				<p> Poziție:
					<select name="position">
					
					<?php
					$categories_set=get_info_from_table('categories');
					$categories_count=mysqli_num_rows($categories_set);
					for($count=1; $count <=$categories_count+1; $count++){
						echo "	<option value=\"{$count}\"";
					if ($sel_table1['position'] ==$count){
						echo "selected";
					}
					echo ">{$count}</option>";
					}
					
					?>
					</select>
				</p>
				<p>Vizibil:
					<input type="radio" name="visible" value="0"
					
					<?php
						if ($sel_table1['visible']==0){
						echo "NU";} ?>
					/>No
					&nbsp;
					<input type="radio" name="visible" value="1" 
					<?php
						if ($sel_table1['visible']==1){
						echo "DA";}
					?>
					/>Yes
				</p>
				<input type="submit" name="submit" value="Editare categorie" />
				
				&nbsp;
				&nbsp;
	
				
				</form>
	
			</td>
		</tr>
	</table>
</div>
<?php
     if(isset($connection)){
		$connection->close();
	
	}
?>