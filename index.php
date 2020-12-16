<?php include('server.php');
if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
	if ($_SESSION["Usertype"]==1) {
		header("location: freelancerProfile.php");
	}
	else{
		header("location: employerProfile.php");
	}
}
else{
    $username="";
	//header("location: index.php");
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Projectworlds Freelance</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">

<style>
	body{padding-top: 3%;margin: 0;}
	.header1{background-color: #fff;padding-left: 1%;}
	.header2{padding:20px 40px 20px 40px;color:black;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background: #fff}
</style>

</head>
<body>

<!--Navbar menu-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
	<div class="container">
		<div class="navber-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">Job Searching Destination</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<a href="loginReg.php" class="btn btn-info navbar-btn navbar-right">Register</a>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
			
	
				<li><a href="loginReg.php">Login</a></li>
			</ul>
		</div>		
	</div>	
</nav>
<!--End Navbar menu-->



<!--Header and slider-->

<!--Header-->
<div class="row header1">
	<div class="col-lg-4">
		<div class="jumbotron">
			<div class="container text-center">
				<h1>Job web portal</h1>
				
				<p>Destination to seek and search jobs across the globe!</p>
				<p>Project by- Akshay M  and Arnav P</p>
			
				<p></p>
				<div class="btn-group">
	
			
					
				</div>
			</div>
		</div>	
	</div>
<!--End Header-->

<!--slider-->
	<div class="col-lg-8">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="image/coat.JPG" alt="Chania">
		      <div class="carousel-caption">
		        <h3>Work</h3>
		        <p>Work hard to be successful.</p>
		      </div>
		    </div>

		  

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<!--End slider-->
<!--End Header and slider-->


<!--Individual register tip-->
<div style="background:#cce5ff">
<div class="container text-center" style="padding:5%;">
	<div class="row">
		<div class="col-lg-6 card" style="padding:40px 80px 40px 80px;">
			<h1>Hire professionals</h1>
			
			<a href="loginReg.php" class="btn btn-success btn-lg">Get Started</a>
		</div>
		<div class="col-lg-6" style="padding:40px 80px 40px 80px;margin-top:15px;box-shadow: 4px 4px 2px 5px rgba(0, 0, 0, 0.2), 0 6px 0px 0 rgba(0, 0, 0, 0.19);background:#fff">
			<h1>Get Hired</h1>
			
			<a href="loginReg.php" class="btn btn-primary btn-lg">Get Started</a>
		</div>
	</div>
</div>
</div>
<!--End Individual register tip-->


<!--Popular Categories-->
<div class="container text-center" style="padding:4%;" id="category">
	<h1 class="card header2" style="background:#007BFF">Get the right type of job</h1>
	<div class="row">
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-credit-card"></span>
				<h3>Web Development</h3>
				<p>Please login and browse our web developers</p></a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-phone"></span>
				<h3>Mobile Development</h3>
				<p>Please login and Browse our Mobile Developer</p></a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-picture"></span>
				<h3>Graphics Designer</h3>
				<p>Please login and browse our Graphics Designer</p></a>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-pencil"></span>
				<h3>Content writer</h3>
				<p>Please login and browse our Creative writer</p></a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-signal"></span>
				<h3>Digital Marketer</h3>
				<p>Please login and browse our Marketing Expert</p></a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-headphones"></span>
				<h3>Virtual Assistant</h3>
				<p>Please login and browse our web Virtual Assistant</p></a>
			</div>
		</div>
	</div>
</div>
<!--End Popular Categories-->






<!--Footer-->
<div class="text-center" style="padding:4%;background:#222;color:#fff;margin-top:20px;">
	<div class="row">
			<div class="col-lg-3">
			<h3>Quick Links</h3>
			<p><a href="index.php">Home</a></p>
			
			<p><a href="loginReg.php">Login</a></p>
			<p><a href="loginReg.php">Register</a></p>
		</div>
		
	
	
	</div>
</div>
<!--End Footer-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>