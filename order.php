<?php 
    if(!isset($_GET['id'])){
        header("location: ./");
        exit();
    }
    $sql = "SELECT * FROM tb_order WHERE order = '".$_GET['id']."' ";
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQLi Procedural style CRUD </title>
    <!-- favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <!-- Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mb-5"> ยืนยันข้อมูล </h1>
                <h3></h3>
                <form class="row gy-4" action="php/admin-update.php" method="POST">
                    <div class="col-md-12">
                        <label for="status" class="form-label">สถานที่</label>
                        <input type="text" class="form-control" id="status" name="status" placeholder="ชื่อแพคเกจ" value="<?php echo $row['status'] ?>"required>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" >
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">ยืนยันข้อมูล</button>
                    </div>
                </form>
                
        </div>
    </div>

    <!-- Javascript -->
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>