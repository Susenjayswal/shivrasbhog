<?php
session_start();
$con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");
if ($_SESSION["email"] == "") {
	echo "<script>top.window.location.href='../admin/index.php';</script>";
}
?>
<!doctype html>
<html class="no-js" lang="">



<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shiv Rasbhog</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../admin/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../admin/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../admin/css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="../admin/font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="../admin/css/fontswap.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="../admin/style.css">
</head>

<body>
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
							<a href="staff.php" class="fxt-logo"><img src="../admin/img/logo.png" alt="Logo"></a>
							<h2>Shiv Rasbhog</h2>
							<h6><strong>Hi!
									<?php echo $_SESSION["sname"]; ?>
								</strong></h6>
							<p><strong>Stock Entry</strong></p>
						</div>
						<div class="fxt-form">
							<form method="post" action="../admin/actionemployee.php" enctype="multipart/form-data">
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" id="invono" class="form-control" name="invono"
											placeholder="Invoice Number" required="required">
										<input type="hidden" id="action" name="action" value="fileupload">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" id="name" class="form-control" name="name" required="required" placeholder="Item Name">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="file" id="bill" class="form-control" name="pdf" required="required"
											placeholder="Upload Invoice" accept="application/pdf">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
										<button type="submit" class="fxt-btn-fill" name="btnsubmit">Submit</button>
									</div>
								</div>

						</div>
						</form>
						<div class="fxt-transformY-50 fxt-transition-delay-4">
										<button type="submit" class="fxt-btn-fill"
											onclick="window.open('staff.php','_parent');"
											class="fxt-btn-fill">Home</button>
									</div>
						<button type="submit" class="fxt-btn-fill"> <a href="../admin/logout.php">Logout</a></button>

					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="../admin/js/jquery-3.5.0.min.js"></script>
	<!-- Bootstrap js -->
	<script src="../admin/js/bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="../admin/js/imagesloaded.pkgd.min.js"></script>
	<!-- Particles js -->
	<script src="../admin/js/particles.min.js"></script>
	<script src="../admin/js/particles-1.js"></script>
	<!-- Validator js -->
	<script src="../admin/js/validator.min.js"></script>
	<!-- Custom Js -->
	<script src="../admin/js/main.js"></script>

</body>

</html>