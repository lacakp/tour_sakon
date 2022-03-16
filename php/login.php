<?php
    require "connectdb.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $salt = "1234567890";
    $hash_password = hash_hmac('sha256', $password, $salt);

    $strSQL = "select * from tb_user where email='";
    $strSQL = $strSQL . $email . "' and password='";
    $strSQL = $strSQL . $hash_password . "';";
    $result = mysqli_query($conn, $strSQL);

    if (mysqli_num_rows($result) == 0) {
        echo "NotFound";
    } else {
        session_start();
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['UserID'] = $row['user_id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['status'] = $row['status'];

        echo "PASS";
    }

    mysqli_free_result($result);
    mysqli_close($conn);




