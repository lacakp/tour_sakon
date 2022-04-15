<?php 

    require_once('./connectdb.php');
    $sql = "DELETE FROM tb_order WHERE tb_order.order_id = ".$_GET['id']." ";
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ยกเลิกเรียบร้อย")</script>';
        header('Refresh:0; url= ../rent.php');
    } else {
        echo '<script> alert("เกิดข้อผิดพลาด ยกเลิกไม่ได้")</script>';
        header('Refresh:0; url= ../rent.php');
    }
    mysqli_close($conn);