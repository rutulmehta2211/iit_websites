<?php
include("connection.php");
include("headers.php");

if($_GET['deleteann']){
  $id = $_GET['deleteann'];
  $sql = "DELETE FROM announcements WHERE id=$id ";
  $result = mysqli_query($link , $sql);


  if ($result) {
    echo "<script>window.open('dashboard.php','_self')</script>";
  }
}


elseif($_GET['deletehash']){
  $id = $_GET['deletehash'];
  $sql = "DELETE FROM hashtags WHERE hashtagid=$id ";
  $result = mysqli_query($link , $sql);

  if ($result) {
    echo "<script>window.open('dashboard.php','_self')</script>";
  }
}


 ?>
