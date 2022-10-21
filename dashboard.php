<?php
require_once('config/connect.php');
require_once('functions/functions.php');

if (!isset($_SESSION['log'])) {
	gotoPage("sign-in.php");
}
?>
<!DOCTYPE html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ESUT Result Repo</title>

	<meta name="keywords" content="ESUT result school students courses upload" />
	<meta name="description" content="View course results online">
	<meta name="author" content="gamma group">

	<?php require_once('includes/head.php') ?>
</head>

<body data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">

	<div class="body">

		<!-- header -->
		<?php require_once('includes/header.php') ?>

		<div role="main" class="main">

			<div class="container position-relative py-5" style="min-height: 643px;" id="home">
				<?php require_once('includes/svg_animation.php') ?>
				<div class="row align-items-center py-5 p-relative z-index-1">
					<h1 class="card-title mb-1 font-weight-bold transition-2ms">Years</h1>


					<div class="col-md-6 p-1 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
						<div class="card bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
							<div class="card-body">
								<h4 class="card-title mb-1 text-4 font-weight-bold transition-2ms">Year 1</h4>
								<!-- <p class="card-text transition-2ms">Lorem ipsum dolor sit amet, consectetur adipiscing
									elit. Curabitur rhoncus nulla dui, in dapi.</p> -->
									
							</div>
						</div>
					</div>

					<div class="col-md-6 p-1 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
						<div class="card bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
							<div class="card-body">
								<h4 class="card-title mb-1 text-4 font-weight-bold transition-2ms">Year 2</h4>
								<!-- <p class="card-text transition-2ms">Lorem ipsum dolor sit amet, consectetur adipiscing
									elit. Curabitur rhoncus nulla dui, in dapi.</p> -->
							</div>
						</div>
					</div>

					<div class="col-md-6 p-1 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
						<div class="card bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
							<div class="card-body">
								<h4 class="card-title mb-1 text-4 font-weight-bold transition-2ms">Year 3</h4>
								<!-- <p class="card-text transition-2ms">Lorem ipsum dolor sit amet, consectetur adipiscing
									elit. Curabitur rhoncus nulla dui, in dapi.</p> -->
							</div>
						</div>
					</div>

					<div class="col-md-6 p-1 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
						<div class="card bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
							<div class="card-body">
								<h4 class="card-title mb-1 text-4 font-weight-bold transition-2ms">Year 4</h4>
								<!-- <p class="card-text transition-2ms">Lorem ipsum dolor sit amet, consectetur adipiscing
									elit. Curabitur rhoncus nulla dui, in dapi.</p> -->
							</div>
						</div>
					</div>

					<div class="col-md-6 p-1 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
						<div class="card bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
							<div class="card-body">
								<h4 class="card-title mb-1 text-4 font-weight-bold transition-2ms">Year 5</h4>
								<!-- <p class="card-text transition-2ms">Lorem ipsum dolor sit amet, consectetur adipiscing
									elit. Curabitur rhoncus nulla dui, in dapi.</p> -->
							</div>
						</div>
					</div>
				</div>
			</div>




		</div>

		<!-- footer		 -->
		<?php require_once('includes/footer.php') ?>


	</div>

	<?php require_once('includes/js_imports.php') ?>


</body>

</html>