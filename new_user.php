<?php $title = "GoTimișoara - Create New User"; ?>
<?php require_once("includes/session.php") ?>
<?php
	$title = "Utilizator nou";
	include("includes/header.php");
?>	
<?php require_once("includes/connect.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in();?>
<?php confirm_admin();?>
<?php include_once("includes/form_functions.php");

	if (isset($_POST['submit'])){
		$errors=array();
		//validare form
		$required_fields=array('username','password');
		$errors= array_merge($errors, check_required_fields($required_fields, $_POST));			
				
		$fields_with_lengths = array('username' => 30, 'password' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
				
		$username = trim(mysql_prep($_POST['username']));
		$password = trim(mysql_prep($_POST['password']));		
		$hashed_password=password_hash($password, PASSWORD_BCRYPT);				
				
		if (empty($errors)){
		$query="INSERT INTO users (
		username, hashed_password ) VALUES
		( '{$username}', '{$hashed_password}'
		)";		
		$result= mysqli_query($connection, $query);
		if ($result){
			$message= "User creat cu succes.";
		}else {
			$message="User-ul nu a fost creat.";
			$message="Au fost" . count($errors). "erori.";
		}
		}else{
			if (count($errors)==1){
			$message="FAIL!!! Try again.";
			$message.="<br/>" . mysqli_error($connection);
		    }	
	        else{
			   $message= "Au fost" . count($errors) . " erori.";
		    }
		  }
	    }
		else {
			$username="";
			$password="";
		}


?>
<div id="content">
	<table id="table">
		<tr>
			<td id="nav">
			<a href="dashboard.php">Return to Menu</a>
			<br>
			
			</td>
			<td id="main"> 
			<h2>Create New User</h2>
			<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";}?>
			<?php if(!empty($errors)) {echo "<p>Errors</p>";}?>
			<form action="new_user.php" method="post">
			<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username);?>"/></td>
				</tr>
				<td>Password:</td>
				<td><input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password);?>"/></td>
				</tr>
				<tr>
				<td colspan="2"><input type="submit" name="submit" value="Create user"/></td>
				</tr>
				</table>
				</form>
			</td>
		</tr>
	</table>
</div>
	
	<?php
	include("includes/footer.php");
	?>
