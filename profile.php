<?php
require "header.php";
require "./php/connectdb.php";
$id = $_SESSION['UserID'];

$strSQL = "select name,email,address,bdate from tb_user where user_id=" . $id . ";";
$result = mysqli_query($conn, $strSQL);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center"> <button
                class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPV9S.png" height="100"
                    width="100" /></button> <span class="name mt-3"> name : <?php  echo $row['name']?></span> <span
                class="idd"> email : <?php  echo $row['email']?></span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span
                    class="idd1"> address : <?php  echo $row['address']?></span> <span><i class="fa fa-copy"></i></span> </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">birthday<span
                        class="follow"> <?php  echo $row['bdate']?></span></span> </div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div>
            
        </div>
    </div>
</div>