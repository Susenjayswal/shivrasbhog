<?php
require_once("../admin/connect.php");
session_start();
if ($_SESSION["email"] == "") {
    echo "<script>top.window.location.href='../admin/index.php';</script>";
}
$stardate = $_REQUEST["stardate"];
$edate1 = $_REQUEST["edate1"];

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
        <form action="../customer/actioncontact.php" method="post" class="form-group">
            <div class="col-50" align="center">
                <button type="button" id="print" onclick="printDiv();">Print Bill</button>
                <button type="button" id="cancel" onclick="window.open('admin.php','_parent');">Done</button>
            </div>
            <table border="1" cellspacing="0" align="center" style="border-collapse:collapse; border-spacing:0px;">
                <tr>
                    <td align="center" rowspan="2"><img src="../assets/img/favicon.png"></td>
                    <td colspan="3" rowspan="2">
                        <div align="center" style="font-style:oblique;"><strong>RASBHOG</strong></br> A unit of Shiv
                            Rasbhog LLP</br></div>
                    </td>
                    <td colspan="2">
                        <div><strong>Lic No. ABZ-4264 </strong></div>
                </tr>
                <tr>

                    <td colspan="2" rowspan="1"><strong>Patna City, Patna,</br>Bihar 800009</strong></td>
                </tr>
                <tr align="center" style="background-color:lightblue;">
                    <td><Strong>S. No.</strong></td>
                    <td><Strong>Date</strong></td>
                    <td><Strong>Name</strong></td>
                    <td><Strong>Email</strong></td>
                    <td><Strong>Feedback</strong></td>
                </tr>
                <?php
                $sr = 0;
                $rs = mysqli_query($con, "select *from feedback where (date between '$stardate' and '$edate1')");
                while ($d = mysqli_fetch_object($rs)) {
                    $sr++;
                    ?>
                    <tr align="left">
                        <td align="center">
                            <?php echo $sr; ?>
                        </td>
                        <td>
                            <?php echo $d->date; ?>
                        </td>
                        
                        <td>
                            <?php echo $d->name; ?>
                        </td>
                        <td>
                            <?php echo $d->email; ?>
                        </td>
                        <td>
                            <?php echo $d->feedback; ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
    </div>

    </form>
</body>

</html>