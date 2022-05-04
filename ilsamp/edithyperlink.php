<?php

include("headers.php");
include("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:adminlogin.php");
}
 ?>

 <?php
if(isset($_POST['updateresbtn'])){
  $update = $_POST['updatecolumnname'];
  $sql = "UPDATE resourcecolumn SET columnname='$update' WHERE rescolumnid= $id ";
  $result = mysqli_query($link , $sql);
  if($result){
    echo "<script>window.open('dashboard.php','_self')</script>";
  }
}

if (isset($_POST['updatelinkbtn'])) {
 // main section
 $id = $_GET['edithyperlinkid'];
 $updatehypname = $_POST['hyperlinkname'];
 $redlink = $_POST['redlink'];
 $hehe = $_POST['columnid'];
 if($_POST['columnid'] == ''){
   echo "<script>alert('Please select RESOURCE COLUMN NAME from dropdown')</script>";
 }else{
     $columnid = $_POST["columnid"];
     $sql = "UPDATE hyperlinks SET resourceid='$columnid' , hyperlinkname ='$updatehypname' , redirectionlink='$redlink' WHERE id='$id' ";
     $result = mysqli_query($link,$sql);
     if ($result) {
       echo "<script>window.open('dashboard.php','_self')</script>";
     }

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
              <li class="nav-item active"> <a  class="nav-link" href="dashboard.php">
                <span><i class="fas fa-columns"></i></span>
                &nbsp;Dashboard</a> </li>
              <li class="nav-item"> <a  class="nav-link" href="addresources.php">
                <i class="fab fa-sourcetree"></i>
                &nbsp;Add Resources</a> </li>

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
            <?php
            $hypid = $_GET['edithyperlinkid'];
            $updatedata = "SELECT *FROM hyperlinks INNER JOIN resourcecolumn on hyperlinks.resourceid = resourcecolumn.rescolumnid WHERE id='$hypid' ";
            $view = mysqli_query($link,$updatedata);
            while ($row=mysqli_fetch_array($view)) {
              $hyperlinkname = $row['hyperlinkname'];
              $redirectionlink = $row['redirectionlink'];
              $presentoption = $row['columnname'];
              $rescolumnid = $row['resourceid'];
            }
           ?>
              <br>
              <hr>
              <h4 style="color : purple;font-weight:bold">Adding Links Section</h4>
              <br>
              <div class="form-group">
                  <div class="dropdown">
                      <label for="">Select Resource Column you want to add the links</label>
                      <select class="form-control" name="columnid">
                          <option disabled value="<?php echo $rescolumnid ?>" selected ><?php echo $presentoption ?></option>
                                <?php
                                    $viewquery = "SELECT * FROM resourcecolumn ORDER BY datetime DESC";
                                  $result = mysqli_query($link,$viewquery);
                                  while ($row = mysqli_fetch_array($result)) {
                                      $columnname = $row['columnname'];
                                      $columnid = $row['rescolumnid'];
                                  ?>
                                  <option value="<?php echo $columnid; ?>"><?php echo $columnname; ?></option>
                                <?php } ?>
                      </select>

                  </div>
              </div>

              <div class="form-group">
                  <label for="title">Hyperlink name </label>
                  <input type="text" class="form-control" required placeholder="Enter the hyperlink name to add"
                      name="hyperlinkname" id="title" value="<?php echo $hyperlinkname ?>">
              </div>
              <div class="form-group">
                  <label for="redlink">Hyperlink redirection link </label>
                  <input type="text" required class="form-control" placeholder="enter the hyperlink redirection link"
                      name="redlink" id="redlink" value="<?php echo $redirectionlink ?>">
              </div>

              <input type="submit" name="updatelinkbtn" class="btn btn-success btn-block"
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
