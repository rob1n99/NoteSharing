<?php include 'dashboard_index.php';
include 'db_connection.php';  ?>

<hr>
<div class="container " align="center">

<form action="upload-process.php" method="post" align="center" style="padding:10px;box-shadow:2px 2px 10px 1px grey;background-color:#ccddff;width:80%" enctype="multipart/form-data">
<div class="form-group" >
    <input type="file" name="file" >
  </div>
  
    <div class="alert alert-info">
  <strong>File size limit is less than 20MB. <br>Only documets,ppt,pdf,zip and images are allowed.</strong>
        </div>
		
  <div class="form-group">
   <label for="topic">Topic:</label>
<input type="text" name="topic" placeholder="Enter topic name" >
</div>

<div class="form-group">
 <label for="description">Description:</label>
    <input type="text" name="description" placeholder="Enter File Description" >
  </div>
  
<input type="hidden" name="uploaded_by" value="<?php echo mysqli_real_escape_string($conn,$_SESSION["username"]); ?>" >
<hr>

<button type="submit" class="btn btn-primary" name="upload" >UPLOAD<i class="material-icons">upload</i></button>

</form>
</div>