<?php
 $con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");
//Contact us
if ($_POST["action"] == "contact") {
    extract($_POST);
    $rs = mysqli_query($con, "select *from contact where date='$date' and time='$time'");
    if (mysqli_num_rows($rs) == 0) {
    mysqli_query($con, "insert into contact(name,email,mobile,address,reason,date,cdate,time) values('$name','$email','$mobile','$address','$reason','$date',curdate(),'$time')");
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
     $mail->FromName = 'Shiv Rasbhog';
     $mail->AddAddress($email);
     $mail->WordWrap = 50;
     $mail->IsHTML(true);
     $mail->Subject = 'Thanks From Shivrasbhog';
     
     $message_body = "><br><p><b>Dear $name,</p><p>You requested to meet us on the date $date on time $time</p><p>We will contact you soon <b></b>.</p><p>Sincerely,</p><p><b>Team, <br>Shiv Rasbhog</p>";
     $mail->Body = $message_body;

     $mail->Send();
    $msg = "Your Details Entered Succefully";
    echo "<script>top.window.location.href='contact.php?msg=$msg&name=$name&mobile=$mobile'</script>";
    }else{
         echo "<script>alert('The date and time you choose is already filled')</script>";
         $msg = "Please, select another date or time";
    echo "<script>top.window.location.href='contact.php?msg=$msg&name=$name&mobile=$mobile'</script>";
   
    }
}
// Customer's Feedback

if ($_POST["action"] == "feedback") {
    extract($_POST);

    mysqli_query($con, "insert into feedback(name,email,feedback,date,rate) values('$name','$email','$feedback',curdate(),'$rate')");
     echo "<script> alert ('Thanks for your valuabale feedback')</script>";
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
     $mail->FromName = 'Shiv Rasbhog';
     $mail->AddAddress($email);
     $mail->WordWrap = 50;
     $mail->IsHTML(true);
     $mail->Subject = 'Thanks From Shivrasbhog';
     $message_body = '<p>Thankyou For your valubale Feedback <b></b>.</p><p>Sincerely,<br>Team, Shiv Rasbhog </p>';
     $mail->Body = $message_body;

     $mail->Send();
    $msg = "Your Feedback is successfully submitted";
    echo "<script>top.window.location.href='index.php?msg=$msg'</script>";
}
?>