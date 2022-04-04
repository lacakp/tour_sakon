<?php
require_once('./connectdb.php');
session_start();
$package_id = $_GET['id'];
$user_id = $_SESSION['UserID'];

// SELECT * FROM `tb_order` WHERE user_id = 1 and package_id=12 and status='cart'
$sql = "select * from tb_order where user_id= ". $user_id ." and package_id= ".$package_id." and status= 'cart'; ";
$isExist = mysqli_query($conn, $sql);
// echo (mysqli_num_rows($isExist));

if (mysqli_num_rows($isExist) != 0) {
    echo '<script> alert("สั่งจองไม่ได้ แพคเกจอยู่ในสถานะสั่งจอง")</script>';
    header('Refresh:0; url= ../');
} else {
    $sql = "insert into tb_order (user_id,package_id) values('" . $user_id . "','" . $package_id . "'); ";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo '<script> alert("สั่งจองเรียบร้อย")</script>';
    header('Refresh:0; url= ../');
} else {
    echo '<script> alert("เพิ่มข้อมูลไม่สำเร็จ")</script>';
    header('Refresh:0; url= ../');
}

}
 

mysqli_close($conn);
