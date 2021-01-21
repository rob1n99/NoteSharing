<div class="container">

<?php include 'dashboard_index.php';
	 include 'db_connection.php';
/*
$result=$conn -> query("SELECT name,email,department FROM users");
OR same can be performed by 
*/
$result=mysqli_query($conn,"SELECT name,email,department FROM users");
?>
<hr>
<table class="table table-dark table-hover" style="box-shadow:2px 2px 10px 1px grey">
		<thead>
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Department</th>
		<?php
		if ($_SESSION["username"]=="admin")
		{
			?>
			
		<th>Delete</th>
		<?php
		}
		
		?>
		</tr>
		</thead>
<?php
if (mysqli_num_rows($result) > 0 ) 
{
		
            while ($row = mysqli_fetch_array($result)) 
			{
				?>
                <tr><td><?php echo $row['name']; ?></td>
				
                <td><?php echo $row['email']; ?></td>
				
                <td><?php echo $row['department']; ?></td>
				<td>
				<?php 	if($_SESSION["username"]=="admin")
						{
					?>
			<a href="delete-user-process.php?name=<?php echo $row["name"]; ?>">Delete user</a>
			<?php
						}
		
			?>
			</td></tr>
				<?php
			}
}
?>
</table>
</div>
