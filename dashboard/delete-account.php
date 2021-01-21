<?php include 'dashboard_index.php';
	include 'db_connection.php' ;
	?>

	<?php 
	if(isset($_POST["password"]))
	{
		$password=$_POST['password'];
		$sql="Select password from users where id='" .$_SESSION["id"] . "'";
		$res2=mysqli_query($conn,$sql);
		$da2=mysqli_fetch_assoc($res2);
		$hashed=$da2["password"];
		if(password_verify($password,$hashed))
		{
			mysqli_query($conn,"DELETE FROM users WHERE id='" . $_SESSION["id"] . "'");
			header("Location: ../index.php");
		}
		else
		{
			?>
			<div class="alert alert-info">
	  <strong>Wrong password<strong>
			</div>
			<?php
		}
	}
	?>
	