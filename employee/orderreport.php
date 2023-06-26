<?php
require_once("../admin/connect.php");
session_start();
if($_SESSION["email"] == "")
{
    echo "<script>top.window.location.href='../index.php';</script>";
}
$sdate=$_REQUEST["sdate"];
$edate=$_REQUEST["edate"];

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Rasbhog</title>
    <link rel="shortcut icon" type="image/x-icon" href="../admin/img/favicon.png">
<script>
  function printDiv() {
     var printContents = document.getElementById("printbill").innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}
  </script>
  </head>
  <body style="background-color:#FFF8DC">
  <div id="printbill">  
  <form action="../admin/actionorder.php" method="post" class = "form-group">
        <table  border="1" cellspacing="0"  align="center" style="border-collapse:collapse; border-spacing:0px;">
          <tr>
            <td align="center" rowspan="2"><img src="../customer/assets/img/favicon.png"></td>
            <td colspan="2"><h1 align="center" style="font-style:oblique;">RASBHOG</h1></td>
            <td colspan="2"><h5><strong>Lic No. </strong></h5>  
          </tr>
          <tr>
            <td colspan="2"><h4 align="center">A unit of Shiv Rasbhog LLP</h4></td>
            <td colspan="2" rowspan="1"><strong>Patna City, Patna</br>Bihar</br>800009</strong></td>
          </tr>
          <tr align="center" style="background-color:lightblue;">
            <td><Strong>S. No.</strong></td>
            <td><Strong>Invocie No.</strong></td>
            <td><Strong>Name</strong></td> 
            <td><Strong>Quantity</strong></td>
            <td><Strong>Item Price</strong></td>
          </tr>
            <?php
              $sr=0;
              $rs=mysqli_query($con,"select *from cus_order where (date between '$sdate' and '$edate')");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
            ?>
          <tr align="center">
            <td><?php echo $sr;?></td>
            <td><?php echo $d->invno; ?></td>
            <td><?php echo $d->itname; ?></td>
            <td><?php echo $d->price; ?></td>
            <td><?php echo $d->quantity; ?></td>
            <td><?php echo ($d->quantity*$d->price);?></td>
          </tr>
            <?php
              }
            ?>
        </table>
            </div>
        <div class="col-50" align="center">
          <!--<input type="submit" name="btnn"  class="btn"  value="Submit" onclick="window.open('staff.php','_parent');">-->
          <button type="button" id="print" onclick="printDiv();">Print Bill</button>  
          <button type="button" id="cancel" onclick="window.open('staff.php','_parent');">Done</button>
        </div>
    </form>
  </body>
</html>
