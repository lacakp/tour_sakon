<?php
require('header.php');
?>
<script>
    function signin() {
        var email = $("#emailInput").val();
        var pwd = $("#passwordInput").val();
        $("#msgErrorEmail").text("");
        $("#msgErrorPassword").text("");

        if (email == "") {
            $("#msgErrorEmail").text("กรุณาป้อนชื่อผู้ใช้");
            $("#emailInput").focus();
        } else if (pwd == "") {
            $("#msgErrorPassword").text("กรุณาป้อนรหัสผ่าน");
            $("#passwordInput").focus();
        } else {

            $.ajax({
                method: "post",
                url: "./php/login.php",
                data: {
                    email: email,
                    password: pwd
                }
            }).done(function(msg) {
                alert(msg);
                if (msg == "NotFound") {
                    $("#msgError").text("ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");
                } else if (msg == "PASS") {
                    location.replace("index.php")
                }


            });
        }
    }
</script>

<link rel="stylesheet" href="./assets/css/login.css">


<!-- <form>
    <h1 class="h3 mb-2 font-weight-normal">เข้าสู่ระบบ</h1>
    <div id="msgError" style="color: red; text-align: center"></div>
    <div class="form-floating">
        <input type="text" name="username" id="emailInput" class="form-control" placeholder="Username" required autofocus>
        <label for="emailInput">Username</label>
        <div id="msgErrorUsername" style="color: red;"></div>
    </div>
    <div class="form-floating">
        <input type="password" name="password" id="passwordInput" class="form-control" placeholder="Password" required>
        <label for="passwordInput">Password</label>
        <div id="msgErrorPassword" style="color: red;"></div>
    </div>
    <br />
    <button class="w-100 btn btn-lg btn-primary btn-block" type="button" onclick="signin()">Sign in</button>
    <br /><br />
    <div><center><a href="signup.php">ลงทะเบียนใหม่</a></center></div>
</form> -->


<div class="section-login">

    <section class="form-signin">
        <form>

            <img class="mb-4 align-center" src="assets/images/main.jpg" alt="" width="auto" height="400">

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" name="email" id="emailInput" class="form-control" placeholder="name@example.com">
                <label for="emailInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                <label for="passwordInput">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </section>

</div>

<?php
require('footer.php');
?>