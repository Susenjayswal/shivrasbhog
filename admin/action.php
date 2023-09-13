<?php
$con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");
session_start();

//Invocie Number


function newinvoiceno()
{
    $con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");

    $rs = mysqli_query($con, "select *from counter");
    $d = mysqli_fetch_object($rs);
    $newinvid = ($d->invno + 1);
    return ($newinvid);
}

// Update Invoice Number
function updateinvoiceno($invno)
{
    $con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");
    mysqli_query($con, "update counter set invno='$invno'");
}



//Employee Register

if ($_POST["action"] == "employee") {
    extract($_POST);
    $rs = mysqli_query($con, "select *from employee where email='$email'");
    if (mysqli_num_rows($rs) > 0) {
        $msg = "You are registed and goto forgot password...";
        echo "<script>top.window.location.href='index.php?msg=$msg'</script>";
    } else {
        $password1 = md5($password);
        mysqli_query($con, "insert into employee(name,fname,mobile,email,address,idt,idnum,designation,outnum,outadd,password,view_password) values('$name','$fname','$mobile','$email','$address','$idt','$idnum','$designation','$outlet','$out_add','$password1','$password')");
        $msg = "You are registered successfully. proceed to login....";
        echo "<script>top.window.location.href='index.php?msg=$msg'</script>";
    }
}

// Employee Login

if ($_POST["action"] == "login") {
    extract($_POST);
    $password = md5($password);
    $rs = mysqli_query($con, "select *from employee where email='$email' and password='$password'");
   
    if (mysqli_num_rows($rs) > 0) {
        $d = mysqli_fetch_object($rs);
        $_SESSION["email"] = $d->email;
       
        if (($d->designation) == "Admin") {
             $_SESSION["name"] = $d->name;
            mysqli_query($con, "insert into login (name,email,id,date) values ('$d->name','$d->email','$d->id',curdate())");
           echo "<script>alert('You are valid user...');</script>";
           echo "<script>top.window.location.href='../employee/index.php';</script>";
        } else {
            $_SESSION["sname"] = $d->name;
            mysqli_query($con, "insert into login (name,email,id,date) values ('$d->name','$d->email','$d->id',curdate())");
           echo "<script>alert('You are valid user...');</script>";
           echo "<script>top.window.location.href='../employee/staff.php';</script>";
        }
    } else {
        echo "<script>alert('You are not register or invalid password...');</script>";
        echo "<script>top.window.location.href='index.php';</script>";
    }
}

// Forgot Password 
if ($_POST["action"] == "forgot") {
    extract($_POST);
    $rs = mysqli_query($con, "select *from employee where email='$email' ");
    if (mysqli_num_rows($rs) > 0) {
        $d = mysqli_fetch_object($rs);
        $pwd=$d->view_password;
        $name=$d ->name;
        //echo "<script>alert('$pwd'); </script>";
        include ('../class/class.phpmailer.php');
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
        $mail->Subject = 'Employee Forgot Password ';
        $message_body = "$name, <p>Your Password is '$pwd'<b></br>Sincerely,</br>Team Shiv Rasbhog</p> <p>Update Your Password from the following link</br></p><p>http://www.shivrasbhog.com/admin/changepassword.php</a></p>";
        
        $mail->Body = $message_body;
   
        $mail->Send();
        $msg = "Proceed to login....";
        echo "<script>top.window.location.href='index.php?msg=$msg'</script>";
    }else{
        echo "<script>alert('You are not a valid user') </script>";
    }
    }

//Update password

if ($_POST["action"] == "password") {
    extract($_POST);
    $password = md5($password);
    $rs = mysqli_query($con, "select *from employee where email='$email' and password='$password'");
    if (mysqli_num_rows($rs) > 0) {     
        if($password!=md5($opassword)){
            if ($npassword == $opassword) {
                $pwd=md5($npassword);
                mysqli_query($con,"update employee set password='$pwd',view_password='$npassword' where email='$email' and password='$password'");
                $msg = "Password Changed Succefully.....proceed to login";
                echo "<script>top.window.location.href='index.php?msg=$msg'</script>";
            } else {
            echo "<script>alert('Password Not Matched');</script>";
            echo "<script>top.window.location.href='changepassword.php';</script>";
            }
        }else{
            echo "<script>alert('Old and New Password must not be same');</script>";
            echo "<script>top.window.location.href='changepassword.php';</script>";
        }
    } else {
        echo "<script>alert('You are not register or invalid email or passsword');</script>";
        echo "<script>top.window.location.href='index.php';</script>";
    }
}

// Menu Upload in database

if (isset($_POST["action"]) == "upload") {

    if ($_FILES['file']['name']) {
        $filename = explode(".", $_FILES['file']['name']);
        echo "loading";
        if ($filename[1] == 'csv') {
            $handle = fopen($_FILES['file']['tmp_name'], "r");
            echo "loading loading";
            while ($data = fgetcsv($handle)) //handling csv file 
            {
                $mid = mysqli_real_escape_string($con, $data[0]);
                $type = trim(strtoupper(mysqli_real_escape_string($con, $data[1])));
                $stype = trim(strtoupper(mysqli_real_escape_string($con, $data[2])));
                $name = trim(strtoupper(mysqli_real_escape_string($con, $data[3])));
                $price = mysqli_real_escape_string($con, $data[4]);
                $rtype = trim(strtoupper(mysqli_real_escape_string($con, $data[5])));
                $available = trim(strtoupper(mysqli_real_escape_string($con, $data[6])));

                //insert data from CSV file

                $rs = mysqli_query($con, "select *from menu where upper(name)='$name'");
                if (mysqli_num_rows($rs) > 0) {
                    $query = "update menu set price='$price',available='$available' where upper(name)='$name'";
                    mysqli_query($con, $query);
                    $msg = "Updated successfully submitted.";
                    echo "<script>top.window.location.href='uploadmenu.php?msg=$msg'</script>";


                } else {
                    $query = "INSERT into menu(id,type,subtype,name,price,ratetype,available) values('$mid','$type','$stype','$name','$price','$rtype','$available')";
                    mysqli_query($con, $query);
                    $msg = "Upload menu successfully.";
                    echo "<script>top.window.location.href='uploadmenu.php?msg=$msg'</script>";

                }
            }
            fclose($handle);

            echo "<script>top.window.location.href='uploadmenu.php?msg=$msg'</script>";
        }
    }
}

?>