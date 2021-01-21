<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta  name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Notes Sharing</title>
	<link rel="icon" type="image/jpg" href="../images/favicon.jpg" >	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><!-- icons-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
	body{
		background-color:#cce5ff;		
		background-image: linear-gradient(#cce5ff,#80aaff);
		margin-bottom:355px;
	}
	</style>
</head>


<body>
 
<div class="container">
<div class="jumbotron"style="box-shadow:2px 2px 10px 1px grey">
<h1>Online Notes Sharing Platform</h1>
<p>Share notes easily</p>
<p>For teachers and students</p>
</div>
<hr>

<?php include "dashboard-navigation.php"?>


</div>
</body>
</html>