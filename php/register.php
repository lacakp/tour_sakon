<?php
    require "connectdb.php";
    //รับข้อมูล
    //เป็นฟังก์ชันสำหรับเลี่ยงการใช้อักขระพิเศษในคำสั่ง sql เช่น เครื่องหมาย " เครื่องหมาย ' เป็นต้น
    //เพื่อให้ได้คำสั่ง sql ที่ปลอดภัยสำหรับการ query หรือปลอดภัยจากการเรียกใช้ฟังก์ชัน mysql_query

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $strSQL = "select * from tb_user where email='" . $email . "';";
    $result = mysqli_query($conn, $strSQL);

    if (mysqli_num_rows($result) == 0) { //จำนวน record เท่ากับ 0 หมายความว่า email ไม่ซ้ำ
        // เข้ารหัส password
        $salt = "1234567890"; // string อะไรก็ได้ ใช้เพื่อรวมกับ password แล้วค่อยเข้ารหัส
        // ฟังก์ชันเข้ารหัส
        $hash_password = hash_hmac('sha256', $password, $salt);

        $strSQL = "insert into tb_user (name, email, password) values ('" . $name . "','". $email . "','" . $hash_password . "');";
        $result = mysqli_query($conn, $strSQL);

        if ($result) {
            echo "COMPLETE"; // ส่งค่ากลับไป client ว่า สมัครสมาชิกเรียบร้อย
        } else {
            echo "ERROR";  // ส่งค่ากลับไปที่ client ว่า สมัครสมาชิกไม่ได้
        }
    } else { //ถ้าไม่เท่ากับ 0 หมายความว่า email ซ้ำ
        echo "Duplicated";
    }




