<?php

session_start();
include("connection.php");
if (isset($_POST['submit'])) {
  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    $password = hash('sha256',$password);
    $sql = "SELECT *FROM admins WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($link,$sql);
    $count= mysqli_num_rows($result);
    if ($count != 1) {
      $resultmessage = "<div class='alert alert-danger'> <a class='close' data-dismiss='alert'>&times;</a>Wrong Username or Password</div>";

    }else{

      echo '<script>window.open("dashboard.php","_self")</script>';
      $_SESSION['lastlogin']= time();
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $_SESSION['username'] = $row['username'];
      $_SESSION['userid'] = $row['id'];
      $_SESSION['password'] = $row['password'];

    }
  }else{
    $resultmessage = "<div class='alert alert-warning'> <a class='close' data-dismiss='alert'>&times;</a>Username and Password are required</strong></div>";
  }

}
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login</title>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jquery ui -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.css">
    <script  src="	https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.css">
    <script  src="	https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js"></script>

    <!-- google fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <!--  AOS LINKS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.css">
<script  src="	https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js"></script>

<style media="screen">

.loginform{
  margin-top: 200px;
  border: 1px solid black;
  margin-bottom: 70px;
  padding: 40px;
  border-radius: 5px;
  border-color: purple;
}
.forgot{
  text-decoration: none;
}


</style>

  </head>
  <body>
        <div class="col-md-offset-4 col-md-5 loginform">
          <h2 style="color: purple"> <u>Admin Login:</u> </h2> <br>
          <br>
          <?php echo $resultmessage; ?>
          <form id="loginform" method="post">

              <div class="input-group">

                <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                <input type="text" name="username" class="form-control" placeholder="Enter the username" value="">



              </div>
              <br>

              <div class="input-group">
                <span class='input-group-addon'> <i class='glyphicon glyphicon-lock'></i> </span>
                <input type="password" name="password" class="form-control" placeholder="Enter the password" value="">
                <br>
              </div>
              <br>
              <br>
              <input type="submit" class="btn btn-success btn-block" name="submit" value="Login">
              <br>
              <a class="forgot">Forgot Password ?  <b>Contact ADMIN</b> </a>
          </form>

        </div>

  </body>
</html>
