<?php

include("headers.php");
include("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:adminlogin.php");
}
 ?>

 <?php
 if (isset($_POST['addresbtn'])) {
   $currenttime = time();
   $columnname = $_POST['columnname'];

   $datetime = date("M-d-Y  h:i:s:a",$currenttime);
   if($_POST['columnname'] == ''){
     $empty = "<p><strong>Column Name was required</strong></p>";
     $resultmessage .= $empty;
     $error = $resultmessage;
   }

      if($error) {
        // code... error mesages call later in below ode
       }else{
          $sql = "INSERT INTO resourcecolumn(datetime,columnname)
          VALUES('$datetime','$columnname')";
          $result = mysqli_query($link,$sql);
          if ($result) {
            echo "<script>alert('RESOURCE COLUMN WAS ADDED SUCCESSFULLY')</script>";
          }

       }
     }

     // for adding topics

     if (isset($_POST['addlinksbtn'])) {
      // main section
      $hyperlinkname = $_POST['hyperlinkname'];
      $redlink = $_POST['redlink'];

      if($_POST['columnid'] == ''){
        echo "<script>alert('Please select RESOURCE COLUMN NAME from dropdown')</script>";
      }else{
          $columnid = $_POST["columnid"];
          $sql = "INSERT INTO hyperlinks(hyperlinkname , redirectionlink , resourceid )
          VALUES('$hyperlinkname', '$redlink' , $columnid )";
          $result = mysqli_query($link,$sql);
          if ($result) {
            echo "<script>alert('HYPERLINKS ADDED SUCCESSFULLY ! ')</script>";

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
              <li class="nav-item "> <a  class="nav-link" href="dashboard.php">
                <span><i class="fas fa-columns"></i></span>
                &nbsp;Dashboard</a> </li>
              <li class="nav-item active"> <a  class="nav-link" href="addresources.php">
                <i class="fab fa-sourcetree"></i>
                &nbsp;Add Resources</a> </li>

                                   <li class="nav-item"> <a  class="nav-link" href="announcements.php">
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
                <h1>Add new Resource</h1> <br>
                <div>
                    <hr>
                    <a href="#home"><button type="button" id="addresourcesbtn" class="btn btn-info ml-3 mt-3"
                            name="button">Add the RESOURCE COLUMN</button></a>
                    <a href="#main"><button type="button" id="addlinksbtn" class="btn btn-success ml-3 mt-3"
                            name="button">ADD LINKS TO RESOURCE COLUMN</button></a>


                    <fieldset>

                        <div id="home">
                            <br>
                            <form action="addresources.php" method="post" enctype="multipart/form-data">
                                <br> <br>
                                <h4 style="color : purple;font-weight:bold">REOURCE COLUMN SECTION</h4>
                                <div class="form-group">
                                    <label for="columnname">Resource Column Name  : </label>
                                    <input type="text" class="form-control" required placeholder="Name of the Column you want to add"
                                        name="columnname" id="columnname" value="">
                                </div>

                                <input type="submit" name="addresbtn" class="btn btn-info btn-block "
                                    value="Add the New Resource Column">
                            </form>
                        </div>

                        <div id="main">
                            <form action="addresources.php#main" method="post" enctype="multipart/form-data">
                                <br>
                                <hr>
                                <h4 style="color : purple;font-weight:bold">Adding Links Section</h4>
                                <br>
                                <div class="form-group">
                                    <div class="dropdown">
                                        <label for="">Select Resource Column you want to add the links</label>
                                        <select class="form-control" name="columnid">
                                            <option value="" selected>Select the option</option>
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
                                        name="hyperlinkname" id="title" value="">
                                </div>
                                <div class="form-group">
                                    <label for="redlink">Hyperlink redirection link </label>
                                    <input type="text" required class="form-control" placeholder="enter the hyperlink redirection link"
                                        name="redlink" id="redlink" value="">
                                </div>

                                <input type="submit" name="addlinksbtn" class="btn btn-success btn-block"
                                    value="Add Links to the resource column">
                            </form>

                        </div>


                    </fieldset>

                </div>
                <br><br>
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

$("#home").hide();
$("#main").hide();
if (window.location.hash.substr(1) == "home") {
    $("#home").show();
} else if (window.location.hash.substr(1) == "main") {
    $("#main").show();
}
$("#addresourcesbtn").click(() => {
    $("#main").hide();
    $('#home').show();
})
$("#addlinksbtn").click(() => {
    $("#home").hide();
    $('#main').show();
})


$(function() {
    setTimeout(function() {
        $('.alert').alert('close');
    }, 4000)
})

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

</script>
