<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	

	<link rel="stylesheet" href="plugins/toastr/toastr.min.css">

	<link rel="stylesheet" href="./assets/css/style.css">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
	<!-- ============================ NavbarBand ==================================== -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">หน้าหลัก</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav me-auto mb-2 mb-lg-0">

					
					


					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ตรวจสอบสถานะ</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">การจอง</a>
							<a class="dropdown-item" href="#">ใบเสร็จ</a>
						</div>
					</li> -->


					<?php session_start(); ?>

					<?php
					if (isset($_SESSION['UserID']) && $_SESSION['status'] == 0) {
					?>
						<li class="nav-item">
						<a class="nav-link" href="rent.php">การจองของฉัน<span class="sr-only"></span></a>
						</li>
					<?php
					}
					?>


					<?php
					if (isset($_SESSION['UserID']) && $_SESSION['status'] == 1) {
					?>
						<li class="nav-item">
							<a class="nav-link" href="./package.php"> Package Management </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./admin-order.php"> admin order </a>
						</li>
					<?php
					}
					?>

					<li class="nav-item">
						<a class="nav-link" href="./all-package.php"> ทัวร์ทั้งหมด </a>
					</li>

					<?php
					if (!isset($_SESSION['UserID'])) {
					?>
						<li class="nav-item">
							<a class="nav-link" href="./signin.php"> เข้าสู่ระบบ </a>

						</li>

						<li class="nav-item">
							<a class="nav-link" href="./signup.php">สมัครสมาชิก</a>
						</li>
					<?php
					} else {
					?>
						<li class="nav-item">
							<a class="nav-link" href="./profile.php">บัญชีของฉัน</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="signout.php">ออกจากระบบ</a>
						</li>
					<?php
					}
					?>




				</ul>

				
			</div>
		</div>
	</nav>

	<script>
		function redirect($url) {

			header('Location: '.$url);

		}
	</script>
	<!-- ============================ NavbarBand ==================================== -->
	<main>