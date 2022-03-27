<?php 
    require_once('./php/connectdb.php');
	require "./header.php";
    if(!isset($_GET['id'])){
        header("location: ./");
        exit();
    }
    $sql = "SELECT * FROM tb_user WHERE user_id = '".$_GET['id']."' ";
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
                <h1 class="mb-5"> edit profile </h1>
                <h3>แก้ไข profile</h3>
                <form class="row gy-4" action="php/profile-update.php" method="POST">
                    <div class="col-md-12">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name" nameholder="ชื่อ" value="<?php echo $row['name'] ?>"required>
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">email</label>
                        <textarea type="text" class="form-control" id="email" name="email"  nameholder="email" required><?php echo $row['email'] ?></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="address" class="form-label">address</label>
                        <textarea type="text" class="form-control" id="address" name="address" rows="4" nameholder="ที่อยู่" required><?php echo $row['address'] ?></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="bdate" class="form-label">birthday</label>
                        <textarea type="text" class="form-control" id="bdate" name="bdate"  nameholder="วันเกิด" required><?php echo $row['bdate'] ?></textarea>
                    </div>
                    
                    
                  
                  
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" >
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
                    </div>
                </form>
                <a href="./profile.php">ย้อนกลับ</a>
            </div>  
        </div>
    </div>

    <!-- Javascript -->
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>