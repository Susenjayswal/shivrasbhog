<?php
$con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");
session_start();
if ($_SESSION["email"] == "") {
  echo "<script>top.window.location.href='../admin/index.php';</script>";
}
$stardate = $_REQUEST["stardate"];
$enddate1 = $_REQUEST["enddate1"];
$ename = $_REQUEST["ename"];
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../admin/css/font.css">
  <title>Shiv Rasbhog</title>
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
    <form action="../admin/action.php" method="post" class="form-group">
      <div class="col-50" align="center">
        <button type="button" id="print" onclick="printDiv();">Print Report</button>
        <button type="button" id="cancel" onclick="window.open('index.php','_parent');">Done</button>
      </div>
      <table border="1" cellspacing="0" align="center" style="border-collapse:collapse; border-spacing:0px;">
        <tr>
          <td align="center" rowspan="2"><img src="../assets/img/favicon.png"></td>
          <td colspan="2" rowspan="2">
            <div align="center" style="font-style:oblique;"><strong>SHIV RASBHOG</strong></div>
          </td>
          <td colspan="2">
            <div><strong>Lic No. ABZ-4264 </strong></div>
        </tr>
        <tr>
          <td colspan="2" rowspan="1"><strong>Patna City, Patna,</br>Bihar 800009</strong></td>
        </tr>
        <tr align="center" style="background-color:lightblue;">
          <td><Strong>S. No.</strong></td>
          <td><strong>Date</strong></td>
          <td><strong>Id</strong></td>
          <td><Strong>Name</strong></td>

        </tr>
        <?php
        $sr = 0;
        $rs = mysqli_query($con, "select *from login where name='$ename' and (date between '$stardate' and '$enddate1')");
        while ($d = mysqli_fetch_object($rs)) {
          $sr++;
          ?>
          <tr align="center">
            <td>
              <?php echo $sr; ?>
            </td>
            <td>
              <?php echo $d->date ?>
            </td>
            <td>
              <?php echo $d->id; ?>
            </td>
            <td>
              <?php echo $d->name; ?>
            </td>
            <?php
            ?>
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