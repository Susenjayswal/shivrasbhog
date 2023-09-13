<?php
session_start();
$_SESSION["email"] = "";
$_SESSION["name"] = "";
echo "<script>top.window.location.href='index.php';</script>";
?>