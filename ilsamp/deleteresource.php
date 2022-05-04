<?php
include("connection.php");
include("headers.php");

if($_GET['deleteresource']){
  $id = $_GET['deleteresource'];
  $sql = "DELETE FROM resourcecolumn WHERE rescolumnid='$id' ";
  $result = mysqli_query($link , $sql);

  // delete hyperlink  file
  $sql = "DELETE FROM hyperlinks WHERE resourceid='$id' ";
  $result = mysqli_query($link , $sql);

  if ($result) {
    echo "<script>window.open('dashboard.php','_self')</script>";
  }
}

if($_GET['deletehyperlink']){
  $id = $_GET['deletehyperlink'];
  $sql = "DELETE FROM hyperlinks WHERE id='$id'";
  $result = mysqli_query($link,$sql);
  if ($result) {
    echo "<script>window.open('dashboard.php','_self')</script>";

  }
}

 ?>
