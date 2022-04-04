<?php
require "header.php";
require "./php/connectdb.php";
$id = $_SESSION['UserID'];
//$sql = "select * from tb_order  user_id= ". $user_id ." and package_id= ".$package_id." and status= 'cart'; ";
// $strSQL = "select date,user_id,package_id,status from tb_order where user_id=" . $id . ";";

$strSQL = "SELECT * FROM tb_order, tb_package WHERE tb_order.package_id = tb_package.package_id and tb_order.user_id = " . $id . ";";
// $isExist = mysqli_query($conn, $sql);

$result = mysqli_query($conn, $strSQL);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mb-5"> ตะกร้าทัวร์ของฉัน </h1>
                
                <span class="float-end">มีข้อมูลสินค้าทั้งหมด <?php echo mysqli_num_rows($result) ?> รายการ </span>
            </div>
            <div class="col-md-10">
                <div class="table-responsive">
                    <?php if (mysqli_num_rows($result) > 0) : ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center text-light bg-dark">
                                    <th>#</th>
                                    <th>ชื่อแพคเกจ</th>
                                    <th>รายละเอียด</th>
                                    <th>ราคา</th>
                                    <th>จำนวนคน</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php ($row = mysqli_fetch_assoc($result));
                                do {
                                ?>

                                    <tr class="text-center">
                                        <td> <?php echo $row['package_id'] ?> </td>
                                        <td> <?php echo $row['place'] ?> </td>
                                        <td> <?php echo $row['date'] ?> </td>
                                        <td> <?php echo $row['price'] ?> </td>
                                        <td> <?php echo $row['count_people'] ?> </td>
                                        <td> <?php echo $row['status'] ?> </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['package_id'] ?>" style="width: 105px;"> รายละเอียด </button>
                                                <a href="./package-form-update.php?id=<?php echo $row['package_id'] ?>" class="btn btn-warning"> แก้ไข </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="my-modal<?php echo $row['package_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">รายละเอียดสินค้า</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="<?php echo $row['image'] ?>" alt="" srcset="" width="450px" height="300px">
                                                    <p class="mt-3">ชื่อสินค้า: <?php echo $row['place'] ?></p>
                                                    <p>ราคา: <?php echo $row['price'] ?> บาท</p>
                                                    <p>จำนวน: <?php echo $row['count_people'] ?> รายการ</p>
                                                    <p>วันที่: <?php echo $row['date'] ?></p>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } while ($row = mysqli_fetch_assoc($result)); ?>

                            </tbody>
                        </table>
                    <?php
                    else :
                        echo "<p class='mt-5'>ไม่มีข้อมูลในฐานข้อมูล</p>";
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php mysqli_close($conn) ?>
</body>