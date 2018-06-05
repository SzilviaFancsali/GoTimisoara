<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php 
confirm_logged_in();
?>
<?php
	$title = "Dashboard";
	include("includes/header.php");
?>	
<?php require_once("includes/functions.php");?>
<div id="dashboard_content">
<h1>Welcome to the staff area, <em id="logged_user"><?php echo $_SESSION['username'];?></em></h1>
<table id="dashboard_table">
<tr>
&nbsp;
</tr>
<tr><td><a href="content.php">Manage Site</a></td></tr>
<?php if(is_admin()) echo '<tr><td><a href="new_user.php">Add new User</a></td></tr>';?>
<tr><td><a href="logout.php">Logout</a></td></tr>
</table>
</div>
<?php
	include("includes/footer.php");
?>
