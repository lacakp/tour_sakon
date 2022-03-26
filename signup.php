<?php
require "header.php"
?>

<script>
	function signup() {
		// อ่านค่าจาก inputbox มาไว้ในตัวแปร
		var email = $("#inputEmail").val();
		var name = $("#inputName").val();
		var pwd1 = $("#inputPassword1").val();
		var pwd2 = $("#inputPassword2").val();
		// clear ข้อความ ณ ตำแหน่ง msgError
		$("#msgError").text("");
		$("#msgErrorUsername").text("");
		$("#msgErrorName").text("");
		$("#msgErrorPassword1").text("");
		$("#msgErrorPassword2").text("");

		if (name == "") {
			$("#msgErrorNamee").text("กรุณาพิมพ์ชื่อ");
			$("#inputName").focus();
		} else if (email == "") {
			$("#msgErrorPassword1").text("กรุณาพิมพ์อีเมล");
			$("#inputEmail").focus();
		} else if (pwd1 == "") {
			$("#msgErrorPassword1").text("กรุณาพิมพ์รหัสผ่าน");
			$("#inputPassword1").focus();
		} else if (pwd2 == "") {
			$("#msgErrorPassword2").text("กรุณายืนยันรหัสผ่าน");
			$("#inputPassword2").focus();
		} else if (pwd1 != pwd2) {
			$("#msgError").text("รหัสผ่านไม่เหมือนกัน");
		} else {
			// ส่งค่าแบบ post ไปที่ web server ไฟล์ชื่อ register.php
			$.ajax({
				method: "post",
				url: "./php/register.php",
				data: {
					name: name,
					email: email,
					password: pwd1
				}
			}).done(function(msg) { //รับค่า response กลับมาจาก web server
				alert(msg)
				if (msg == "ERROR") {
					$("#msgErrorUsername").text("เกิดข้อผิดพลาด");
				} else if (msg == "Duplicated") {
					$("#msgErrorUsername").text("ชื่อผู้ใช้ซ้ำ");
				} else if (msg == "COMPLETE") {
					location.replace("index.php") // ไปหน้า signin.php
				}
			});
		}
	}
</script>

<link rel="stylesheet" href="./assets/css/login.css">
<div class="section-login">
	<section class="form-signin"> 
		<form>

			<div>
				<h1 class="h3 mb-2 font-weight-normal">ลงทะเบียนใหม่</h1>
				<div id="msgError" style="color: red; text-align: center;"></div>
			</div>

			<div class="form-floating">
				<input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required autofocus>
				<label for="inputName">Name</label>
				<div id="msgErrorName" style="color: red;"></div>
			</div>
			<div class="form-floating">
				<input type="text" name="Email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
				<label for="inputEmail">Email</label>
				<div id="msgErrorEmail" style="color: red;"></div>
			</div>
			<div class="form-floating">
				<input type="password" name="password1" id="inputPassword1" class="form-control" placeholder="Password" required>
				<label for="inputPassword">Password</label>
				<div id="msgErrorPassword1" style="color: red;"></div>
			</div>
			<div class="form-floating">
				<input type="password" name="password2" id="inputPassword2" class="form-control" placeholder="Password" required>
				<label for="inputPassword">Confirm Password</label>
				<div id="msgErrorPassword2" style="color: red;"></div>
			</div>

			<button class="w-100 btn btn-lg btn-primary" onclick="signup()">Sign up</button>
			<p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
		</form>

	</section>
</div>


<?php
require "footer.php";

?>