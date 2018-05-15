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
			</td>
			<td id="main"> 
				<h2> Adaugă Postare</h2>
				<form action="create_info.php" method="post">
				<p> Titlu:
					<input type="text" name="menu" value="" id="menu" />
				</p>
				<p>
				<input type="date" name="date">
				</p>
				<p> Categorie:
				<select name="category">
				<?php
					$result=get_info_from_table('categories');
					while ($row = mysqli_fetch_assoc($result)){
						echo "<option value=\"{$row['id']}\">{$row['menu']}</option>";
					}
				?>
				</select>
				</p>
				<p> Conținut:
				<textarea name="content" rows="10" cols="30">Adaugă conținut</textarea>
				</p>
				<p> Poziție:
					<select name="position">
					
					<?php
					$posts_set=get_info_from_table('posts');
					$posts_count=mysqli_num_rows($posts_set);
					for($count=1; $count <=$posts_count+1; $count++){
						echo "	<option value=\"{$count}\">{$count}</option>";
					}
					
					?>
					</select>
				</p>
				<p>Vizibilitate:
					<input type="radio" name="visible" value="0"/>Nu
					&nbsp;
					<input type="radio" name="visible" value="1" />Da
				</p>
				<input type="submit" value="Adăugare" />
				</form>
				<br>
				<a href="content.php">Cancel</a>
			</td>
		</tr>
	</table>
	
	<?php 
	/* $test = get_info_from_table('posts');
	while ($row = mysqli_fetch_assoc($test)){
		echo $row['content'];
		echo "<br/>";
	} */
	?> 
</div>
<?php	$connection->close(); ?>