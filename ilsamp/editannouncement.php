<?php

include("headers.php");
include("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:adminlogin.php");
}
 ?>

 <?php
if(isset($_POST['updateannbtn'])){

  $id = $_GET['editannid'];
     $currenttime = time();
   $annName = $_POST['announcementname'];
   $catname = $_POST['catname'];
   $announcement = $_POST['content'];
   $timestamp = $_POST['timestamp'];
  $sql = "UPDATE announcements SET announcementname='$annName' , category = '$catname' , timestamp ='$timestamp' , announcement = '$announcement' WHERE id= $id ";
  $result = mysqli_query($link , $sql);
  if($result){
    echo "<script>window.open('dashboard.php','_self')</script>";
  }
}

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <style media="screen">
    html{
      position: relative;
      min-height: 100%;
    }
    body{
      background-color: #2f4050;
      margin-bottom: 70px;
    }
    .col-sm-10{
      background-color: #ffffff;
    }
    #sidemenu a{
        color: #9fb1c2;
    }
    #sidemenu .active a{
      color: #ffffff;
      background-color: #27AAE1;
      font-weight: bold;
    }
    #sidemenu a:hover{
      color: #ffffff;
      background-color: #1ab394;
      font-weight: bold;
      display: block;
    }
    #footer{
      width: 100%;
      position: absolute;
      bottom: 0;
      padding: 10px;
      color: #eeeeee;
      background-color: #211f22;
      text-align: center;
    }
    .username{
      text-transform: capitalize;
    }



    </style>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
          <h1 class="text-muted" style="text-align:center;color:white;"><?php echo $_SESSION['username'] ?></h1>

          <ul id="sidemenu" class="nav nav-pills flex-column">
              <li class="nav-item "> <a  class="nav-link" href="dashboard.php">
                <span><i class="fas fa-columns"></i></span>
                &nbsp;Dashboard</a> </li>
              <li class="nav-item"> <a  class="nav-link" href="addresources.php">
                <i class="fab fa-sourcetree"></i>
                &nbsp;Add Resources</a> </li>


                                   <li class="nav-item active"> <a  class="nav-link" href="announcements.php">
                <i class="fab fa-sourcetree"></i>
                &nbsp;Announcements</a> </li>

              <li class="nav-item"> <a  class="nav-link" href="index.php" target="_blank">
                <span><i class="fas fa-blog"></i></span>
                &nbsp;Live Blog</a> </li>

              <li class="nav-item"> <a href="logout.php?logout=1" class="nav-link">
                <span><i class="fas fa-sign-out-alt"></i></span>
                &nbsp;Logout</a> </li>

          </ul>

        </div>
        <div class="col-sm-10" style="min-height:900px">

          <form  method="post" enctype="multipart/form-data">
              <br> <br>
              <h4 style="color : purple;font-weight:bold">Edit Announcement</h4>
              <hr>
              <?php
              $id = $_GET['editannid'];
              $updatedata = "SELECT *FROM announcements WHERE id='$id' ";
              $view = mysqli_query($link,$updatedata);
              while ($row=mysqli_fetch_array($view)) {
                 $annname = $row['announcementname'];
                    $timestamp = $row['timestamp'];
                    $categroy = $row['category'];
                    $datetime = $row['datetime'];
                    $announcement = $row['announcement'];
              }
             ?>
  

                <div class="form-group">
                                    <label for="columnname">Announcement Name  : </label>
                                    <input type="text" class="form-control" required placeholder="Name of the announcement"
                                        name="announcementname" id="announcementname" value="<?php echo $annname ?>">
                                </div>

                                 <div class="form-group">
                                    <label for="columnname">Date  : </label>
                                    <input type="date" class="form-control" required placeholder="date and time"
                                        name="timestamp" id="timestamp" value="<?php echo $timestamp ?>">
                                </div>

                                 <div class="form-group">
                                    <label for="columnname">Category Name  : </label>
                                    <input type="text" class="form-control" required placeholder="Enter category name"
                                        name="catname" id="catname" value="<?php echo $categroy ?>">
                                </div>

                                 <div class="form-group">
                                    <label for="columnname">Announcement     : </label>
                                    <input type="text" class="form-control" required name="content" id="content" value="  <?php echo $announcement ?>" placeholder="Enter the announcement">
                                   
                         
                                </div>


              <hr>
              <input type="submit" name="updateannbtn" class="btn btn-info btn-block "
                  value="Update the data">
          </form>

          </div>



      </div>

      </div>
    </div>

  </body>
  <div id="footer">
    <div class="container">

      <p>Developed By Illinois Tech <?php echo date("Y"); ?> </p>
     </div>

  </div>
</html>
<script type="text/javascript">


</script>
