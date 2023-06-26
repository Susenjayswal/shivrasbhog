<?php
require_once("connect.php");
session_start();

//Invocie Number


function newinvoiceno()
{
    $con=mysqli_connect("localhost","root","","rasbhog");

    $rs=mysqli_query($con,"select *from counter");
    $d=mysqli_fetch_object($rs);
    $newinvid=($d->invno+1);
    return($newinvid);
}

// Update Invoice Number
function updateinvoiceno($invno)
{
    $con=mysqli_connect("localhost","root","","rasbhog");
    mysqli_query($con,"update counter set invno='$invno'");
}



//Employee Register

if($_POST["action"]== "employee")
{
    extract($_POST);
    $rs=mysqli_query($con,"select *from employee where email='$email'");
    if(mysqli_num_rows($rs)>0)
    {
        $msg="You are registed and goto forgot password...";
        echo "<script>top.window.location.href='../index.php?msg=$msg'</script>";
    }
    else{
        $password=md5($password);
        mysqli_query($con,"insert into employee(name,fname,mobile,email,address,idt,idnum,designation,outnum,outadd,password) values('$cname','$fname','$mobile','$email','$address','$idt','$idnum','$designation','$outlet','$out_add','$password')");
        $msg="You are registered successfully. proceed to login....";
        echo "<script>top.window.location.href='../index.php?msg=$msg'</script>";
    }
}

// Employee Login

if($_POST["action"]== "login")
{
    extract($_POST);
    $password=md5($password);
    $rs=mysqli_query($con,"select *from employee where email='$email' and password='$password'");
    if(mysqli_num_rows($rs)>0)
    {
        $d=mysqli_fetch_object($rs);
        $_SESSION["email"]=$d->email;
        $_SESSION["name"]=$d->name;
        if (($d->designation)=="Admin"){
            mysqli_query($con,"insert into login (name,email,id,date) values ('$d->name','$d->email','$d->id',curdate())");
            echo "<script>alert('You are valid user...');</script>";
            echo "<script>top.window.location.href='../employee/admin.php';</script>";
        }
        else{
            $_SESSION["sname"]=$d->name;
            mysqli_query($con,"insert into login (name,email,id,date) values ('$d->name','$d->email','$d->id',curdate())");
            echo "<script>alert('You are valid user...');</script>";
            echo "<script>top.window.location.href='../employee/staff.php';</script>";
        }
    }
    else{
        echo "<script>alert('You are not register or invalid password...');</script>";
        echo "<script>top.window.location.href='../index.php';</script>";
    }
}

// Customer's Feedback

if($_POST["action"]== "feedback")
{
    extract($_POST);

        mysqli_query($con,"insert into feedback(name,email,feedback) values('$name','$email','$feedback')");
        $msg="Your Feedback is successfully submitted";
        echo "<script>top.window.location.href='../customer/index.php?msg=$msg'</script>";
}

// Menu Upload in database

if(isset($_POST["action"])=="upload")
{
	
if($_FILES['file']['name'])
{
$filename = explode(".", $_FILES['file']['name']);
echo "loading";
if($filename[1] == 'csv')
{
$handle = fopen($_FILES['file']['tmp_name'], "r");
echo "loading loading";
while($data = fgetcsv($handle))//handling csv file 
{
$mid=mysqli_real_escape_string($con, $data[0]);
$type = trim(strtoupper(mysqli_real_escape_string($con, $data[1])));
$stype=trim(strtoupper(mysqli_real_escape_string($con, $data[2])));
$name=trim(strtoupper(mysqli_real_escape_string($con, $data[3])));
$price=mysqli_real_escape_string($con, $data[4]);
$rtype=trim(strtoupper(mysqli_real_escape_string($con, $data[5])));
$available=trim(strtoupper(mysqli_real_escape_string($con, $data[6])));

//insert data from CSV file

$rs=mysqli_query($con,"select *from menu where upper(name)='$name'");
if(mysqli_num_rows($rs)>0)
{
    $query="update menu set price='$price',available='$available' where upper(name)='$name'";
    mysqli_query($con, $query);
    $msg="Updated successfully submitted.";
        echo "<script>top.window.location.href='uploadmenu.php?msg=$msg'</script>";


}
else{
$query = "INSERT into menu(id,type,subtype,name,price,ratetype,available) values('$mid','$type','$stype','$name','$price','$rtype','$available')";
mysqli_query($con, $query);
$msg="Upload menu successfully.";
        echo "<script>top.window.location.href='uploadmenu.php?msg=$msg'</script>";
 
}
}
fclose($handle);

echo "<script>top.window.location.href='uploadmenu.php?msg=$msg'</script>";
}
}
}
?>