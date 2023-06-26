<?php
require_once("connect.php");
require_once("function.php");
session_start();

//Delete Order by customer

if(@$_REQUEST["del"] ==  "Delete_Order")
{
    $name=$_REQUEST["name"];
    $invno=$_REQUEST["invno"];
    $id=$_REQUEST["id"];
    $mobile=$_REQUEST["mobile"];
    mysqli_query($con,"delete from cus_order where id='$id'");
    $msg="Your order is deleted.";
    $paytype="CASH";
    echo "<script>top.window.location.href='guestvieworder.php?name=$name&invno=$invno&mobile=$mobile&paytype=$paytype';</script>";    
}
//Delete Order

if(@$_REQUEST["del"] ==  "DeleteOrder")
{
    $name=$_REQUEST["name"];
    $invno=$_REQUEST["invno"];
    $id=$_REQUEST["id"];
    $mobile=$_REQUEST["mobile"];
    mysqli_query($con,"delete from cus_order where id='$id'");
    "Your order is deleted.";
    $paytype="CASH";
    echo "<script>top.window.location.href='vieworder.php?name=$name&invno=$invno&mobile=$mobile&paytype=$paytype';</script>";    
}
//Cancel order
if($_REQUEST["action"] == "cancelorder")
{
    $invno=$_REQUEST["invno"];
    $item="";
    $amount=0;
    $rs=mysqli_query($con,"select *from cus_order where invno='$invno'");
    while($d=mysqli_fetch_object($rs))
    {
        $item .= ",".$d->itname;
        $amount=($amount+$d->price);
    }   
    mysqli_query($con,"insert into cancel(itname,totalamount,date,invno) values('$item','$amount',CURDATE(),'$invno')");
    updateinvoiceno($invno);
    $msg="Order cancel";
    echo "<script>top.window.location.href='customer.php?msg=$msg'</script>";
}
//payment data of customer's

if(@$_POST["action"]== "save_invoice")
{
    extract($_POST);
    $rs=mysqli_query($con,"select sum(price * quantity) as `total_price` from cus_order where invno='$invno'");
    $d=mysqli_fetch_object($rs);
    $totalamount=$d->total_price;
    $gst=($totalamount*5)/100;
    $netamount=$totalamount+$gst;
      $employee=("Guest Order");
        mysqli_query($con, "insert into payment(name,mobile,invno,empname,paytype,totalamt,netamt,saledate) values('$name','$mobile','$invno','$employee','$paytype','$totalamount','$netamount',curdate())");
        updateinvoiceno($invno);
        echo "<script>alert('Your Order is Succefully submitted');</script>";
        $msg="Order is successfully submitted and Bill is generated";
        echo "<script>top.window.location.href='../customer/menu.php?msg=$msg'</script>";

    
}

//order fill by customer's

if(@$_POST["action1"]== "cusorder")
{
    extract($_POST);
    if(@$_POST["btn"]=="Add")
    {
        $itemname=itemname($pname);
        mysqli_query($con,"insert into cus_order(name,mobile,type,itname,price,quantity,invno,date) values('$cname','$mobile','$ptype','$itemname','$price','$quantity','$invno',curdate())");
        $msg="Your order is Added.";
        echo "<script>top.window.location.href='guestorder.php?msg=$msg&name=$cname&mobile=$mobile&invno=$invoiceno'</script>";
    }
    if(@$_POST["btn1"]=="Submit")
    {
        extract($_POST);
        $itemname=itemname($pname);
        if ($quantity != null ) 
        {
            mysqli_query($con,"insert into cus_order(name,mobile,type,itname,price,quantity,invno,date) values('$cname','$mobile','$ptype','$itemname','$price','$quantity','$invno',curdate())");
            echo "<script>top.window.location.href='guestvieworder.php?invno=$invno&name=$cname&mobile=$mobile'</script>";    
        }
        else
        {
            echo "<script>top.window.location.href='guestvieworder.php?invno=$invno&name=$cname&mobile=$mobile'</script>";
        }
    }
}
//order of customer's

if(@$_POST["action1"]== "cus_order")
{
    extract($_POST);
    if(@$_POST["btn"]=="Add")
    {
        $itemname=itemname($pname);
        mysqli_query($con,"insert into cus_order(name,mobile,type,itname,price,quantity,invno,date) values('$cname','$mobile','$ptype','$itemname','$price','$quantity','$invoiceno',curdate())");
        $msg="Your order is Added.";
        echo "<script>top.window.location.href='order.php?msg=$msg&name=$cname&mobile=$mobile&invno=$invoiceno'</script>";
    }
    if(@$_POST["btn1"]=="Submit")
    {
        extract($_POST);
        $itemname=itemname($pname);
        if ($quantity != null ) 
        {
            mysqli_query($con,"insert into cus_order(name,mobile,type,itname,price,quantity,invno,date) values('$cname','$mobile','$ptype','$itemname','$price','$quantity','$invoiceno',curdate())");
            echo "<script>top.window.location.href='vieworder.php?invno=$invoiceno&name=$cname&mobile=$mobile'</script>";    
        }
        else
        {
            echo "<script>top.window.location.href='vieworder.php?invno=$invoiceno&name=$cname&mobile=$mobile'</script>";
        }
    }
}
?>