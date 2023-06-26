<?php
require_once("connect.php");

$cus_name=$_REQUEST["name"];
$cus_mobile=$_REQUEST["mobile"];
$invno=$_REQUEST["invno"];

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Rasbhog</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
  <form action="actionorder.php" method="post" class = "form-group">
        <table  border="1" cellspacing="0"  align="center" style="border-collapse:collapse; border-spacing:0px;">
          <tr>
            <td align="center" rowspan="2"><img src="../customer/assets/img/favicon.png"></td>
            <td colspan="2" rowspan="2"><div align="center" style="font-style:oblique;"><strong>RASBHOG</strong></br>A unit of Shiv Rasbhog LLP</div></td>
            <td colspan="2"><div><strong>Lic No. </strong></div> 
            <input type="hidden" name="name" value="<?php echo $cus_name; ?>">
            <input type="hidden" name="mobile" value="<?php echo $cus_mobile; ?>">
            <input type="hidden" name="invno" value="<?php echo $invno; ?>">
           
            <input type="hidden" name="action" value="save_invoice"> 
          </tr>
          <tr>
            
            <td colspan="2" rowspan="1"><strong>Patna City, Patna</br>Bihar 800009</strong></td>
          </tr>
          <tr>
            <td ><strong> Name &nbsp;&nbsp;</strong></td>
            <td colspan = "4">&nbsp;&nbsp; <?php echo strtoupper($cus_name); ?></td>
          </tr>
          <tr> 
            <td > <strong>Mobile</strong></td>
            <td colspan="2">&nbsp;&nbsp; <?php echo $cus_mobile; ?></td>
            <td><strong> Payment Type </strong></td>                    
            <td>
              <select id="paytype" name="paytype" class="form-control" required='required' style="background-color:#FFF8DC">
								<option value=""> --</option>
								<option value="cash"> Cash</option>
								<option value="online">Online</option>
								<option value="card"> Card</option>
							</select>
            </td>
          </tr>
          <tr>
            <td><strong>Date</strong></td>
            <td colspan="2">&nbsp;&nbsp;
              <?php
                $t=time();
                echo(date("d-m-y",$t));
              ?>
            </td>
            <td ><label><strong>Invoice No.</strong></label></td>
            <td align="center"><?php echo $invno; ?></td>
          </tr> 
               
          <tr align="center" style="background-color:lightblue;">
            <td><Strong>S. No.</strong></td>
            <td><Strong>Name</strong></td>
            <td><Strong>Price</strong></td> 
            <td><Strong>Quantity</strong></td>
            <td><Strong>Item Price</strong></td>
          </tr>
            <?php
              $sr=0;
              $totalprice=0; 
              $h=1.00;
              $rs=mysqli_query($con,"select *from cus_order where invno='$invno'");
              while($d=mysqli_fetch_object($rs)){
              $sr++;
              $totalprice =($totalprice+($d->quantity*$d->price));
            ?>
          <tr align="center">
            <td><?php echo $sr;?></td>
            <td align="left">&nbsp;<strong><?php echo $d->itname; ?></strong>&nbsp;</td>
            <td align="left">&nbsp;<?php echo $d->price; ?>&nbsp;</td>
            <td><?php echo $d->quantity; ?></td>
            <td><?php echo ($d->quantity*$d->price);?></td>
              <?php
                $cname=$d->name;
                $mobile=$d->mobile;
                $invno=$d->invno;
              ?>
          </tr>
            <?php
              }
              $net=$totalprice+($totalprice*2.5)/100+($totalprice*2.5)/100;
            ?>
          <tr>
            <td colspan="2 "rowspan="4"></td>
            <td align="center" colspan="2" style="background-color:lightgrey;"><strong>Total Amount</strong></td>
            <td align="center"><?php echo $totalprice;?></td>
          </tr>
          <tr>
            <td><strong>CGST</strong></td>
            <td><strong>2.5%</strong></td>
            <td align="center"><?php echo round(($totalprice*2.5)/100,2);?></td>
          </tr>
          <tr>
            <td><strong>SGST</strong></td>
            <td><strong>2.5%</strong></td>
            <td align="center"><?php echo round(($totalprice*2.5)/100,2);?></td>
            </tr>
          <tr>
            <td align="center" colspan="2" style="background-color:lightgrey;"> <strong>Net Amount</strong></td>
            <td align="center" ><?php echo round($net);?></td>
          </tr>
            <tr>
            <td colspan="5" align="center" style="background-color:#FFFF99;"><h2 ><strong> &#128519; Thanks and Visit Again &#128519;</strong></h2></td>
          </tr>
        </table>
            </div>
        <div class="col-50" align="center">
          <input type="submit" name="btnn"  class="btn"  value="Submit">
          <button type="button" id="print" onclick="printDiv();">Print Bill</button>  
          <button type="button" id="cancel" onclick="window.open('../customer/menu.php','_parent');">Cancel</button>
          <input type="button" id="addmore" name="addmore" value="Add More">
        </div>
    </form>
    <br><br>
    <table border="1" cellspacing="0"  align="center" style="border-collapse:collapse; border-spacing:0px;">
      <?php
        $sr=0;
        $rs=mysqli_query($con,"select *from cus_order where invno='$invno'");
        while($d=mysqli_fetch_object($rs)){
          $sr++;
      ?>
      <tr align="center">
        <td><?php echo $sr;?></td>
        <td align="left">&nbsp;<strong><?php echo $d->itname; ?></strong>&nbsp;</td>
        <td><?php echo $d->quantity; ?></td>
        <td>
          <?php
            $cname=$d->name;
            $mobile=$d->mobile;
            $invno=$d->invno;
            echo "<a href='actionorder.php?name=".$cname."&id=".$d->id."&invno=".$invno."&mobile=".$mobile."&del="."Delete_Order"."'>Delete</a>";
          ?>
        </td>
      </tr>
        <?php
          }
        ?>
    </table>
    <script>
	$("#addmore").on('click',function(){
          <?php
            $cname=$d->name;
            $mobile=$d->mobile;
            $invno=$d->invno;
          ?>
			let cname=$("#cname").val();
			let mobile=$("#mobile").val();
			let invno=$("#invno").val();
      alert(cname);

			window.open('guestorder.php?cname='+cname+'&mobile='+mobile+'&invno='+invno,'_parent');
	});
</script>
  </body>
</html>
