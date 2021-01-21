<?php include 'dashboard_index.php';
	include 'db_connection.php' ;
	
if(password_verify($_POST["old_password"],$_SESSION["password"])) 
{
	$new_password=password_hash($_POST["new_password"],PASSWORD_BCRYPT);
	if(mysqli_query($conn,"UPDATE users SET password ='$new_password' WHERE name='" . $_SESSION["username"] . "'") == TRUE)
	{
		?>
		<div class="container">
		 <div class="alert alert-success">
  <strong>Password changed<strong> 
        </div>
		</div>
		<?php
	}
	else
	{
		echo "Error ". mysqli_errno($conn);
	}
}	
else
{ ?>
	<div class="container">
		 <div class="alert alert-warning">
  <strong>Current password does not match with the entered password<strong> 
        </div>
		</div>

<?php
}
	mysqli_close($conn);
	
	?>
	