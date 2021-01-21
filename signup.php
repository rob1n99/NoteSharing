
<?php include('db_connection.php');?>

<?php include "include/header.php"?>
<body>

<?php include "include/navigation-bar.php"?>

  <div class="container" align="center">
  
  <img src="images/signup.jpg" width=50% class="img-fluid rounded" style="opacity:0.8">
	<form method="post" align="center" autocomplete="on" style="margin-top:10px;padding:10px;background-color:#ccddff;width:50%;box-shadow:4px 4px 2px 1px grey">
		<div class="form-group"><br>
    <label for="name">Username:</label>
    <input type="text" class="form-control" placeholder="Enter username /minimum 5 characters" pattern=".{5,20}" name="name" required> <!--pattern specifies min and max length of input -->
  </div>
  <div class="form-group">
  <label for="email">Email:</label>
  <input type="email" class="form-control" placeholder="Enter email-address" name="email" required>
  </div>
  <div class="form-group">
  <label for="department">Choose Department:</label>
  <select class="form-control" id="department" name="department" required>
    <option>Computer Science</option>
    <option>Electrical</option>
    <option>Mechanical</option>
    <option>Chemical</option>
	<option>Civil</option>
	<option>Electronics</option>
	<option>Architecture</option>
	<option>Metallurgy</option>
  </select>
</div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password /minimum length is 8 characters"  pattern=".{8,30}" name="password" required>
  </div>
  <button type="submit" name="signup" class="btn btn-primary">SIGNUP</button><hr>
	</form>
	
	
	<?php

if(isset($_POST['signup']))
{	 
	 $username = mysqli_real_escape_string($conn,$_POST['name']);
	 $email    =mysqli_real_escape_string($conn,$_POST['email']);
	 $department=mysqli_real_escape_string($conn,$_POST['department']);
	 $password = mysqli_real_escape_string($conn,$_POST['password']);
	 //password hashing https://www.sitepoint.com/hashing-passwords-php-5-5-password-hashing-api/
	 $password_hash=password_hash($password,PASSWORD_BCRYPT)  ;      
	
	$query="SELECT name from users where name='$username' ";
	$result=mysqli_query($conn,$query);
	
	$query2="SELECT email from users where email='$email' ";
	$result2=mysqli_query($conn,$query2);
	if(mysqli_num_rows($result)>0)
	{
		 ?>
		 <div class="container">
			 <div class="alert alert-danger">
	  <strong>Username already exists <strong> 
			</div>
			</div>
		 <?php
	}	
	elseif(mysqli_num_rows($result2)>0)
	{
		 ?>
		 <div class="container">
			 <div class="alert alert-danger">
	  <strong>Email address already exists<strong> 
			</div>
			</div>
		 <?php
	}
	else
	{
			$sql = "INSERT INTO users (name,email,department,password)
			 VALUES ('$username','$email','$department','$password_hash')";
			 if($username!="admin")
			 {
			 if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Account created successfully.Now go to Login page')</script>";
			 } else {
				echo "Error: " . $sql . " " . mysqli_error($conn);
			 }
			 mysqli_close($conn);
			 }
			 else
			 { 
			 ?>
			 <div class="container">
				 <div class="alert alert-danger">
		  <strong>You can't choose admin. <strong> 
				</div>
				</div>
			 <?php
			 }
			 
	}
}

?>

 
	<?php include 'footer.php';?>
</div>
</body> 
