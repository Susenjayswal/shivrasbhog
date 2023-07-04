<?php

require_once("function.php");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Rasbhog</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<?php include('include/css.php'); ?>
</head>

<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="preloader" class="preloader">
		<div class='inner'>
			<div class='line1'></div>
			<div class='line2'></div>
			<div class='line3'></div>
		</div>
	</div>
	<section class="fxt-template-animation fxt-template-layout21">
		<!-- Animation Start Here -->
		<div id="particles-js"></div>
		<!-- Animation End Here -->
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<a href="../index.php" class="fxt-logo"><img src="img/logo.png" alt="Logo"></a>
							<h2>
								<strong?>Enter Your Details</strong>
							</h2>
						</div>
						<div class="fxt-form">
							<form method="GET" action="guestorder.php">
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" id="name" class="form-control" name="name"
											placeholder="Name">
										<input type="hidden" id="action" name="action" value="cus_order">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="mobile" id="mobile" name="mobile" placeholder="Mobile Number"
											class="form-control lgx-input-form form-control" />
										<input type="hidden" name="invno" value="<?php echo newinvoiceno(); ?>">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="address" id="address" name="address" placeholder="Customer Address"
											class="form-control lgx-input-form form-control" />
									</div>
								</div>

								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1" align="center">
										<button type="submit" name="btnsubmit" class="fxt-btn-fill">Submit</button>
									</div>
								</div>

						</div>
						</form>
						<button type="submit" class="fxt-btn-fill"><a href="../customer/menu.php">Cancel</a></button>

					</div>
				</div>
			</div>
		</div>


	</section>
	<?php include('include/script.php'); ?>
</body>

</html>