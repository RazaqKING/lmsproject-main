<?php include("includes/header.php"); ?>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="#">Home</a>
				<span>Courses</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->




	<!-- course section -->
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
				<div class="col-lg-3 col-md-3">
				<a href="jquery.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/jquery.png"></div>
						<div class="ci-text">
							<h5>JQuery</h5>
							<p>A JS library for developing web pages</p>
							<!-- <span>55 Courses</span> -->
						</div></a>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-3 col-md-3">
				<a href="nodejs.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/nodejs.jpg"></div>
						<div class="ci-text">
							<h5>NodeJS</h5>
							<p>Javascript Backend Programming Language</p>
							<!-- <span>55 Courses</span> -->
						</div></a>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-3 col-md-3">
				<a href="python.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/python.jpg"></div>
						<div class="ci-text">
							<h5>Python</h5>
							<p>A popular programming language</p>
							<!-- <span>55 Courses</span> -->
						</div></a>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-3 col-md-3">
				<a href="java.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/java.png"></div>
						<div class="ci-text">
							<h5>Java</h5>
							<p>A popular programming language</p>
							<!-- <span>55 Courses</span> -->
						</div></a>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-3 col-md-3">
				<a href="react.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/react.png"></div>
						<div class="ci-text">
							<h5>React</h5>
							<p>A Javascript Framework Language</p>
							<!-- <span>55 Courses</span> -->
						</div></a>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-3 col-md-3">
				<a href="sql.php" target="_blank"><div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/courses/sql.png"></div>
						<div class="ci-text">
							<h5>SQL</h5>
							<p>Database Structured Query Language</p>
							<!-- <span>55 Courses</span> -->
						</div></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<?php } ?>
	<!-- banner section end -->


	<!-- footer section -->
	<?php include("includes/footer.php"); ?>