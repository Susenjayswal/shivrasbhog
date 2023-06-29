<?php
require_once("../admin/connect.php");
session_start();
if($_SESSION["email"] == "")
{
    echo "<script>top.window.location.href='../index.php';</script>";
}
$name=$_REQUEST['empname'];



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
  <form action="../admin/action.php" method="post" class = "form-group">
  <div class="col-50" align="center">
          <button type="button" id="print" onclick="printDiv();">Print Report</button>  
          <button type="button" id="cancel" onclick="window.open('admin.php','_parent');">Done</button>
        </div>
        <table  border="1" cellspacing="0"  align="center" style="border-collapse:collapse; border-spacing:0px;">
          <tr>
            <td align="center" rowspan="2"><img src="../customer/assets/img/favicon.png"></td>
            <td colspan="2" rowspan="2"><div align="center" style="font-style:oblique;"><strong>RASBHOG</strong></br> A unit of Shiv Rasbhog LLP</br></div></td>
            <td colspan="2"><div><strong>Lic No. </strong></div> 
          </tr>
          <tr>
            
            <td colspan="2" rowspan="1"><strong>Patna City, Patna,</br>Bihar 800009</strong></td>
          </tr>
          
          
               
          <tr align="center" style="background-color:lightblue;">
            <td><Strong>S. No.</strong></td>
            <td><strong>Id</strong></td>
            <td><strong>Name</strong></td>
            <td><Strong>Father's Name</strong></td>
            <td><Strong>Mobile</strong></td>
            <td><strong>Address</strong></td>
            <td><Strong>Id proof Number</strong></td>
            <td><Strong>Designation</strong></td>
             
          </tr>
            <?php
               $sr=0;
               $rs=mysqli_query($con,"select *from employee where name='$name'");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
            ?>
          <tr align="center">
            <td><?php echo $sr;?></td>
            <td><?php echo $d->id;?></td>
            <td><?php echo $d->name;?></td>
            <td><?php echo $d->fname; ?></td>
            <td><?php echo $d->mobile; ?></td>
            <td><?php echo $d->address; ?></td>
            <td><?php echo $d->idnum; ?></td>
            <td><?php echo $d->designation; ?></td>
              <?php
              ?>
          </tr>
            <?php
              }
              
            ?>
         
        </table>
            </div>
    </form>
  </body>
</html>
