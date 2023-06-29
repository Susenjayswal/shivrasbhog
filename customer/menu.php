<?php
 require_once("../admin/connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>Shiv Rasbhog</title>
    <meta name="description" content="Responsive Rasbhog HTML5 Template"/>
    <meta name="keywords" content="Bootstrap3, restaurant, food, cafe, Template, bakery , Responsive, HTML5"/>
    <meta name="author" content="themearth.com"/>

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@yourtwitterusername"/>
    <meta name="twitter:creator" content="@yourtwitterusername"/>
    <meta name="twitter:url" content="http://yourdomain.com/"/>
    <meta name="twitter:title" content="Your home page title, max 140 char"/>
    <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char "/>
    <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/twittercardimg/twittercard-280-150.jpg"/>
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title"/>
    <meta property="og:url" content="http://your domain here.com"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Your site name here"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="assets/img/opengraph/fbphoto.jpg"/>
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <?php include ('include/css.php');?>
</head>
<body class="page page-template" style="background-image: linear-gradient(to bottom,peru,MediumTurquoise,LightSalmon,peru,MediumTurquoise,LightSalmon);">
<div class="lgx-container ">
<?php include ('include/header.php'); ?>
<main>
    <div class="lgx-page-wrapper" action="action.php" method="post">
        <div class="container">
            <div class="lgx-menu-card-area">
                 <!-- Snacks Item--> 
                    
                    <div class="lgx-menu-card-Items content">
                       
                        <table style="border-collapse:collapse;" width="1200px" >
                        <div class="theiaStickySidebar">
                         <caption><h2 align="center" style="font-style:oblique;"><strong>Snacks</strong></h2></caption>
                            <tr align="center">
                                <td><strong>Sr. No.</strong></td>
                                <td><strong>Type</strong></td>
                                <td><strong>Name</strong></td>
                                <td><strong>Price</strong></td>
                                <!--<td><strong>Availability</strong></td>-->
                                <td><strong>Order</strong></td>
                            </tr>
</div>
                            <?php
              $sr=0;
              //$totalprice=0; 
              $rs=mysqli_query($con,"select *from menu where type='SNACKS' and available='AVAILABLE'");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
            ?>
           <tr align="center">
            <td width="100px"><?php echo $sr;?></td>
            <td align="center" width="200px">&nbsp;<strong><?php echo $d->subtype; ?></strong>&nbsp;</td>
            <td align="left" style="font-style:oblique;" width="400px"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d->name; ?>&nbsp;</strong></td>
            <td width="150px"><strong><?php echo $d->price; ?>&nbsp;<?php echo ($d->ratetype);?></strong></td>
            <!--<td width="150px"><strong><?php //echo $d->available; ?></strong></td>-->
            <td width="150px"><a href="../admin/guestcustomer.php"><strong>Order Now</strong></a></td>
              
          </tr>
            <?php
              }
            ?>
          <tr>
                        </table>
            </div>
            <!-- Sweets Item-->    
                        <div class="lgx-menu-card-Items content">
                       
                        <table style="border-collapse:collapse;" width="1200px">
                        <caption><h2 align="center" style="font-style:oblique;"><strong>Sweets</strong></h2></caption>
                         <tr align="center">
                                <td><strong>Sr. No.</strong></td>
                                <td><strong>Type</strong></td>
                                <td><strong>Name</strong></td>
                                <td><strong>Price</strong></td>
                                <!--<td><strong>Availability</strong></td>-->
                                <td><strong>Order</strong></td>
                            </tr>
                            <?php
              $sr=0;
              //$totalprice=0; 
              $rs=mysqli_query($con,"select *from menu where type='SWEETS' and available='AVAILABLE'");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
            ?>
          <tr align="center">
            <td width="100px"><?php echo $sr;?></td>
            <td align="center" width="200px">&nbsp;<strong><?php echo $d->subtype; ?></strong>&nbsp;</td>
            <td align="left" style="font-style:oblique;" width="400px"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d->name; ?>&nbsp;</strong></td>
            <td width="150px"><strong><?php echo $d->price; ?>&nbsp;<?php echo ($d->ratetype);?></strong></td>
            <!--<td width="150px"><strong<?php //echo $d->available; ?></strong></td>-->
            <td width="150px"><a href="../admin/customer.php"><strong>Order Now</strong></a></td>
            </tr>
            <?php
              }
            ?>
            </table>
            </div>   
            <!-- Rasbhog's Special Item-->    
            <table style="border-collapse:collapse;" width="1200px">
                <caption><h2 align="center" style="font-style:oblique;"><strong>Rasbhog Special</strong></h2></caption>
                <tr align="center">
                    <td><strong>Sr. No.</strong></td>
                    <td><strong>Type</strong></td>
                    <td><strong>Name</strong></td>
                    <td><strong>Price</strong></td>
                    <!--<td><strong>Availability</strong></td>-->
                    <td><strong>Order</strong></td>
                </tr>
                <?php
                $sr=0;
               
              $rs=mysqli_query($con,"select *from menu where type='RASBHOG SPECIAL' and available='AVAILABLE'");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
            ?>
          <tr align="center">
            <td width="100px"><?php echo $sr;?></td>
            <td align="center" width="200px">&nbsp;<strong><?php echo $d->subtype; ?></strong>&nbsp;</td>
            <td align="left" style="font-style:oblique;" width="400px"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d->name; ?>&nbsp;</strong></td>
            <td width="150px"><strong><?php echo $d->price; ?>&nbsp;<?php echo ($d->ratetype);?></strong></td>
            <!--<td width="150px"><strong><?php //echo $d->available; ?></strong></td>-->
            <td width="150px"><a href="../admin/customer.php"><strong>Order Now</strong></a></td>
          </tr>
            <?php
              }
                ?>
          <tr>
                        </table>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include('include/footer.php'); ?>
</div>
<?php include('include/js.php'); ?>
</body>
</html>
