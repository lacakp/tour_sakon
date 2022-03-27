<!DOCTYPE html>

<?php 
	require "header.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add package</title> 
    <!-- favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <!-- Css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mb-5"> Add package(From Submit) </h1>
                <h3>เพิ่มแพคเกจ</h3>
                <form class="row gy-4" action="php/package-create.php" method="POST">
                    <div class="col-md-12">
                        <label for="place" class="form-label">ชื่อสถานที่</label>
                        <input type="text" class="form-control" id="place" name="place" placeholder="ชื่อสถานที่" required>
                    </div>
                    <div class="col-md-12">
                        <label for="detail" class="form-label">รายละเอียด</label>
                        <textarea type="text" class="form-control" id="detail" name="detail" rows="5" placeholder="รายละเอียด" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">ราคา</label>
                        <input type="number" class="form-control" id="price" name="price" min="0" max="999999" placeholder="ราคา" required>
                    </div>
                    <div class="col-md-6">
                        <label for="count_people" class="form-label">จำนวนคน</label>
                        <input type="number" class="form-control" id="count_people" name="count_people" min="0" max="999999" placeholder="จำนวน" required>
                    </div>
                    <div class="col-md-12">
                        <label for="image" class="form-label">รูปภาพ</label>
                        <input type="text" class="form-control" id="image" name="image" placeholder="url รูปภาพ">
                    </div>
                   
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
                    </div>
                </form>
                <a href="./package.php">ย้อนกลับ</a>
            </div>  
        </div>
    </div>

    <!-- Javascript -->
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>