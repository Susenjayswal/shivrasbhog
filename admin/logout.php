<?php
session_start();
$_SESSION["username"]="";
$_SESSION["name"]="";
echo "<script>top.window.location.href='../index.php';</script>";
?>