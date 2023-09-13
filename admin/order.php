<?php
session_start();
if ($_SESSION["email"] == "") {
	echo "<script>top.window.location.href='index.php';</script>";
}
$con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");
$cname = $_REQUEST["name"];
$mobile = $_REQUEST["mobile"];
$invoiceno = $_REQUEST["invno"];
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
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<?php include('include/css.php'); ?>
	<script src="js/jquery-3-7-0.js"></script>
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
							<a href="../employee/staff.php" class="fxt-logo"><img src="img/logo.png" alt="Logo"></a>
							<h6><strong> Hi!
									<?php echo $_SESSION["sname"]; ?>
								</strong></h6>
							<h2>
								<strong?>Customer Order</strong>
							</h2>
						</div>
						<div class="fxt-form">
							<form method="post" action="actionorder.php">
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<label>Invoice No.</label> <input type="text" id="invoiceno" name="invoiceno"
											value="<?php echo $invoiceno; ?>" readonly placeholder="Item"
											class="form-control lgx-input-form form-control" required="required" />

									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" id="cname" name="cname" value="<?php echo $cname; ?>"
											readonly placeholder="Item" class="form-control lgx-input-form form-control"
											required="required" />
										<input type="hidden" name="action1" value="cus_order">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" id="mobile" name="mobile" readonly
											value="<?php echo $mobile; ?>" placeholder="Item"
											class="form-control lgx-input-form form-control" required="required" />
									</div>
								</div>

								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<label>Product Type</label>
										<select name="ptype" id="ptype" class="form-control">
											<option value="">--</value>
												<?php
												$rs = mysqli_query($con, "select distinct type from menu where available='AVAILABLE'");
												while ($d = mysqli_fetch_object($rs)) {
													?>
												<option value="<?php echo $d->type; ?>"><?php echo $d->type; ?></option>
												<?php
												}
												?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<label>Product Name</label>
										<select name="pname" id="pname" class="form-control">
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<label>Price</label>
										<input type="number" name="price" id="price" class="form-control" readonly>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<label>Quantity</label>
										<input type="decimal" id="quantity" name="quantity" min="0"
											placeholder="Item quantity"
											class="form-control lgx-input-form form-control" />
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="submit" name="btn" id='btn' class="fxt-btn-fill" value="Add">
										<input type="submit" name="btn1" id='btn1' class="fxt-btn-fill" value="Submit">

									</div>
								</div>
						</div>
						</form>
						<button type="submit" class="fxt-btn-fill"><a class="lgx-scroll" href="logout.php">Logout</a></button>


						<script>
							$(document).ready(function () {
								$("#ptype").on('change', function () {
									var ptype = $(this).val();
									var action = "chooseptype";
									//alert(ptype);
									$.ajax({
										type: 'POST',
										url: 'ajax.php',
										data: { ptype: ptype, action: action },
										success: function (data) {
											//alert(data);
											$('#pname').html(data);
											//console.log(htmlresponse);
										}
									});

								});
								$("#pname").on('change', function () {
									var pid = $(this).val();
									var action = "selectproduct";
									//alert(ptype+pname+action);
									$.ajax({
										type: 'POST',
										url: 'ajax.php',
										data: { pid: pid, action: action },
										success: function (data) {
											//alert(data);
											$('#price').val(data);
											//console.log(htmlresponse);
										}
									});

								});
							});		
						</script>
					</div>
				</div>
			</div>
		</div>
		</div>

	</section>
	<?php include('include/script.php'); ?>
</body>

</html>