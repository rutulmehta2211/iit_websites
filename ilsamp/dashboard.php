<?php

include("headers.php");
include("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:adminlogin.php");
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


      <div id="resources" >
            <h1 style="color:purple;" class="username">EXTERNAL RESOURCES</h1>
            <br>
            <div class="table-responsive">
              <h3>Resources Column Section</h3>
              <br><br>
              <?php
                  $viewquery = "SELECT *FROM resourcecolumn ORDER BY datetime DESC";
                  $result = mysqli_query($link,$viewquery);
                  if(mysqli_num_rows($result) == 0){
                    echo "<span class='text-danger'>No Recource Columns found</span></br>";
                  }else{
               ?>
              <table class="table table-hover table-striped" style=" cursor:pointer;">
                <tr>
                  <th>No</th>
                  <th>Resource Column Name</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                <?php
                  $srno = 0;

                  while ($row = mysqli_fetch_array($result)) {
                    $columnname = $row['columnname'];
                    $datetime = $row['datetime'];
                    $id = $row['rescolumnid'];
                    $srno++;
                  ?>
                <tr>
                  <td><?php echo $srno ?></td>
                  <td style="color:purple;font-weight:bold;"><?php
                  echo $columnname ?></td>
                   <td><?php
                  if (strlen($datetime) > 11) {
                    $datetime = substr($datetime,0,11).'..';
                  }
                  echo $datetime ?></td>
                  <td>
                    <a href="editresource.php?editresourceid=<?php echo $id ?>"> <span class="btn btn-info mt-2">Edit</span> </a>
                  <a onclick="return confirm('Are you sure you want to delete ENTIRE RESOURCE COLUMN?')" href="deleteresource.php?deleteresource=<?php echo $id ?>"> <span class="btn btn-danger mt-2">Delete</span> </a>
                </tr>
                  <?php
                    }
                 ?>
              </table>
            <?php } ?>
            </div>


            <!-- hyperlinks project -->
            <br>
            <div class="table-responsive">
              <h3>Hyperlinks Section</h3>
              <?php
                  $viewquery = "SELECT *FROM hyperlinks INNER JOIN resourcecolumn on hyperlinks.resourceid = resourcecolumn.rescolumnid ORDER BY resourceid ";
                  $result = mysqli_query($link,$viewquery);
                  if(mysqli_num_rows($result) == 0){
                    echo "<span class='text-danger'>No Hyperlinks Found</span></br>";
                  }else{
               ?>
              <br><br>
              <table class="table table-hover table-striped" style=" cursor:pointer;">
                <tr>
                  <th>No</th>
                  <th>For Column </th>
                  <th>Hyperlin name</th>
                  <th>Redirection Link</th>
                  <th>Action</th>
                </tr>
                <?php
                  $srno = 0;

                  while ($row = mysqli_fetch_array($result)) {
                    $columnname = $row['columnname'];
                    $hyperlinkname = $row['hyperlinkname'];
                    $redirectionlink = $row['redirectionlink'];
                    $id = $row['id'];
                    $srno++;
                  ?>
                <tr>
                  <td><?php echo $srno ?></td>
                  <td style="color:purple;font-weight:bold;"><?php
                  echo $columnname ?></td>
                   <td><?php
                   if (strlen($hyperlinkname) > 50) {
                     $hyperlinkname = substr($hyperlinkname,0,50).'..';
                   }
                  echo $hyperlinkname ?></td>
                  <td><?php
                  if (strlen($redirectionlink) > 50) {
                    $redirectionlink = substr($redirectionlink,0,50).'..';
                  }
                 echo $redirectionlink ?></td>
                  <td>
                    <a href="edithyperlink.php?edithyperlinkid=<?php echo $id ?>"> <span class="btn btn-info mt-2">Edit</span> </a>
                  <a onclick="return confirm('Are you sure you want to delete Hyperlink ?')" href="deleteresource.php?deletehyperlink=<?php echo $id ?>"> <span class="btn btn-danger mt-2">Delete</span> </a>

                </tr>
                  <?php
                    }
                 ?>
              </table>
            <?php } ?>
            </div>




      </div>



         <div id="announcements" >
            <h1 style="color:purple;" class="username">ANNOUNCEMENTS</h1>
            <br>
            <div class="table-responsive">
              <?php
                  $viewquery = "SELECT *FROM announcements ORDER BY datetime DESC";
                  $result = mysqli_query($link,$viewquery);
                  if(mysqli_num_rows($result) == 0){
                    echo "<span class='text-danger'>No announcements found</span></br>";
                  }else{
               ?>
              <table class="table table-hover table-striped" style=" cursor:pointer;">
                <tr>
                  <th>No</th>
                  <th>Announcement Name</th>
                  <th>Category</th>
                  <th>Date Time</th>
                  <th>Announcement</th>
                  <th>Action</th>
                </tr>
                <?php
                  $srno = 0;

                  while ($row = mysqli_fetch_array($result)) {
                    $annname = $row['announcementname'];
                    $timestamp = $row['timestamp'];
                    $categroy = $row['category'];
                    $datetime = $row['datetime'];
                    $announcement = $row['announcement'];
                    $id = $row['id'];
                    $srno++;
                  ?>
                <tr>
                  <td><?php echo $srno ?></td>
                  <td style="color:purple;font-weight:bold;"><?php
                  echo $annname ?></td>
                  <td>
                    <?php echo $categroy ?>
                  </td>
                   <td><?php
                  echo $timestamp ?></td>
                  <td>

                  <?php
                   if (strlen($announcement) > 150) {
                     $announcement = substr($announcement,0,150).'..';
                   }
                  echo $announcement ?>

                  </td>
                  <td>
                    <a href="editannouncement.php?editannid=<?php echo $id ?>"> <span class="btn btn-info mt-2">Edit</span> </a>
                  <a onclick="return confirm('Are you sure you want to delete announcement?')" href="deleteannouncement.php?deleteann=<?php echo $id ?>"> <span class="btn btn-danger mt-2">Delete</span> </a>
                </tr>
                  <?php
                    }
                 ?>
              </table>
            <?php } ?>
            </div>




      </div>

       <div id="announcements" >
            <h1 style="color:purple;" class="username">Hashtags</h1>
            <br>
            <div class="table-responsive">
              <?php
                  $viewquery = "SELECT * FROM hashtags INNER JOIN announcements ON hashtags.annid = announcements.id ";
                  $result = mysqli_query($link,$viewquery);
                  if(mysqli_num_rows($result) == 0){
                    echo "<span class='text-danger'>No hashtags found</span></br>";
                  }else{
               ?>
              <table class="table table-hover table-striped" style=" cursor:pointer;">
                <tr>
                  <th>No</th>
                  <th>For Announcement </th>
                  <th>Hashtagname</th>
                  <th>Redirection link</th>
                  <th>Action</th>
                </tr>
                <?php
                  $srno = 0;

                  while ($row = mysqli_fetch_array($result)) {
                    $hashtagname = $row['hashtagname'];
                    $redirectionlink = $row['redirectionlink'];
                    $announcement = $row['announcementname'];
                    $id = $row['hashtagid'];
                    $srno++;
                  ?>
                <tr>
                  <td><?php echo $srno ?></td>
                  <td style="color:purple;font-weight:bold;"><?php
                  echo $announcement ?></td>
                  <td>
                    <?php echo $hashtagname ?>
                  </td>
                   <td><?php
                  echo $redirectionlink ?></td>
                 
                  <td>
                  <a onclick="return confirm('Are you sure you want to delete hashtag?')" href="deleteannouncement.php?deletehash=<?php echo $id ?>"> <span class="btn btn-danger mt-2">Delete</span> </a>
                </tr>
                  <?php
                    }
                 ?>
              </table>
            <?php } ?>
            </div>




      </div>




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
