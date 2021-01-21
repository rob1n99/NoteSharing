<?php include 'dashboard_index.php';?>

<div class="container " align="center">
	<form method="post" align="center" action="setting-process.php" style="margin-top:10px;padding:10px;box-shadow:2px 2px 10px 1px grey;background-color:#ccddff;width:50%">
	<h6>Username: </h6><?php echo $_SESSION["username"]?><br><hr>
	<h6>Email:   </h6><?php echo $_SESSION["email"]?><br><hr>
	<h6>Department:</h6><?php echo $_SESSION["department"]?><hr>
	<h5>Change password:</h5>
  <div class="form-group">
    <label for="new_password">New Password:</label>
    <input type="password" class="form-control" placeholder="Enter new password"  name="new_password">
  </div>
  <div class="form-group">
    <label for="old_password">Old Password:</label>
    <input type="password" class="form-control" placeholder="Enter old password"  name="old_password">
  </div>
  
  
  <button type="submit" name="changes" class="btn btn-primary">SAVE</button>
	</form>
	<hr>
	<br>
	<h1 align=center>Account Deletion</h1><hr>
	
	<form method="POST" align="center" action="delete-account.php" style="padding:10px;background-color:#ccddff;width:50%;box-shadow:4px 4px 2px 1px grey" >
	  <div class="form-group">
		<label for="password">Password:</label>
		<input type="password" class="form-control" placeholder="Enter password"  name="password" required="true">
	  </div>
	  <button type="button" class="btn btn-danger" name="delete" >Delete Account<i class="material-icons">delete</i></button>
	  <hr>
	</form>
	
	<hr>
</div>