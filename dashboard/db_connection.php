 <?php
 $dbhost = "localhost";       //database host
 $dbuser = "root";			 //database user
 $dbpass = "";               //database password
 $db = "notes-sharing";          //database name
 
 $conn =mysqli_connect($dbhost, $dbuser, $dbpass,$db); //connecting to database
 if(!$conn)
 {
	 die('Could not Connect My Sql:' .mysql_error());
 }
 ?>