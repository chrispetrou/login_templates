<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/favicon.ico">
<title>MyApp</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<!-- Photo by Phil Botha on Unsplash -->
<body background="images/wallpaper.jpg">
<div>
<!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
	<a class="navbar-brand" href="#">
    	<img src="images/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    	MyApp
  	</a>
  	<ul class="nav navbar-nav">
		<li><button class="btn btn-outline-danger navbar-btn navbar-right"><a href="logout.php"><font color="white">Sign out</font></a></button>
	</ul>
</nav>

<style>
	.navbar .logout-btn {
  	  	position: absolute;
  	  	top: 0px;
  	  	right: 15px;
	}
	@media (max-width: 767px) {
  	    .navbar .logout-btn {
    		right: 75px;
  		}
	}

	html, body{
		background-repeat:no-repeat;
		background-size:cover;
		background-attachment:fixed;
		width: 100%;  
		height: 100%;
		margin: 0;  
	}
	footer {
		background: #2E3338;
		bottom: 0;
		position:fixed;
		right:0;
		left:0;
	}
	footer .copyright-section {
		background: #2E3338;
		padding: 10px 1000; 
	}
	footer .copyright-section .copyright {
		margin-top: 5px; 
	}
	footer .copyright-section .copyright p {
		text-align: center;
		font-family: 'Comic Sans MS';
		color: #249D3D; 
	}
</style>

<!-- content here -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<footer>
<section class="copyright-section">
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="copyright">
				<p>Copyright &copy; 2017. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</div>
</section>
</footer>
</div>
</body>
</html>