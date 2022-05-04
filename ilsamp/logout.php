<?php
session_start();
include("connection.php");
if ($_GET['logout'] == 1) {
  session_destroy();
  echo "<script>window.location.href='adminlogin.php';</script>";
}

 ?>
