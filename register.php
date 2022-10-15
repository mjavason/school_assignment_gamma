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
			<br>
			<!-- Registration Form -->
			<form id="demo-form" class="contact-form white-popup-block" action="https://www.okler.net/previews/porto/9.8.0/php/contact-form" method="POST">
				<div class="row mt-2">
					<div class="col-sm-12">
						<h2 class="font-weight-bold text-center text-7 mb-4">Register</h2>
					</div>
				</div>

				<div class="contact-form-success alert alert-success d-none mt-4">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div class="contact-form-error alert alert-danger d-none mt-4">
					<strong>Error!</strong> There was an error sending your message.
					<span class="mail-error-message text-1 d-block"></span>
				</div>

				<div class="custom-form-style-1 custom-form-style-1-rounded">
					<div class="row">
						<div class="form-group col mb-2">
							<input type="text" name="name" class="form-control" value="" placeholder="NAME*" data-msg-required="Please enter your name." required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col mb-2">
							<input type="email" name="Email" class="form-control" value="" placeholder="EMAIL*" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col mb-2">
							<input type="text" name="website" class="form-control" value="" placeholder="WEBSITE*" data-msg-required="Please enter your website address." required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col">
							<input type="text" name="company" class="form-control" value="" placeholder="COMPANY NAME*" data-msg-required="Please enter your company name." required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col mb-0">
							<input type="submit" class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-center text-4 btn-py-2 w-100 mb-3" value="Submit" data-loading-text="Loading...">
						</div>
					</div>
				</div>

			</form>

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