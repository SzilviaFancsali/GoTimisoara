<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php 
confirm_logged_in();
?>
<?php
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
<li><a href="content.php">Manage Site</li>
<li><a href="new_user.php">Add new User</li>
<li><a href="logout.php">Logout</li>
</ul>
</td>
</tr>
</table>
</div>
<?php
	include("includes/footer.php");
?>