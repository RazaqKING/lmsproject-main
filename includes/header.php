<?php include("dbh.inc.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learning Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<!-- <img src="img/logo.png" alt=""> -->
						<h2 style="color: white; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><a style="color:white;" href="./">LMS</a></h2>
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<!-- <a href="" class="site-btn header-btn">Login</a> -->
					<nav class="main-menu">
						<ul>
							<!-- <li><a href="./">Home</a></li> -->
							<?php
								if(!(isset($_SESSION['username']))){
									echo "";
								} else {

								?> 
							<li><a href="courses">Courses</a></li>
							<li><a href="contact">Contact</a></li>
							<?php } ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->