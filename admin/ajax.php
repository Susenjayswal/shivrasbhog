<?php
$con = mysqli_connect("localhost", "shivrasb_ashwani", "ARs@321789004", "shivrasb_rasbhog");
@session_start();

//Choose product type
if ($_POST["action"] == "chooseptype") {
    extract($_POST);
    $rs = mysqli_query($con, "select *from menu where type='$ptype' and available='AVAILABLE'");
    $data = '<option value="">---</option>';
    while ($d = mysqli_fetch_object($rs)) {
        $data .= '<option value=' . $d->id . '>' . $d->name . '</option>';
    }
    echo $data;
}
//Choose product name
if ($_POST["action"] == "selectproduct") {
    extract($_POST);

    $rs = mysqli_query($con, "select *from menu where id='$pid'");
    $d = mysqli_fetch_object($rs);
    echo $d->price;
}

?>