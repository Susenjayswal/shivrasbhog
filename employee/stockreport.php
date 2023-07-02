<?php
require_once("../admin/connect.php");
session_start();
if($_SESSION["email"] == "")
{
    echo "<script>top.window.location.href='../index.php';</script>";
}
$stadate=$_REQUEST["stadate"];
$enddate=$_REQUEST["enddate"];

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../admin/css/font.css">
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
  <form action="../admin/actionemployee.php" method="post" class = "form-group">
  <div class="col-50" align="center">
          
          <button type="button" id="print" onclick="printDiv();">Print Report</button>  
          <button type="button" id="cancel" onclick="window.open('admin.php','_parent');">Done</button>
          
        </div>
        <table  border="1" cellspacing="0"  align="center" style="border-collapse:collapse; border-spacing:0px;">
          <tr>
            <td align="center" rowspan="2"><img src="../customer/assets/img/favicon.png"></td>
            <td colspan="4" rowspan="2"><div align="center" style="font-style:oblique;"><strong>RASBHOG</strong></br> A unit of Shiv Rasbhog LLP</br></div></td>
            <td colspan="2"><div><strong>Lic No. ABZ-4264</strong></div> 
          </tr>
          <tr>
            
            <td colspan="2" rowspan="1"><strong>Patna City, Patna,</br>Bihar 800009</strong></td>
          </tr>
          
          
               
          <tr align="center" style="background-color:lightblue;">
            <td><Strong>S. No.</strong></td>
            <td><strong>Date</strong></td>
            <td><strong>Invno</strong></td>
            <td><Strong>Name</strong></td>
            <td><Strong>Rate</strong></td>
            <td><Strong>Quantity</strong></td> 
            <td><Strong>Price</strong></td>
          </tr>
            <?php
               $sr=0;
               
              $rs=mysqli_query($con,"select *from stock where (date between '$stadate' and '$enddate')");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
              
            ?>
          <tr align="center">
            <td><?php echo $sr;?></td>
            <td><?php echo $d->date?></td>
            <td><?php echo $d->invono;?></td>
            <td><?php echo $d->name; ?></td>
            <td><?php echo $d->rate," ",$d->type; ?></td>
            <td><?php echo $d->quantity; ?></td>
            <td><?php echo $d->price; ?></td>
          </tr>
            <?php
              }
              
            ?>
          
        </table>
            </div>
        
    </form>
    <br><br>
  </body>
</html>
