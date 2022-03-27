<?php
require_once('./connectdb.php');
if (isset($_POST['submit'])) {

	$place = mysqli_real_escape_string($conn, $_POST['place']);
	$price = $_POST['price'];
	$count_people = $_POST['count_people'];
	$image = mysqli_real_escape_string($conn, $_POST['image']);
	$detail = mysqli_real_escape_string($conn, $_POST['detail']);

	$sql = "insert into tb_package (place, price, date, count_people, image, detail) values('" . $place . "',
	'" . $price . "','" . date("Y-m-d H:i:s") . "','" . $count_people . "','" . $image . "','" . $detail . "');";

	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo '<script> alert("เพิ่มข้อมูลเสร็จเรียบร้อย")</script>';
		header('Refresh:0; url= ../');
	} else {
		echo '<script> alert("เพิ่มข้อมูลไม่สำเร็จ")</script>';
		header('Refresh:0; url= ../package-form-create.php');
	}
}
mysqli_close($conn);
