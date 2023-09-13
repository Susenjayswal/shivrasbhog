<?php
$con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");
session_start();
if($_SESSION["email"] == "")
{
    echo "<script>top.window.location.href='index.php';</script>";
}
$cus_name=$_REQUEST["name"];
$cus_mobile=$_REQUEST["mobile"];
$invno=$_REQUEST["invno"];
$employee=$_SESSION["name"];
?>
<!doctype html><html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shiv Rasbhog</title>
    <meta name="keywords" content="Shiv Rasbhog">
    <meta name="robots" content="INDEX,FOLLOW">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="css/fontswap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css"><link rel="stylesheet" href="assets/css/style.css">
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
<body>
    

<form action="actionorder.php" method="post" class = "form-group">
            <input type="hidden" name="name" value="<?php echo $cus_name; ?>">
            <input type="hidden" name="mobile" value="<?php echo $cus_mobile; ?>">
            <input type="hidden" name="invno" value="<?php echo $invno; ?>">
            <input type="hidden" name="employee" value="<?php echo $employee; ?>">
            <input type="hidden" name="action" value="save_invoice">

            <div class="col-50" align="center">
          <input type="submit" name="btnn"  class="btn"  value="Submit">
          <button type="button" id="print" onclick="printDiv();">Print Bill</button>  
          <input type="hidden"  id="invnoc" value="<?php echo $invno; ?>">
          <button type="button" id="cancel" onclick="cancelorder();">Cancel</button>
          <input type="hidden" name="cuname" id="cuname" value="<?php echo $cus_name; ?>">
          <input type="hidden" name="cumobile" id="cumobile" value="<?php echo $cus_mobile; ?>">
          <button type="button" id="btn1111" onclick="addmore();">Add</button>
        </div>
        <div>
<b>Payment Type:</b><p class="mb-0"><select id="paytype" name="paytype" class="form-control" required='required' >
								<option value=""> --</option>
								<option value="cash"> Cash</option>
								<option value="online">Online</option>
								<option value="card"> Card</option>
							</select></p></div>
        <div id="printbill">
    <div class="invoice-container-wrap">
        <div class="invoice-container">
            <main>
                <div class="themeholy-invoice invoice_style11">
                    <div class="download-inner" id="download_section">
                        <header class="themeholy-header header-layout8">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    
                                        <a href="staff.php"><img src="../assets/img/logo.jpg" alt="Shiv Rasbhog"></a>
                                                                </div>
                                <div class="col-auto">
                                    <h1 class="big-title">Invoice</h1>
                                </div>
                            </div>
                            <div class="header-bottom">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto">
                                        <p class="invoice-number me-4"><b>Invoice No: </b><?php echo $invno;?></p>
                                        <div class="shape-left">
                                                        <p></p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="invoice-date"><b>Date: </b>
                                        <?php
                                            $t=time();
                                             echo(date("d-m-y",$t));
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="row justify-content-between my-4">
                            <div class="col-auto"><div class="invoice-left">
                                <b>Invoice To:</b><address><?php echo $cus_name; ?><br><?php echo $cus_mobile; ?></address>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="invoice-right"><b>Invoice From:<br>Shiv Rasbhog</b>
                                <address><!--Chowk Shikar Pur, Patna City,<br>--> Patna, Bihar 800009<br>+91 7979084161</address>
                            </div>
                        </div>
                    </div>
                    <table class="invoice-table table-stripe3">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
              $sr=0;
              $totalprice=0; 
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
                        </tbody>
                        <tfoot>
                            <tr height="5px">
                                <td colspan="4"><b>Total Amount:</b></td><td><?php echo $totalprice;?></td>
                            </tr>
                            <tr style="background-color:white;">
                                <td colspan="3"><b>CGST:</b></td><td><b>2.5%</b></td><td><?php echo round(($totalprice*2.5)/100,2);?></td>
                            </tr>
                            <tr>
                                <td colspan="3"><b>SGST:</b></td><td><b>2.5%</b></td><td><?php echo round(($totalprice*2.5)/100,2);?></td>
                            </tr>
                            <tr>
                                <td colspan="4"><b>Net Amount:</b></td><td><?php echo round($net);?></td>
                            </tr>
        
                        </tfoot>
                    </table>
                    <div class="row justify-content-between">
                        <div class="col-auto">
                           
                        </div>
                        <div class="col-auto">
                        <p class="invoice-number me-4"><b><br><br><br>Sign. and Stamp</b></p>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </main>
        </div>
    </div>
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
            echo "<a href='actionorder.php?name=".$cname."&id=".$d->id."&invno=".$invno."&mobile=".$mobile."&del="."DeleteOrder"."'>Delete</a>";
          ?>
        </td>
      </tr>
        <?php
          }
        ?>
    </table>
    <script>
	
  function cancelorder()
  {
    //alert("Hello");
  let invno=$("#invnoc").val();
  //alert(invno);
  let action="cancelorder";
    window.open('actionorder.php?invno='+invno+'&action='+action,'_parent');
  }
  function addmore()
  {
  //alert("Hello");
  let invno=$("#invnoc").val();
  let cname=$("#cuname").val();
  let mobile=$("#cumobile").val();
 
  window.open('order.php?invno='+invno+'&name='+cname+'&mobile='+mobile,'_parent');
  } 
</script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>