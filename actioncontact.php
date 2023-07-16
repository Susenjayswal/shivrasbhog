<?php
include("admin/connect.php");
//include();
//Contact us
if ($_POST["action"] == "contact") {
    extract($_POST);
    mysqli_query($con, "insert into contact(name,email,mobile,address,reason,date,cdate) values('$name','$email','$mobile','$address','$reason','$date',curdate())");
    echo "<script>alert('Your data is successfully submitted... & We will contact you soon....')</script>";
    include ('class/class.phpmailer.php');
     $mail = new PHPMailer;
     $mail->IsSMTP();
     $mail->Host = 'shivrasbhog.com';
     $mail->Port = '587';
     $mail->SMTPAuth = true;
     $mail->Username = 'info@shivrasbhog.com';
     $mail->Password = 'Shivrasbhog@123';
     $mail->SMTPSecure = '';
     $mail->From = 'info@shivrasbhog.com';
     $mail->FromName = 'Customer';
     $mail->AddAddress($row["$email"]);
     $mail->WordWrap = 50;
     $mail->IsHTML(true);
     $mail->Subject = 'Thanks From Shivrasbhog';
     $message_body = '<p>We will contact you soon <b></b>.</p><p>Sincerely,</p>';
     $mail->Body = $message_body;

     $mail->Send();
     
    $msg = "Your Details Entered Succefully";
    echo "<script>top.window.location.href='contact.php?msg=$msg&name=$name&mobile=$mobile'</script>";
}
// Customer's Feedback

if ($_POST["action"] == "feedback") {
    extract($_POST);

    mysqli_query($con, "insert into feedback(name,email,feedback,date,rate) values('$name','$email','$feedback',curdate(),$rate)");
    echo "<script> alert ('Thanks foryour valuabale feedback')</script>";
    $msg = "Your Feedback is successfully submitted";
    echo "<script>top.window.location.href='index.php?msg=$msg'</script>";
}
?>