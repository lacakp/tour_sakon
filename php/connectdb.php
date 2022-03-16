<?php 

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tour_db";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  /** error handle */
  if (mysqli_connect_errno()) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูล MySQL ได้: " . mysqli_connect_error();
    exit();
  }
  date_default_timezone_set('Asia/Bangkok');
?>