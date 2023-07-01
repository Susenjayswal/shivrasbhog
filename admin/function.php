<?php
function newinvoiceno()
{
    $con = mysqli_connect("localhost", "root", "", "rasbhog");

    $rs = mysqli_query($con, "select *from counter");
    $d = mysqli_fetch_object($rs);
    $newinvid = ($d->invno + 1);
    return ($newinvid);
}
function updateinvoiceno($invno)
{
    $con = mysqli_connect("localhost", "root", "", "rasbhog");

    mysqli_query($con, "update counter set invno='$invno'");
}
function itemname($id)
{
    $con = mysqli_connect("localhost", "root", "", "rasbhog");
    $rs = mysqli_query($con, "select *from menu where id='$id'");
    $d = mysqli_fetch_object($rs);
    return ($d->name);

}
?>