<?php include 'db_connection.php'; ?>

<?php 
if($_SESSION["username"]=="admin")
{
	$name=mysqli_real_escape_string($conn,$_GET["name"]);
	$sql="DELETE FROM users where name='$name' ";

	if(mysqli_query($conn,$sql))
	{
		header("Location: view-users.php");
	}
	else
	{
		echo "<h2>Error deleting:</h2> " . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>