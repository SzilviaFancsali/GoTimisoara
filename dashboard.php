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
<div id="content">
<table id="table">
<tr>
<td id="nav">
&nbsp;
</td>
<td id="main">
<p>Welcome to the staff area, <?php echo $_SESSION['username'];?>.</p>
<ul>
<li><a href="content.php">Manage Site</a></li>
<?php if(is_admin()) echo '<li><a href="new_user.php">Add new User</a></li>';?>
<li><a href="logout.php">Logout</a></li>
</ul>
</td>
</tr>
</table>
</div>
<?php
	include("includes/footer.php");
?>
