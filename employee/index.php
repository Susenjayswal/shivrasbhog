<?php
session_start();
$con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");
if ($_SESSION["email"] == "") {
	echo "<script>top.window.location.href='../admin/index.php';</script>";
	//$da=date('d-m-y');
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
<title>Shiv Rasbhog</title>
	<meta name="description" content="Shiv Rasbhog, A destination of sweets and snacks lover" />
	<meta name="shivrasbhog" content="Shiv Rasbhog is registered under Ministry of Corporate Affairs, Government of India" />
	<meta name="shivrasbhog" content="Shiv Rabhog is a Snacks and Sweets outlet" />
	<meta name="shivrasbhog" content="Shiv Rasbhog is started to expand the business" />
	<meta name="shivrasbhog" content="Shiv Rasbhog has started accepting applications for the franchise." />
	<meta name="shivrasbhog" content="Shiv Rasbhog is a pure vegeterian outlet" />
	<meta name="shivrasbhog" content="Shiv Rasbhog provides fresh and delicious items to their customers" />
	<meta name="shivrasbhog" content="Rasbhog is speciality of Shiv Rasbhog" />
	<meta name="shivrasbhog" content="Shiv Rasbhog provides many type of snacks like Dosa, Pav Bhaji, Chaat ......." />
	<meta name="author" content="Shiv Rasbhog" />

	<!--  FAVICON AND TOUCH ICONS -->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png" />
	<!-- this icon shows in browser toolbar -->
	<link rel="icon" type="image/x-icon" href="../assets/img/favicon.png" />
	<!-- this icon shows in browser toolbar -->
	<link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="../assets/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
	<link href="public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
	<link href="../../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" type="text/css"/>
	<link href="public/css/style.css" rel="stylesheet" type="text/css"/>
	
</head>

<body>

	<!--*******************
		Preloader start
	********************-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--*******************
		Preloader end
	********************-->

	<!--**********************************
		Main wrapper start
	***********************************-->
	<div id="main-wrapper">

		<!--**********************************
			Nav header start
		***********************************-->
		<div class="nav-header">
			<a href="index.php" class="brand-logo">
				<!--<img class="logo-abbr" src="../assets/img/logo.jpg" alt="">-->
				<img class="logo-compact" src="../assets/img/logo.jpg" alt="">
				<img class="brand-title" src="../assets/img/logo.jpg" alt="">
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
			Nav header end
		***********************************-->

		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:;" role="button" data-toggle="dropdown">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary">
										<?php
									 	$a=0;
										$da=date('y-m-d');
										$rs=mysqli_query($con,"select *from contact where cdate='$da' order by date");
									 	while($d=mysqli_fetch_object($rs)){
											$a++;
										?>
										<?php
										}
										echo $a;
										?>
										</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
										<ul class="timeline">
										<table border="0" width ="400" cellspacing="0" align="center" style="border-collapse:collapse; border-spacing:1px;">
											<captions><h3 align="center"><strong>Upcoming Meetings</strong><h3></captions>
										<thead >
                            <tr align="center">
                                <th><b>Sr. No.</th>
                                <th><b>Name</th>
                                <th><b>Mobile</th>
								<th><b>Date</th>
                                <th><b>Time</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
              $sr=0;
									$da=date('y-m-d');
              $rs=mysqli_query($con,"select *from contact where cdate='$da' order by date");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
              //$totalprice =($totalprice+($d->quantity*$d->price));
            ?>
          <tr align="center">
            <td><?php echo $sr;?></td>
            <td ><?php echo $d->name; ?></td>
            <td><?php echo $d->mobile; ?></td>
			<td><?php echo $d->date; ?></td>
            <td><?php echo ($d->time);?></td>
             
          </tr>
            <?php
              }
            ?>
                        </tbody></table>
										</ul>
									</div>
                                    
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:;"  role="button" data-toggle="dropdown">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.625 5.125H21.75V1.625C21.75 1.47262 21.7102 1.32289 21.6345 1.19062C21.5589 1.05835 21.45 0.948128 21.3186 0.870868C21.1873 0.793609 21.0381 0.751989 20.8857 0.750126C20.7333 0.748264 20.5831 0.786224 20.4499 0.86025L13 4.99909L5.55007 0.86025C5.41688 0.786224 5.26667 0.748264 5.11431 0.750126C4.96194 0.751989 4.8127 0.793609 4.68136 0.870868C4.55002 0.948128 4.44113 1.05835 4.36547 1.19062C4.28981 1.32289 4.25001 1.47262 4.25 1.625V5.125H3.375C2.67904 5.12576 2.01181 5.40257 1.51969 5.89469C1.02757 6.3868 0.750764 7.05404 0.75 7.75V10.375C0.750764 11.071 1.02757 11.7382 1.51969 12.2303C2.01181 12.7224 2.67904 12.9992 3.375 13H4.25V22.625C4.25076 23.321 4.52757 23.9882 5.01969 24.4803C5.51181 24.9724 6.17904 25.2492 6.875 25.25H19.125C19.821 25.2492 20.4882 24.9724 20.9803 24.4803C21.4724 23.9882 21.7492 23.321 21.75 22.625V13H22.625C23.321 12.9992 23.9882 12.7224 24.4803 12.2303C24.9724 11.7382 25.2492 11.071 25.25 10.375V7.75C25.2492 7.05404 24.9724 6.3868 24.4803 5.89469C23.9882 5.40257 23.321 5.12576 22.625 5.125ZM20 5.125H16.3769L20 3.1125V5.125ZM6 3.1125L9.62311 5.125H6V3.1125ZM6 22.625V13H12.125V23.5H6.875C6.64303 23.4997 6.42064 23.4074 6.25661 23.2434C6.09258 23.0793 6.0003 22.857 6 22.625ZM20 22.625C19.9997 22.857 19.9074 23.0793 19.7434 23.2434C19.5794 23.4074 19.357 23.4997 19.125 23.5H13.875V13H20V22.625ZM23.5 10.375C23.4997 10.607 23.4074 10.8294 23.2434 10.9934C23.0794 11.1574 22.857 11.2497 22.625 11.25H3.375C3.14303 11.2497 2.92064 11.1574 2.75661 10.9934C2.59258 10.8294 2.5003 10.607 2.5 10.375V7.75C2.5003 7.51803 2.59258 7.29564 2.75661 7.13161C2.92064 6.96758 3.14303 6.8753 3.375 6.875H22.625C22.857 6.8753 23.0794 6.96758 23.2434 7.13161C23.4074 7.29564 23.4997 7.51803 23.5 7.75V10.375Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-secondary">
									<?php
									 	$a=0;
										$da=date('y-m-d');
										$rs=mysqli_query($con,"select *from stock where cdate='$da' order by date");
									 	while($d=mysqli_fetch_object($rs)){
											$a++;
										?>
										<?php
										}
										echo $a;
										?>
									</span>
                                </a>
								<div class="dropdown-menu dropdown-menu-right p-3">
                                    <div id="DZ_W_Gifts" class="widget-timeline dz-scroll style-1">
										<ul class="timeline">
										<table border="0" width ="400" cellspacing="0" align="center" style="border-collapse:collapse; border-spacing:1px;">
											<captions><h3 align="center"><strong>Stock Entry</strong><h3></captions>
										<thead >
                            <tr align="center">
                                <th><b>Sr. No.</th>
                                <th><b>Invoice</th>
                                <th><b>Name</th>
								<th><b>Price</th>
                                <th><b>Date</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
              $sr=0;
									$da=date('y-m-d');
              $rs=mysqli_query($con,"select *from stock where cdate='$da' order by date");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
              //$totalprice =($totalprice+($d->quantity*$d->price));
            ?>
          <tr align="center">
            <td><?php echo $sr;?></td>
            <td ><?php echo $d->invono; ?></td>
            <td><?php echo $d->name; ?></td>
			<td><?php echo $d->price; ?></td>
            <td><?php echo $d->date;?></td>
             
          </tr>
            <?php
              }
            ?>
                        </tbody></table>
										</ul>
									</div>
                                </div>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
									<div class="header-info">
										<h5><b><?php date_default_timezone_set("Asia/Calcutta"); echo date('d-m-y');?> 
										<span id="time"><script type="text/javascript">function setInterval();</script></span></b>
										</h5>
										
										<span>Hi ! <?php echo $_SESSION["name"];?></span>
									</div>
                                   
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                    <a href="../admin/logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>		
		
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
			Sidebar start
		***********************************-->
		<div class="deznav">
			<div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="has-arrow ai-icon" href="employeedata.php" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Employee Data</span>
						</a>
						
					</li>
					<li><a class="has-arrow ai-icon" href="attendancedata.php" aria-expanded="false">
						<i class="flaticon-381-television"></i>
							<span class="nav-text">Attendance</span>
						</a>
						
					</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Order Report</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="adminorderdate.php">All Orders</a></li>
                            <li><a href="cancel.php">Cancel</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="https://linux911.hostguy.com:2096" aria-expanded="false">
							<i class="flaticon-381-internet"></i>
							<span class="nav-text">Mail Box</span>
						</a>
						
					</li>
					<li><a class="has-arrow ai-icon" href="feedback.php" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">Feedback Report</span>
						</a>
						
					</li>
					<li><a href="contactdata.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Meeting Report</span>
						</a>
					</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Expenditure</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="stockdate.php">Stocks</a></li>
							<li><a href="expensesdata.php">Expenses</a></li>
							
						</ul>
					</li>
					<li><a class="has-arrow ai-icon" href="adminpayment.php" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Payment</span>
						</a>
						<!--<ul aria-expanded="false">
							<li><a href="table-bootstrap-basic.html">Customer Payment</a></li>
							<li><a href="table-datatable-basic.html">Employee Salary</a></li>
						</ul>-->
					</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Pages</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="../admin/employee.php">Register</a></li>
							<li><a href="../admin/logout.php">Logout</a></li>
							
							
						</ul>
					</li>
				</ul>
			
				<div class="plus-box">
					<p class="fs-13 font-w300 mb-4">Organize your menus through button below</p>
					<a class="btn bg-white text-black btn-rounded d-block" href="../admin/uploadmenu.php">Upload Menu</a>
				</div>
				<div class="copyright">
					<p class="fs-14 font-w200"><strong class="font-w400">Shiv Rasbhog LLP</strong> © 2023 All Rights Reserved</p>
					<p>Made with <i class="fa fa-heart"></i> by<br><b> Susen Jayswal</p>
				</div>
			</div>
		</div>        <!--**********************************
			Sidebar end
		***********************************-->

		
		
		<!--**********************************
			Content body start
		***********************************-->
		<div class="content-body">
			<!-- row -->
						<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="card-header media border-0 pb-0">
								<div class="media-body">
									<h2 class="text-black">
									<?php
									$amount = 0;
									$a = 0;
									$b = 0;
									$da = date('y-m-d');
									$rs = mysqli_query($con, "select * from cus_order where date='$da'");
									while ($d = mysqli_fetch_object($rs)) {
										$a = $d->price;
										$b = $d->quantity;
										$amount = $amount + $a * $b;
										?>
												<?php
									}
									?>	
												<?php echo ($amount); ?>
												
									<span class="text-success fs-14"></span></h2>
									<p class="mb-0 text-black">Today's Ordered</p>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="card-header media border-0 pb-0">
								<div class="media-body">
									<h2 class="text-black">
									<?php
									$in = 0;
									//$a=0;
									$rs = 0;
									$da =date('y-m-d');
									$rs = mysqli_query($con, "select * from cancel where date='$da'");
									while ($d = mysqli_fetch_object($rs)) {
										//$a=$d->invno;
										//$b=$d->quantity;
										$in = $in + 1;
										?>
												<?php
									}
									?>	
												<?php echo ($in); ?>
									<span class="text-success fs-14"></span></h2>
									<p class="mb-0 text-black">Cancel Order</p>
								</div>
								<svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4 30.5H22.75C23.7442 30.4989 24.6974 30.1035 25.4004 29.4004C26.1035 28.6974 26.4989 27.7442 26.5 26.75V16.75C26.5 16.4185 26.3683 16.1005 26.1339 15.8661C25.8995 15.6317 25.5815 15.5 25.25 15.5C24.9185 15.5 24.6005 15.6317 24.3661 15.8661C24.1317 16.1005 24 16.4185 24 16.75V26.75C23.9997 27.0814 23.8679 27.3992 23.6336 27.6336C23.3992 27.8679 23.0814 27.9997 22.75 28H4C3.66857 27.9997 3.3508 27.8679 3.11645 27.6336C2.88209 27.3992 2.7503 27.0814 2.75 26.75V9.25C2.7503 8.91857 2.88209 8.6008 3.11645 8.36645C3.3508 8.13209 3.66857 8.0003 4 8H15.25C15.5815 8 15.8995 7.8683 16.1339 7.63388C16.3683 7.39946 16.5 7.08152 16.5 6.75C16.5 6.41848 16.3683 6.10054 16.1339 5.86612C15.8995 5.6317 15.5815 5.5 15.25 5.5H4C3.00577 5.50109 2.05258 5.89653 1.34956 6.59956C0.646531 7.30258 0.251092 8.25577 0.25 9.25V26.75C0.251092 27.7442 0.646531 28.6974 1.34956 29.4004C2.05258 30.1035 3.00577 30.4989 4 30.5Z" fill="#EA4989"/>
									<path d="M25.25 0.5C24.0138 0.5 22.8055 0.866556 21.7777 1.55331C20.7498 2.24007 19.9488 3.21619 19.4757 4.35823C19.0027 5.50027 18.8789 6.75693 19.1201 7.96931C19.3612 9.1817 19.9565 10.2953 20.8306 11.1694C21.7046 12.0435 22.8183 12.6388 24.0307 12.8799C25.243 13.1211 26.4997 12.9973 27.6417 12.5242C28.7838 12.0512 29.7599 11.2501 30.4466 10.2223C31.1334 9.19451 31.5 7.98613 31.5 6.75C31.498 5.093 30.8389 3.50442 29.6672 2.33274C28.4955 1.16106 26.907 0.501952 25.25 0.5ZM25.25 10.5C24.5083 10.5 23.7833 10.2801 23.1666 9.86801C22.5499 9.45596 22.0692 8.87029 21.7854 8.18506C21.5016 7.49984 21.4273 6.74584 21.572 6.01841C21.7167 5.29098 22.0739 4.6228 22.5983 4.09835C23.1228 3.5739 23.7909 3.21675 24.5184 3.07206C25.2458 2.92736 25.9998 3.00162 26.685 3.28545C27.3702 3.56928 27.9559 4.04993 28.368 4.66661C28.78 5.2833 29 6.00832 29 6.75C28.9989 7.74423 28.6034 8.69742 27.9004 9.40044C27.1974 10.1035 26.2442 10.4989 25.25 10.5Z" fill="#EA4989"/>
									<path d="M6.5 13H12.75C13.0815 13 13.3995 12.8683 13.6339 12.6339C13.8683 12.3995 14 12.0815 14 11.75C14 11.4185 13.8683 11.1005 13.6339 10.8661C13.3995 10.6317 13.0815 10.5 12.75 10.5H6.5C6.16848 10.5 5.85054 10.6317 5.61612 10.8661C5.3817 11.1005 5.25 11.4185 5.25 11.75C5.25 12.0815 5.3817 12.3995 5.61612 12.6339C5.85054 12.8683 6.16848 13 6.5 13Z" fill="#EA4989"/>
									<path d="M5.25 16.75C5.25 17.0815 5.3817 17.3995 5.61612 17.6339C5.85054 17.8683 6.16848 18 6.5 18H17.75C18.0815 18 18.3995 17.8683 18.6339 17.6339C18.8683 17.3995 19 17.0815 19 16.75C19 16.4185 18.8683 16.1005 18.6339 15.8661C18.3995 15.6317 18.0815 15.5 17.75 15.5H6.5C6.16848 15.5 5.85054 15.6317 5.61612 15.8661C5.3817 16.1005 5.25 16.4185 5.25 16.75Z" fill="#EA4989"/>
								</svg>
							</div>
							
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="card-header media border-0 pb-0">
								<div class="media-body">
									<h2 class="text-black">
									<?php
									$i = 0;
									$a = 0;
									$rs = 0;
									$da = date('y-m-d');
									$rs = mysqli_query($con, "select * from payment where saledate='$da'");
									while ($d = mysqli_fetch_object($rs)) {
										$a = $d->invno;
										//$b=$d->quantity;
										$i = $i + 1;
										?>
												<?php
									}
									?>	
												<?php echo ($i); ?>	
									<span class="text-danger fs-14"></span></h2>
									<p class="mb-0 text-black">Customers</p>
								</div>
								<svg width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.25 19.25C12.2389 19.25 13.2056 18.9568 14.0279 18.4074C14.8501 17.8579 15.491 17.0771 15.8694 16.1634C16.2478 15.2498 16.3469 14.2445 16.1539 13.2746C15.961 12.3046 15.4848 11.4137 14.7855 10.7145C14.0863 10.0152 13.1954 9.539 12.2255 9.34608C11.2555 9.15315 10.2502 9.25217 9.33658 9.6306C8.42295 10.009 7.64206 10.6499 7.09265 11.4722C6.54325 12.2944 6.25 13.2611 6.25 14.25C6.25129 15.5757 6.77849 16.8467 7.71589 17.7841C8.65329 18.7215 9.92431 19.2487 11.25 19.25ZM11.25 11.75C11.7445 11.75 12.2278 11.8966 12.6389 12.1713C13.05 12.446 13.3705 12.8365 13.5597 13.2933C13.7489 13.7501 13.7984 14.2528 13.702 14.7377C13.6055 15.2227 13.3674 15.6681 13.0178 16.0178C12.6681 16.3674 12.2227 16.6055 11.7377 16.702C11.2528 16.7984 10.7501 16.7489 10.2933 16.5597C9.83648 16.3705 9.44603 16.0501 9.17133 15.6389C8.89662 15.2278 8.75 14.7445 8.75 14.25C8.75089 13.5872 9.01457 12.9519 9.48322 12.4832C9.95187 12.0146 10.5872 11.7509 11.25 11.75Z" fill="#EA4989"/>
									<path d="M30.78 22.4625C31.1926 21.9098 31.4683 21.2672 31.5844 20.5873C31.7005 19.9074 31.6537 19.2097 31.4477 18.5514L30.6542 15.9696C30.2817 14.7451 29.5243 13.6733 28.4946 12.9132C27.4648 12.1531 26.2174 11.7452 24.9375 11.75H19.3286C18.9971 11.75 18.6792 11.8817 18.4447 12.1161C18.2103 12.3505 18.0786 12.6685 18.0786 13C18.0786 13.3315 18.2103 13.6495 18.4447 13.8839C18.6792 14.1183 18.9971 14.25 19.3286 14.25H24.9375C25.6823 14.2474 26.4081 14.485 27.0072 14.9274C27.6064 15.3698 28.0471 15.9935 28.2639 16.706L29.0574 19.2866C29.1449 19.5713 29.1645 19.8725 29.1145 20.1661C29.0645 20.4597 28.9463 20.7374 28.7694 20.977C28.5925 21.2166 28.3619 21.4114 28.096 21.5456C27.8302 21.6799 27.5366 21.7499 27.2387 21.75H15.7776C15.7422 21.75 15.7126 21.7671 15.6776 21.7701C15.5936 21.7669 15.5125 21.75 15.4272 21.75H7.58975C6.20068 21.7449 4.84702 22.1879 3.72969 23.0132C2.61236 23.8385 1.79094 25.0021 1.38737 26.3312L0.454122 29.3625C0.236133 30.0719 0.187609 30.8225 0.312449 31.554C0.437289 32.2856 0.732013 32.9776 1.17293 33.5746C1.61385 34.1715 2.18866 34.6567 2.85116 34.9911C3.51366 35.3255 4.24538 35.4998 4.9875 35.5H18.0286C18.7708 35.4999 19.5026 35.3256 20.1651 34.9912C20.8277 34.6569 21.4026 34.1717 21.8435 33.5748C22.2845 32.9778 22.5793 32.2857 22.7041 31.5542C22.829 30.8226 22.7805 30.0719 22.5625 29.3625L21.6299 26.3315C21.3936 25.5767 21.0217 24.8713 20.5322 24.25H27.2387C27.9283 24.2532 28.6088 24.0928 29.2243 23.7821C29.8399 23.4714 30.373 23.0192 30.78 22.4625ZM19.8327 32.089C19.6254 32.3726 19.3538 32.6031 19.0402 32.7614C18.7266 32.9198 18.3799 33.0015 18.0286 33H4.9875C4.63649 32.9999 4.2904 32.9175 3.97705 32.7594C3.6637 32.6012 3.39184 32.3717 3.18334 32.0894C2.97484 31.807 2.83552 31.4796 2.77658 31.1336C2.71764 30.7876 2.74073 30.4326 2.844 30.0971L3.77662 27.0661C4.02439 26.2489 4.52922 25.5335 5.21609 25.0261C5.90296 24.5188 6.7352 24.2466 7.58912 24.25H15.4266C16.2805 24.2466 17.1128 24.5188 17.7996 25.0261C18.4865 25.5335 18.9913 26.2489 19.2391 27.0661L20.1717 30.0971C20.2769 30.4323 20.301 30.7877 20.2421 31.134C20.1831 31.4804 20.0429 31.8078 19.8327 32.0894V32.089Z" fill="#EA4989"/>
									<path d="M21.875 9.24999C22.7403 9.24999 23.5861 8.9934 24.3056 8.51267C25.0251 8.03194 25.5858 7.34866 25.917 6.54923C26.2481 5.74981 26.3347 4.87014 26.1659 4.02148C25.9971 3.17281 25.5804 2.39326 24.9686 1.78141C24.3567 1.16955 23.5772 0.752876 22.7285 0.584066C21.8798 0.415256 21.0002 0.501896 20.2008 0.833029C19.4013 1.16416 18.7181 1.72492 18.2373 2.44438C17.7566 3.16384 17.5 4.0097 17.5 4.875C17.5014 6.03489 17.9628 7.14688 18.7829 7.96705C19.6031 8.78722 20.7151 9.2486 21.875 9.24999ZM21.875 3C22.2458 3 22.6083 3.10997 22.9167 3.31599C23.225 3.52202 23.4654 3.81485 23.6073 4.15747C23.7492 4.50008 23.7863 4.87708 23.714 5.24079C23.6416 5.6045 23.463 5.9386 23.2008 6.20082C22.9386 6.46304 22.6045 6.64162 22.2408 6.71397C21.8771 6.78631 21.5001 6.74918 21.1575 6.60727C20.8149 6.46535 20.522 6.22503 20.316 5.91669C20.11 5.60835 20 5.24584 20 4.875C20.0006 4.37789 20.1983 3.9013 20.5498 3.54979C20.9013 3.19829 21.3779 3.00056 21.875 3Z" fill="#EA4989"/>
								</svg>
							</div>
							
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="card-header media border-0 pb-0">
								<div class="media-body">
									<h2 class="text-black"><?php
									$tamount = 0;
									$a = 0;
									$rs = 0;
									$da =date('y-m-d');
									$rs = mysqli_query($con, "select * from payment where saledate='$da'");
									while ($d = mysqli_fetch_object($rs)) {
										$a = $d->netamt;
										//$b=$d->quantity;
										$tamount = $tamount + $a;
										?>
												<?php
									}
									?>	
												<?php echo ($tamount); ?> <span class="text-danger fs-14"></span></h2>
									<p class="mb-0 text-black">Income</p>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header pb-0 border-0">
								<div>
									<h4 class="card-title mb-2">Today's Meeting</h4>
									<p class="fs-13 mb-0"></p>
								</div>
								
							</div>
							<div class="card-body px-0 px-sm-3">
							<table border="0" width ="400" cellspacing="0" align="center" style="border-collapse:collapse; border-spacing:1px;">
                        <thead >
                            <tr align="center">
                                <th><b>Sr. No.</th>
                                <th><b>Name</th>
                                <th><b>Mobile</th>
                                <th><b>Time</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
              $sr=0;
									$da=date('y-m-d');
              $rs=mysqli_query($con,"select *from contact where date='$da' order by time");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
              //$totalprice =($totalprice+($d->quantity*$d->price));
            ?>
          <tr align="center">
            <td><b><?php echo $sr;?></td>
            <td ><b><?php echo $d->name; ?></td>
            <td><b><?php echo $d->mobile; ?></td>
            <td><b><?php echo ($d->time);?></td>
             
          </tr>
            <?php
              }
            ?>
                        </tbody></table>			
								</div>
							</div>
						</div>
					
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header border-0 d-sm-flex d-block">
								<div>
									<h4 class="card-title mb-2">Today's Sale Details</h4>
									<p class="fs-13 mb-0"></p>
								</div>
								
							</div>
							<div class="card-body p-3">
							<table border="0" width ="400" cellspacing="0" align="center" style="border-collapse:collapse; border-spacing:1px;">
                        <thead >
                            <tr align="center">
                                <th><b>Sr. No.</th>
                               
                                <th align="left"><b>Name</th>
								<th><b>Invoice No.</th>
                                <th><b>Amount</th>
			  					

                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
              $sr=0;
             $da=date('y-m-d');
              $rs=mysqli_query($con,"select *from payment where saledate='$da' order by invno");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
              //$totalprice =($totalprice+($d->quantity*$d->price));
            ?>
          <tr align="center">
            <td><b><?php echo $sr;?></td>
           
            <td align="left"><b><?php echo $d->name; ?></td>
			<td ><b><?php echo $d->invno; ?></td>
			<td align="right"><b><?php echo $d->netamt;?></td>
            
			
             
          </tr>
            <?php
              }
            ?>
                        </tbody></table>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-8 col-sm-12">
						<div class="card">
							<div class="card-header border-0">
								<div>
									<h4 class="card-title mb-2">Recent Order Request</h4>
									<p class="fs-13 mb-0"></p>
								</div>
								
							</div>
							<div class="card-body p-0">
								<div class="table-responsive ">
									<table class="table order-request">
										<tbody>
										<tr >
                    						<td style="width:100px;">
												
													<div  class="d-flex align-items-center justify-content-center">
														<b>S. No.
													</div>
												
											</td>
                    						<td style="width:100px;">
												
													<div  class="d-flex align-items-center justify-content-center">
													<b>Item
													</div>
												
											</td>
                    						<td style="width:100px;">
													<div  class="d-flex align-items-center justify-content-center">
													<b>Price
													</div>
												
											</td>
                    						<td style="width:100px;">
												
													<div  class="d-flex align-items-center justify-content-center">
													<b>Quantity
													</div>
												
											</td>
                    						<td style="width:100px;">
												
													<div  class="d-flex align-items-center justify-content-center">
													<b>Invoice
													</div>
												
											</td>
											<td style="width:100px;">
												
													<div  class="d-flex align-items-center justify-content-center">
													<b>Amount
													</div>
												
											</td>
                    						</tr>
										<tr>
										<?php
                							$sr = 0;
											$da=date('y-m-d');
                							$rs = mysqli_query($con, "select *from cus_order where date='$da' order by invno");
                							while ($d = mysqli_fetch_object($rs)) {
                  							  $sr++;
                    					?>
											<td style="width:100px;" >
												
													<div  class="d-flex align-items-center justify-content-center">
														<?php echo $sr;?>
													</div>
												
											</td>
											<td style="width:150px;align=left;">
												
													<b><?php echo $d->itname;?>
											
											</td>
											<td style="width:80px;">
												<div class="d-flex align-items-center justify-content-center">
													<?php echo $d->price;?>
												</div>
											</td>
											<td style="width:80px;">
												<div class="d-flex align-items-center justify-content-center">
												<b><?php echo $d->quantity;?>
												</div>
											</td>
											<td style="width:80px;">
												<div class="d-flex align-items-center justify-content-center">
													<?php echo $d->invno;?>
												</div>
											</td>
											<td style="width:100px;">
												<div class="d-flex align-items-center justify-content-center">
												<b><?php echo ($d->price*$d->quantity);?>
												</div>
											</td>
										</tr>
										<?php
                }
                ?>
																						
									</tbody></table>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-sm-12">
						<div class="card">
							<div class="card-header border-0">
								<div>
									<h4 class="card-title mb-2">Customer's Feedback</h4>
									<p class="mb-0 fs-14"></p>
								</div>
							</div>
							<div class="card-body px-0 pt-0 pb-2">
								<div class="widget-media trending-menus">
								<table class="table order-request">
										<tbody>
										<tr >
                    						
                    						<td style="width:150px;">
												
													<div  class="d-flex align-items-center justify-content-center">
													<b>Name
													</div>
												
											</td>
                    						<td style="width:100px;">
													<div  class="d-flex align-items-center justify-content-center">
													<b>Feedback
													</div>
												
											</td>
                    						
                    						</tr>
										<tr>
										<?php
                							//$sr = 0;
											$da=date('y-m-d');
                							$rs = mysqli_query($con, "select *from feedback where date='$da' order by name");
                							while ($d = mysqli_fetch_object($rs)) {
                  							  $sr++;
                    					?>
											
											<td style="width:150px;align=left;">
												
													<b><?php echo $d->name;?>
											
											</td>
											<td style="width:120px;">
												<div class="d-flex align-items-center justify-content-center">
													<?php echo $d->feedback;?>
												</div>
											</td>
										</tr>
										<?php
                }
                ?>
																						
									</tbody></table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!--**********************************
			Content body end
		***********************************-->


		<!--**********************************
			Footer start
		***********************************-->
		
		<div class="footer">
	<div class="copyright">
		<p>Copyright © Designed &amp; Developed by <a href="mailto:susenjayswal@gmail.com" target="_blank">Susen Jayswal</a> 2023</p>
	</div>
</div>		
		<!--**********************************
			Footer end
		***********************************-->

		<!--**********************************
		   Support ticket button start
		***********************************-->

		<!--**********************************
		   Support ticket button end
		***********************************-->


	</div>
	<!--**********************************
		Main wrapper end
	***********************************-->

	<!--**********************************
		Scripts
	***********************************-->
	<script src="public/vendor/global/global.min.js" type="text/javascript"></script>
					<script src="public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
				<script src="public/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
				<script src="public/vendor/apexchart/apexchart.js" type="text/javascript"></script>
				<script src="public/js/dashboard/dashboard-1.js" type="text/javascript"></script>
				<script src="public/js/custom.min.js" type="text/javascript"></script>
				<script src="public/js/deznav-init.js" type="text/javascript"></script>
		<script id="DZScript" src="../../../dzassets.s3.amazonaws.com/w3-global8bb6.js?btn_dir=right"></script>
		 <script>
        $(document).ready(function () {
            setInterval(function () {
                document.getElementById("time").innerHTML = GetTime();
                //do something else
            }, 1000)
        });
    </script>

</body>

</html>