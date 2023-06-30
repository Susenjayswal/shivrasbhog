<?php
require_once("connect.php");
session_start();
if($_POST["action"]== "stock")
{
    extract($_POST);
    if(@$_POST["btn11"]=="Add"){
        mysqli_query($con,"insert into stock(name,invono,rate,type,quantity,price,date) values('$name','$invono','$rate','$type','$quantity','$price','$date')");
        $msg="Stock Inserted Succefully";
        echo "<script>top.window.location.href='../employee/stock.php?msg=$msg&name=$name&invono=$invono'</script>";
}
    if(@$_POST["btn2"]=="Submit"){
        extract($_POST);
       
        if ($price != null ) 
        {
            mysqli_query($con,"insert into stock(name,invono,rate,type,quantity,price,date) values('$name','$invono','$rate','$type','$quantity','$price','$date')");
            $msg="Stock Inserted Succefully";
            echo "<script>top.window.location.href='../employee/staff.php?msg=$msg&invono=$invono'</script>";  
        }
        else{
            $msg="Stock Inserted Succefully";
            echo "<script>top.window.location.href='../employee/staff.php?msg=$msg&invono=$invono'</script>"; 
        }
    }
}
if($_POST["action"]== "fileupload"){
    $invono=$_POST["invono"];
    $name=$_POST["name"];
    $filename=$_FILES["pdf"]["name"];
    $filepath=$_FILES["pdf"]["tmp_name"];
    move_uploaded_file($filepath,'pdf/'.$filename);
    mysqli_query($con,"insert into uploadpdf(invono,filename) values('$invono','$filename')");
    echo "<script>top.window.location.href='../employee/stock.php?name=$name&invono=$invono'</script>";  
           
            
}
//Expenses Entry
if($_POST["action"]== "expenses"){
    extract($_POST);
    mysqli_query($con,"insert into expenses(name,price,date) values('$name','$price','$date')");
            $msg="Expenses Inserted Succefully";
            echo "<script>top.window.location.href='../employee/staff.php?msg=$msg&name=$name&price=$price'</script>";
}


?>