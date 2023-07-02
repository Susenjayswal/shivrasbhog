<?php
session_start();
require_once('../admin/connect.php');
if ($_SESSION["email"] == "") {
	echo "<script>top.window.location.href='../index.php';</script>";
}
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
							<a href="admin.php" class="fxt-logo"><img src="../admin/img/logo.png" alt="Logo"></a>
							<h2>Rasbhog</h2>
							<h6><strong>Hi!
									<?php echo $_SESSION["name"]; ?>
								</strong></h6>
						</div>
						<div class="fxt-form">


							<h2 align="center">Expenses Report </h2>
							<form class="fxt-form" method="post" action="../admin/actionemployee.php">
								<div class="form-group">
									<label> Enter Start Date &nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input type="date" id="startdate" name="startdate" placeholder="Enter Start Date"
										class="form-control">
								</div>
								<div class="form-group">
									<label> Enter End Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input type="date" id="enddate" name="enddate" placeholder="Enter End Date"
										class="form-control">
								</div>
								<div class="form-group">
									<button type="button" name="btnsubmit5" id="btnsubmit5"
										class="fxt-btn-fill">Submit</button>
								</div>

						</div>

						<button type="submit" class="fxt-btn-fill"><a class="lgx-scroll"
								href="../admin/logout.php">Logout</a></button>
					</div>
					</form>
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
	<script>
		$("#btnsubmit5").on('click', function () {
			let startdate = $("#startdate").val();
			let enddate = $("#enddate").val();
			window.open('expensesreport.php?startdate=' + startdate + '&enddate=' + enddate, '_parent');

		});
	</script>
</body>

</html>