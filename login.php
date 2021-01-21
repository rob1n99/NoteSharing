<?php include('db_connection.php');?>
<?php include "include/header.php"?>

<body>

<?php include "include/navigation-bar.php"?>

	<div class="container" align="center" >
	<h1 align=center>Welcome</h1><hr>
	<img src="dashboard/avatar.png" class="rounded-circle" height="75"><br><br>
	<form method="POST" align="center" autocomplete="on" style="padding:10px;background-color:#ccddff;width:50%;box-shadow:4px 4px 2px 1px grey" >
	  <div class="form-group">
		<label for="name">Username:</label>
		<input type="text" class="form-control" placeholder="Enter username" name="name" required>
	  </div>
	  <div class="form-group">
		<label for="password">Password:</label>
		<input type="password" class="form-control" placeholder="Enter password"  name="password" required>
	  </div>
	  
	  <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
	  <hr>
	</form>

	
	<?php
	if(isset($_POST["login"])) 
	{
	$name=mysqli_real_escape_string($conn,$_POST["name"]);
	
	$sql="SELECT password from users WHERE name='$name' ";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
	$data=mysqli_fetch_assoc($result);
	$hash_password=$data["password"];
	if(password_verify($_POST["password"],$hash_password)) 
	{
			$result2=mysqli_query($conn,"SELECT * from users where name='$name'");
			while($data2=mysqli_fetch_assoc($result2))
			{
			$_SESSION["username"] = $data2["name"];
			$_SESSION["password"] = $hash_password;
			$_SESSION["department"] = $data2["department"];
			$_SESSION["email"] = $data2["email"];
			$_SESSION["id"]=$data2["id"];
			}
			mysqli_close($conn);
			header('Location: dashboard/dashboard_index.php');
		}
		else 
	{ ?>
	
 <div class="alert alert-danger">
  <strong>Invalid Credentials<strong>
        </div>

	<?php 
	}
	}
	else{
		?>
	
 <div class="alert alert-danger">
  <strong>Invalid Credentials<strong>
        </div>

	<?php 
	}
	}
	

	?>
	
	<br><br><br><br>
	
	<?php include 'footer.php';?>
</div>
</body>