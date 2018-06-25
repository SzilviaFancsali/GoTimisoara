<?php require_once("includes/session.php") ?>
<?php require_once("includes/connect.php") ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in();?>
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
			
				if (intval($_GET['page']) ==0){
					header("location: content.php");
				}
				include("includes/form_functions.php");
				if (isset($_POST['submit'])){
					$errors=array();
				//validare form
				$required_fields=array('category','menu', 'position', 'visible', 'content');
				$errors= array_merge($errors, check_required_fields($required_fields));			
				
				$fields_with_lengths = array('menu' => 200);
				$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths));
				
					$id = mysql_prep($_GET['page']);
					$menu = trim(mysql_prep($_POST['menu'])); 
					$position =	mysql_prep($_POST['position']);
					$visible = mysql_prep($_POST['visible']);
					$category = mysql_prep(trim($_POST['category']));
					$date= $_POST['date'];
					$content= $_POST['content'];
					
					
					if (empty($errors)){
					$query="UPDATE posts SET
					categories_id={$category},
					menu='{$menu}', 
					date='{$date}', 
					position={$position}, 
					visible={$visible}, 
					content='{$content}'
					WHERE id = {$id}";
					
					$result= mysqli_query($connection, $query);
					if (mysqli_affected_rows($connection)==1){
						$message="Postarea a fost editată cu succes.";
					}else{
						$message="FAIL!!! Try again.";
						$message.="<br/>" . mysqli_error($connection);
					}	
						
					} else{
						$message= "Au fost" . count($errors) . " erori.";
					}
				}
			?>
			
			<td id="main"> 
				<h2> Editare <?php echo $table2['menu']; ?></h2>
				
				<?php
				
					if (!empty($message)){
						echo "<p class=\"message\">" . $message . "</p>";				
					}
				
				?>
				
				<?php
					if (!empty($errors)){
						display_errors($errors);
					}	
				?>
				
				<form action="edit_page.php?page=<?php echo urlencode($table2['id']); ?>" method="post">
				<p> Titlu:
					<input type="text" name="menu" value="<?php echo $table2['menu']; ?>" id="menu" />
				</p>
				<p> Data:
				<input type="date" name="date" value="$table2['date']" />
				</p>
				<p> Categorie:
				<select name="category" value="$table2['category']">
				<?php
					$result=get_info_from_table('categories');
					while ($row = mysqli_fetch_assoc($result)){
						echo "<option value=\"{$row['id']}\">{$row['menu']}</option>";
					}
				?>
				</select>
				</p>
				<p> Conținut:
				<textarea name="content" rows="5" cols="30">
					<?php
						echo $table2['content'];
					?></textarea>
				</p>
				<p> Poziție:
					<select name="position" value="$table2['position']">
					
					<?php
					$posts_set=get_info_from_table('posts');
					$posts_count=mysqli_num_rows($posts_set);
					for($count=1; $count <=$posts_count+1; $count++){
						echo "	<option value=\"{$count}\">{$count}</option>";
					}
					
					?>
					</select>
				</p>
				<p>Vizibil:
					<input type="radio" name="visible" value="0"
					<?php
						if ($table2['visible']==0){
						 echo "checked";} 
					?>
						/>No
					&nbsp;
					<input type="radio" name="visible" value="1" 
										<input type="radio" name="visible" value="1" 
					<?php
						if ($table2['visible']==1){
						echo "checked";}
					?>
					/>Yes
				</p>
				
				<input type="submit" name="submit" value="Edit Post" />
				
				&nbsp;
				&nbsp;
				<a href="delete_post.php?info=<?php
				
				echo urlencode($table2['id']);
				
				?>"onClick="return confirm('Ești sigur că vrei să ștergi?');">
				 Ștergere postare</a>
				
				</form>
				<br>
				<a href="content.php?page=<?php echo $table2['id'];?>">Cancel</a>
			</td>
		</tr>
	</table>
</div>
<?php
     if(isset($connection)){
		$connection->close();
	
	}
?>