<?php include("includes/header.php"); 
?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<h2>Learning Management System</h2>
				<p>Project Implementation</p>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
				<?php
					if(!(isset($_SESSION['username']))){
					
						?>
						
					<a href="portal/login" class="site-btn">Login</a>
					<a href="portal/register" class="site-btn">Sign Up</a>
					<?php
					
				} else {

				?>
				<a href="./admin/dashboard.php" class="site-btn">Dashboard</a>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- categories section -->
	<?php
		if(!(isset($_SESSION['username']))){
			echo "";
		} else {

	?>
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our Courses</h2>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p> -->
			</div>
			<div class="row">
				<!-- categorie -->
				<div class="col-lg-3 col-md-3">
				<a href="html.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/html.png"></div>
						<div class="ci-text">
							<h5>HTML</h5>
							<p>The language for building web pages</p>
							<!-- <span>120 Courses</span> -->
							</div>
					</a></div>
				</div>
				<!-- categorie -->
				<div class="col-lg-3 col-md-3">
				<a href="php.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/php.jpg"></div>
						<div class="ci-text">
							<h5>PHP</h5>
							<p>A web server programming language</p>
							<!-- <span>70 Courses</span> -->
						</div>
				</a></div>
				</div>
				<!-- categorie -->
				<div class="col-lg-3 col-md-3">
				<a href="css.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/css.jpg"></div>
						<div class="ci-text">
							<h5>CSS</h5>
							<p>The language for styling web pages</p>
							<!-- <span>55 Courses</span> -->
						</div></a>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-3 col-md-3">
				<a href="js.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/javascript.png"></div>
						<div class="ci-text">
							<h5>Javascript</h5>
							<p>The language for programming web pages</p>
							<!-- <span>40 Courses</span> -->
						</div></a>
					</div>
				</div>
				<!-- categorie -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 text-center">
							<a href="courses" class="site-btn">View All</a>
						</div>
					</div>
			</div>
		</div>
	</section>
	
	
	<?php } ?>



	<!-- footer section -->
<?php include("includes/footer.php"); ?>