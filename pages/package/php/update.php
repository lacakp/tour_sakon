
<?php 
require_once('../../../php/connectdb.php');

if (isset($_POST['submit'])) {
	$id =  $_POST['id'];
	$place = mysqli_real_escape_string($conn, $_POST['place']);
	$price = $_POST['price'];
	$count_people = $_POST['count_people'];
	$image = mysqli_real_escape_string($conn, $_POST['image']);
	$detail = mysqli_real_escape_string($conn, $_POST['detail']);

	$sql = "UPDATE tb_package SET place='".$place."',
	price = '".$price."',
	count_people = '".$count_people."',
	image = '".$image."',
	detail = '".$detail."'
	WHERE package_id = '".$id."' ";
	
	$result = mysqli_query($conn, $sql);
	

	if ($result) {
		echo $result.'<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
		header('Refresh:0; url= ../');
	} else {
		echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
		header('Refresh:0; url= ../form-update.php');
	}
}
mysqli_close($conn);

?>
