
<?php 
require_once('./connectdb.php');

if (isset($_POST['submit'])) {
    $id =  $_POST['id'];
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);

	$sql = "UPDATE tb_user SET name='".$name."',
	email = '".$email."',
	address = '".$address."'
	WHERE user_id = '".$id."' ";
	
	$result = mysqli_query($conn, $sql);
	

	if ($result) {
		echo $result.'<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
		header('Refresh:0; url= ../profile.php');
	} else {
		echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
		header('Refresh:0; url= ../profile.php');
	}
}
mysqli_close($conn);

?>