<?php 

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tour_db";
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  /** error handle */
  if (mysqli_connect_error()) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูล MySQL ได้: " . mysqli_connect_error();
    exit();
  }
  date_default_timezone_set('Asia/Bangkok');
?>