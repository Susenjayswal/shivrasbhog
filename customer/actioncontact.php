<?php
require_once("../admin/connect.php");
//Contact us
if ($_POST["action"] == "contact") {
    extract($_POST);
    mysqli_query($con, "insert into contact(name,email,mobile,address,reason,date,cdate) values('$name','$email','$mobile','$address','$reason','$date',curdate())");
    $msg = "Your Details Entered Succefully";
    echo "<script>top.window.location.href='contact.php?msg=$msg&name=$name&mobile=$mobile'</script>";
}
// Customer's Feedback

if ($_POST["action"] == "feedback") {
    extract($_POST);

    mysqli_query($con, "insert into feedback(name,email,feedback,date) values('$name','$email','$feedback',curdate())");
    $msg = "Your Feedback is successfully submitted";
    echo "<script>top.window.location.href='index.php?msg=$msg'</script>";
}
?>