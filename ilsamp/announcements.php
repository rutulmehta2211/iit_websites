<?php

include("headers.php");
include("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:adminlogin.php");
}
 ?>

 <?php
 if (isset($_POST['addannbtn'])) {
   $currenttime = time();
   $annName = $_POST['announcementname'];
   $catname = $_POST['catname'];
   $announcement =  $_POST['content'];  

   $announcement = nl2br($announcement);
   $timestamp = $_POST['timestamp'];

  

   $datetime = date("M-d-Y  h:i:s:a",$currenttime);


          $sql = "INSERT INTO announcements(datetime,announcementname , category , timestamp , announcement)
          VALUES('$datetime','$annName' , '$catname' , '$timestamp' , '$announcement')";
          $result = mysqli_query($link,$sql);
          if ($result) {
            echo "<script>alert('Announcement  WAS ADDED SUCCESSFULLY')</script>";
          }

     }

      if (isset($_POST['addhashbtn'])) {
   $name = $_POST['hashtagname'];
   $redirectionlink = $_POST['redirectionlink'];
   $annid = $_POST['annid'];


          $sql = "INSERT INTO hashtags(hashtagname,redirectionlink , annid )
          VALUES('$name','$redirectionlink' , $annid )";
          $result = mysqli_query($link,$sql);
          if ($result) {
            echo "<script>alert('Hashtag  WAS ADDED SUCCESSFULLY')</script>";
          }

     }


 
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
     crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
     integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
     crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
     integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
     crossorigin="anonymous"></script>


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
              <li class="nav-item "> <a  class="nav-link" href="addresources.php">
                <i class="fab fa-sourcetree"></i>
                &nbsp;Add Resources</a> </li>

                                   <li class="nav-item active"> <a  class="nav-link" href="announcements.php">
                <i class="fas fa-bullhorn"></i>
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

                <h1>Add new announcement</h1> <br>
                <div>
                    <hr>

                    <fieldset>

                        <div id="home">
                            <br>
                            <form action="announcements.php" method="post" enctype="multipart/form-data">
                                <br> <br>
                                <div class="form-group">
                                    <label for="columnname">Announcement Name  : </label>
                                    <input type="text" class="form-control" required placeholder="Name of the announcement"
                                        name="announcementname" id="announcementname" value="">
                                </div>

                                 <div class="form-group">
                                    <label for="columnname">Date  : </label>
                                    <input type="date" class="form-control" required placeholder="date and time"
                                        name="timestamp" id="timestamp" value="">
                                </div>

                                 <div class="form-group">
                                    <label for="columnname">Category Name  : </label>
                                    <input type="text" class="form-control" required placeholder="Enter category name"
                                        name="catname" id="catname" value="">
                                </div>

                                 <div class="form-group">
                                    <label for="columnname">Announcement     : </label>

                                    <!-- <input type="text" class="form-control" required name="content" id="content" placeholder="Enter the announcement"> -->
                                    <textarea  required name="content" id="content" class="form-control" placeholder="Enter the announcement"  rows="10" ></textarea>
                                </div>


                                <input type="submit" name="addannbtn" class="btn btn-info btn-block "
                                    value="Add the New Announcement">
                            </form>
                        </div>

                        <br>

                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Hashtags to announcement</button>
               


                    </fieldset>

                </div>
                <br><br>
            </div>



      </div>

      </div>
    </div>

          <form action="announcements.php" method="post">

     <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add hashtags</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                <div class="form-group">
                    <div class="dropdown">
                      <label for="">Select announcement to add hashtags</label>
                      <select name="annid" class="form-control" id="">
                        <option value="" selected>Select the option</option>
                                        <?php
                                $viewquery = "SELECT * FROM announcements ORDER BY datetime DESC";
                                $result = mysqli_query($link,$viewquery);
                                while ($row = mysqli_fetch_array($result)) {
                                    $name = $row['announcementname'];
                                    $annid = $row['id'];
                             ?>
                                            <option value="<?php echo $annid; ?>"><?php echo $name; ?></option>
                                            <?php } ?>

                      </select>
                    </div>
                </div>

                    <div class="form-group">
                                    <label for="name">Hashtag Name : </label>
                                    <input type="text" class="form-control" required placeholder="Name of the hashtag"
                                        name="hashtagname" id="name" value="">
                                </div>
                                <div class="form-group">
                                    <label for="redirectionlink">Any redirection link for the hashtag (optional):
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter the correct link here"
                                        name="redirectionlink" id="redirectionlink" value="">
                                </div>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <input type="submit" name="addhashbtn" class="btn btn-success" value="Add">

        </div>
        
      </div>
    </div>
  </div>

          </form>



  </body>
  <div id="footer">
    <div class="container">

      <p>Developed By Illinois Tech <?php echo date("Y"); ?> </p>
     </div>

  </div>
</html>
<script type="text/javascript">



$(function() {
    setTimeout(function() {
        $('.alert').alert('close');
    }, 4000)
})

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

</script>
