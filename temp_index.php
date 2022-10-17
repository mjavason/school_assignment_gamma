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
			</div>

			<!-- Login form -->
			<section class="section bg-secondary border-0 m-0" id="login_section">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3 ">
							<h2 class="font-weight-semibold line-height-3 text-6 text-lg-5 text-xl-6 mb-3 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">Input your details</h2>
						</div>
						<div class="col-lg-9">
							<form class="custom-form-style-1" method="post">
								<div class="row">
									<div class="form-group col-lg-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200">
										<input type="text" class="form-control" value="" placeholder="REG NUMBER*" required>
									</div>
									<div class="form-group col-lg-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400">
										<input type="email" class="form-control" value="" placeholder="PASSWORD*" required>
									</div>
									<div class="form-group col-lg-3 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600">
										<input type="submit" class="btn btn-primary btn-outline font-weight-bold text-3 h-100 rounded-0 btn-px-4" value="Login">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>


		</div>

		<!-- footer		 -->
		<?php require_once('includes/footer.php') ?>


	</div>


	<!-- Vendor -->
	<script src="vendor/plugins/js/plugins.min.js"></script>
	<script src="vendor/kute/kute.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="js/views/view.contact.js"></script>

	<!-- Demo -->
	<script src="js/demos/demo-seo.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

</body>

</html>