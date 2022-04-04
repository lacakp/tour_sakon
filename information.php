<?php
require "header.php";

require "./php/connectdb.php";
$id =  $_GET['id'];

$strSQL = "select place,price,date,count_people,image,detail from tb_package where package_id=" . $id . ";";
$result = mysqli_query($conn, $strSQL);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>

<hr>
<h2 class="text-center">รายละเอียดเพิ่มเติม</h2>
<hr>




<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
        <h1> <br>
            <div class=" image d-flex flex-column justify-content-center align-items-center">

                <button class="btn btn-secondary"> </button> <span class="place mt-3"> สถานที่ : <?php echo $row['place'] ?></span>

                <br><img src="<?php echo $row['image'] ?>" alt="" srcset="" width="700px" height="500px">
                <div class="col-md-6">

                    <br><span class="idd"> ราคาทัวร์ : <span class="price"><?php echo $row['price'] ?></span>
                        <br>
                        <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1"> วันที่และเวลา: <?php echo $row['date'] ?></span> <span><i class="fa fa-copy"></i></span> </div>
                        <br>
                        <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">จำนวนคน<span class="follow"> <?php echo $row['count_people'] ?></span></span> </div>
                        <br>



                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">รายละเอียด<span class="follow">
                            <p><br><?php echo $row['detail'] ?></p>
                        </span></span> </div>
                <?php
                if (isset($_SESSION['UserID'])) { ?>

                    <br />

                    <a class="btn btn-primary" href="./php/order-create.php?id=<?php echo $id ?>"> จอง </a>

                <?php }; ?>
            </div>
        </h1>
    </div>
</div>