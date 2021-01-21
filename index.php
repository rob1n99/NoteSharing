<?php include "include/header.php"?>

<body>
<?php include "include/navigation-bar.php"?>
<div class="container ">
	<div class="jumbotron " style="box-shadow:2px 2px 10px 1px grey">
		<h1>Online Notes Sharing Platform</h1>
			<h6>Share notes easily.</h6>
			<h6>For teachers and students.</h6>
	</div>

	<div id="demo" class="carousel slide" data-ride="carousel" style="box-shadow:2px 2px 10px 1px grey">

	  <ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	  </ul>

	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="images/slide1.jpg" class="rounded" >
		  <div class="carousel-caption rounded" style="color:white;background-color:grey;opacity: 0.7">
			<h5>Share notes easily</h5>
			<p>Simple and Elegant features</p>
		  </div>   
		</div>
		<div class="carousel-item">
		  <img src="images/slide2.jpg" class="rounded">
		  <div class="carousel-caption rounded" style="color:white;background-color:grey;opacity: 0.7">
			<h5>Easy management of notes</h5>
			<p>Upload and discuss about it</p>
		  </div>   
		</div>
		<div class="carousel-item">
		  <img src="images/slide3.jpg" class="rounded" >
		  <div class="carousel-caption rounded" style="color:white;background-color:grey;opacity: 0.7">	
			<h5>For teachers and students</h5>
			<p>Choose course/topic and get started.</p>
		  </div>   
		</div>
		
	  </div>
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	  </a>
	</div>
	
	<?php include 'footer.php';?>
		
</div>

</body>
</html>