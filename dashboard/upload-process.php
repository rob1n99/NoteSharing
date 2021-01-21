<div class="container">
<?php include 'dashboard_index.php' ; 
	include 'db_connection.php'; 	?>	
<?php 
if(isset($_POST['upload']))
{       
 $file_size = $_FILES['file']['size'];
$uploadOK=1;
//Check file size        //change settings in php.ini configuration file to set upload settings and etc. upload_max_filesize sets the max file size that a user can upload while post_max_size sets the maximum amount of data that can be sent via a POST in a form.          
	if($file_size > 20000000)
	{
		?>
  <div class="alert alert-info">
  <strong>Upload size should be less than equal to 20MB </strong>
        </div>
		<?php
		$uploadOK=0;
	}


	 $file =$_FILES['file']['name'];

 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=mysqli_real_escape_string($conn,$new_file_name);
 $extension=strtolower(pathinfo($final_file,PATHINFO_EXTENSION));
	
 $file_type = mysqli_real_escape_string($conn,$_FILES['file']['type']);
 
 if($extension =="ppt" ||$extension =="pdf" ||$extension =="jpg" ||$extension =="png" ||$extension =="ppt" ||$extension =="doc" ||$extension =="odt" ||$extension =="docx" ||$extension =="txt" ||$extension =="pptx" ||$extension =="pps" ||$extension =="zip" )
	{
			echo "";
	}
	else{
		$uploadOK=0;
		?>
  <div class="alert alert-info">
  <strong>Only documents,pdf,zip,text files and images are allowed.  </strong>
        </div>
		<?php
		
	}
 $folder="upload/";
 $topic=mysqli_real_escape_string($conn,$_POST['topic']);
 $uploaded_by=mysqli_real_escape_string($conn,$_POST['uploaded_by']);
 $description=mysqli_real_escape_string($conn,$_POST['description']);

	
	//check if file already exists
	if(file_exists($final_file))
	{
		?>
  <div class="alert alert-info">
  <strong>File Already exists. </strong>
        </div>
		<?php
		$uploadOK=0;
	}
	
	
	
	 $file_loc = $_FILES['file']['tmp_name'];
	if($uploadOK==1)
		?>
	<div class="spinner-border"></div>
	<?php
	{
	 if(move_uploaded_file($file_loc,$folder.$final_file))
	 {
	  $sql="INSERT INTO files(name,type,topic,uploaded_by,description) VALUES('$final_file','$file_type','$topic','$uploaded_by','$description')";
	  mysqli_query($conn,$sql);
	  ?>
	 <div class="alert alert-success">
	  <strong>File sucessfully uploaded </strong>
			</div>
	  <?php
	 }
	 else
	 {
		?>
	  <div class="alert alert-danger">
	  <strong>Error,try again. </strong>
			</div>
			<?php
			}
	}
	else
	{
		?>
  <div class="alert alert-danger">
  <strong>Error,Try again.<strong>
        </div>
		<?php
	}
}
?>

</div>