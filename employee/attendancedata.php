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
							<a href="index.php" class="fxt-logo"><img src="../admin/img/logo.png" alt="Logo"></a>
							<h2>Shiv Rasbhog</h2>
							<h6><strong>Hi!
									<?php echo $_SESSION["name"]; ?>
								</strong></h6>
						</div>
						<div class="fxt-form">
							<form method="POST"><!--action="../admin/action.php"-->

								<div class=attendance>
									<h2 align="center">Employee Attendance Report </h2>
									<form class="fxt-form" method="post">
										<div class="form-group">
											<label> Employee Name &nbsp;&nbsp;&nbsp;&nbsp;</label>
											<input type="name" id="ename" name="ename" placeholder="Enter Employee"
												class="form-control">
										</div>
										<div class="form-group">
											<label> Enter Start Date</label>
											<input type="date" id="stardate" name="stardate" min="2023-06-15"
												placeholder="Enter Start Date" class="form-control">
										</div>
										<div class="form-group">
											<label> Enter End Date</label>
											<input type="date" id="enddate1" name="enddate1" min="2023-06-15"
												placeholder="Enter End Date" class="form-control">
										</div>
										<div class="form-group">
											<input type="button" name="btnsubmit3" id="btnsubmit3" value="Submit"
												class="fxt-btn-fill">
										</div>
									</form>
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
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth() + 1; //January is 0!
	var yyyy = today.getFullYear();
	if (dd < 10) {
	dd = '0' + dd;
	}
	if (mm < 10) {
	mm = '0' + mm;
	} 
		
	today = yyyy + '-' + mm + '-' + dd;
	document.getElementById("enddate1").setAttribute("max", today);
</script>
<script>
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth() + 1; //January is 0!
	var yyyy = today.getFullYear();
	if (dd < 10) {
	dd = '0' + dd;
	}
	if (mm < 10) {
	mm = '0' + mm;
	} 
		
	today = yyyy + '-' + mm + '-' + dd;
	document.getElementById("stardate").setAttribute("max", today);
</script>
	<script>
		$("#btnsubmit3").on('click', function () {
			let stardate = $("#stardate").val();
			let enddate1 = $("#enddate1").val();
			let ename = $("#ename").val();
			window.open('attendance.php?ename=' + ename + '&stardate=' + stardate + '&enddate1=' + enddate1, '_parent');

		});
	</script>

</body>

</html>