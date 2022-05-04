<?php
// $link = mysqli_connect("localhost","root","Sunil@123","design");
 $link = mysqli_connect("localhost","u221392219_ilsamp","Drivanmutis@123","u221392219_ilsamp");



if (mysqli_connect_error()) {
  die("Error : unable to connect to database : ".mysqli_connect_error());
}

$groupByOrderByQuery = "SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))";
$result1 = mysqli_query($link , $groupByOrderByQuery);



$resourcecolumn = "CREATE TABLE IF NOT EXISTS resourcecolumn(rescolumnid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          columnname VARCHAR(500) NOT NULL,
          datetime VARCHAR(100) NOT NULL
)";
mysqli_query($link,$resourcecolumn);

$hyperlinks = "CREATE TABLE IF NOT EXISTS hyperlinks(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                hyperlinkname VARCHAR(1000) NOT NULL,
                redirectionlink VARCHAR(1000) NOT NULL,
                resourceid INT(10) NOT NULL,
                FOREIGN KEY (resourceid) REFERENCES resourcecolumn(rescolumnid)
)";
mysqli_query($link,$hyperlinks);



$announcement = "CREATE TABLE IF NOT EXISTS announcements(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          announcementname VARCHAR(500) NOT NULL,
          category VARCHAR(1000) NOT NULL,
          timestamp VARCHAR(1000) NOT NULL,
          announcement TEXT NOT NULL,
          datetime VARCHAR(100) NOT NULL
)";
mysqli_query($link,$announcement);

$hashtags = "CREATE TABLE IF NOT EXISTS hashtags(hashtagid INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
            hashtagname VARCHAR(50) NOT NULL ,
            redirectionlink TEXT ,
            annid INT(4) NOT NULL ,
            FOREIGN KEY (annid) REFERENCES announcements(id) )";

mysqli_query($link,$hashtags);


$admin = "CREATE TABLE IF NOT EXISTS admins(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR(40) NOT NULL,
          password VARCHAR(64) NOT NULL,
          datetime VARCHAR(100) NOT NULL,
          addedby VARCHAR(50) NOT NULL
)";
mysqli_query($link,$admin);


$sql = "SELECT *FROM admins";
$result = mysqli_query($link,$sql);
$time = time();
$datetime = date("M-d-Y  h:i:s:a",$time);

if (mysqli_num_rows($result) == 0) {
  $password = "admin@123";
  $password = filter_var($password,FILTER_SANITIZE_STRING);
  $password = mysqli_real_escape_string($link,$password);
  $password = hash('sha256',$password);
  $username = "admin";
  $sql = "INSERT INTO admins(username,password,datetime,addedby) VALUES('$username','$password','$datetime','phpmyadmin')";
  $result = mysqli_query($link,$sql);
}

 ?>
