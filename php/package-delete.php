<?php 

    require_once('./connectdb.php');
    $sql = "DELETE FROM tb_package WHERE tb_package.package_id = ".$_GET['id']." ";
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเรียบร้อย")</script>';
        header('Refresh:0; url= ../package.php');
    } else {
        echo '<script> alert("เกิดข้อผิดพลาด ลบข้อมูลไม่ได้")</script>';
        header('Refresh:0; url= ../package.php');
    }
    mysqli_close($conn);
