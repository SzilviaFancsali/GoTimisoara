<?php require_once("includes/session.php") ?>
<?php require_once("includes/connect.php") ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in();?>
<?php find_selected_post(); ?>

<?php include("includes/simple_header.php"); ?>	
<div id="content">
	<table id="table">
		<tr>
			<td id="nav">
			<dl class="info">
			<?php
			
				$categories_set=get_info_from_table('categories');
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
			<a href="new_info.php">Adăugare postare</a>
			</div>
			
			
			</td>
			<td id="main"> 
				<?php if(!is_null($sel_table1)){ ?>
				<h2><?php echo $sel_table1['menu']; ?> </h2>
				<?php } elseif (!is_null($table2)) { ?>
				<h2><?php echo $table2['menu']; ?> </h2>
				<div class="page-content">
				
				<?php
					echo $table2['content'];
				?>
				
				</div>
				<?php } else { ?>
				<h2>Selectează din meniu o categorie sau o postare</h2>
				<?php } ?>
				
			</td>
		</tr>
	</table>
</div>

<?php	$connection->close(); ?>
