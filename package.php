<?php 
    require('./php/connectdb.php');
    require('./header.php');

    $sql = "SELECT * FROM tb_package";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mb-5"> Package Page(From Submit) </h1>
                <a href="package-form-create.php" class="btn btn-primary"  >เพิ่มรายการสินค้า</a>
                <span class="float-end" >มีข้อมูลสินค้าทั้งหมด <?php echo mysqli_num_rows($result) ?> รายการ </span>     
            </div>  
            <div class="col-md-10">
                <div class="table-responsive" >
                    <?php if (mysqli_num_rows($result) > 0): ?>
                    <table class="table table-bordered">
                        <thead>
                        <tr class="text-center text-light bg-dark">
                            <th>#</th>
                            <th>ชื่อสินค้า</th>
                            <th>รายละเอียด</th>
                            <th>ราคา</th>
                            <th>จำนวน</th>
                            <th>จัดการ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)):?>
                            <tr class="text-center">
                                <td> <?php echo $row['package_id'] ?> </td>
                                <td> <?php echo $row['place'] ?> </td>
                                <td> <?php echo $row['date'] ?> </td>
                                <td> <?php echo $row['price'] ?> </td>
                                <td> <?php echo $row['count_people'] ?> </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-primary" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#my-modal<?php echo $row['package_id'] ?>" 
                                                style="width: 105px;"> รายละเอียด </button>
                                        <a href="./package-form-update.php?id=<?php echo $row['package_id'] ?>" class="btn btn-warning"> แก้ไข </a>
                                        <a href="./php/package-delete.php?id=<?php echo $row['package_id'] ?>" class="btn btn-danger"> ลบ </a>
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
											<img src="<?php echo $row['image'] ?>" alt="" srcset="" width="200px" height="300px">
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
                        <?php endwhile; ?>
                        </tbody>
                    </table>    
                    <?php 
                        else: 
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
</html>