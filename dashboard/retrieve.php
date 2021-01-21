<?php
include 'dashboard_index.php';
include 'db_connection.php'?>
<div class="container">
<hr>
 <table class="table table-dark table-hover" style="box-shadow:2px 2px 10px 1px grey">
    <thead>
	<tr>
    <th>File Name</th>
    <th>File Type</th>
	<th>Topic</th>
	<th>Description</th>
	<th>Uploaded By</th>
    <th>View</th>
	</tr>
	</thead>
    <?php
$result = mysqli_query($conn,"SELECT * FROM files");
  ?>
  <?php
while($row = mysqli_fetch_array($result)) 
{

?>
  
        <tr>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["type"]; ?></td>
        <td><?php echo $row["topic"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
		<td><?php echo $row["uploaded_by"]; ?></td>
        <td><a href="upload/<?php echo $row['name'] ?>" target="_blank">View file</a></td>
		<td>
		<?php 
		if($_SESSION["username"]=="admin")
		{
			?>
			<a href="delete-file-process.php?name=<?php echo $row["name"]; ?>">Delete</a>
			<?php
		}
		
		?>
		</td>
        </tr>
       <?php
}
?> 
    </table>
    
</div>
