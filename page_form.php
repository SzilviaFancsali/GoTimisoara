
<?php require_once("includes/session.php") ?>
<?php confirm_logged_in();?>
<?php


				<p> Titlu:
					<input type="text" name="menu" value="<?php echo $table2['menu']; ?>" id="menu" />
				</p>
				<p>
				<input type="date" name="date" value="<?php echo $table2['date'];?>" />
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
					<?php
						echo $table2['content'];
					?>
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
					<input type="radio" name="visible" value="0"
					<?php
						if ($table2['visible']==0){
						echo "checked";} ?>
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
				
?>