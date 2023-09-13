<?php
session_start();
include ("function.php");
if ($_SESSION["email"] == "") {
	echo "<script>top.window.location.href='index.php';</script>";
}
?>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shiv Rasbhog</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<?php include('include/css.php'); ?>
</head>

</html>

<body>
	<section class="fxt-template-animation fxt-template-layout21">
		<!-- Animation Start Here -->
		<div id="particles-js"></div>
		<!-- Animation End Here -->
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<a href="../employee/staff.php" class="fxt-logo"><img src="img/logo.png" alt="Logo"></a>
							<h6><strong>Hi!
									<?php echo $_SESSION["sname"]; ?>
								</strong></h6>
							<h2>
								<strong?>Upload Menu</strong>
							</h2>
						</div>
						<div class="fxt-form">
							<form enctype='multipart/form-data' action='action.php' method='post'>

								<label>Upload Shiv Rasbhog's Menu</label>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type='file' name="file" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="hidden" id="action" name="action" value="upload">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type='submit' name='submit' value='Upload Products' class="fxt-btn-fill">
									</div>
								</div>
								<div class="form-group">
								    	<button type="submit" class="fxt-btn-fill" <a class="lgx-scroll"
							href="../admin/logout.php">Logout</a></button>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		</form>
	
	</section>
	<?php include('include/script.php'); ?>
</body>

</html>