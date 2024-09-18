<?php 
include "konek.php";
session_start();

if (isset($_POST['submit'])) {
    $admin = $_POST['admin'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tb_admin WHERE admin='$admin' AND password=$password ";
    $result = mysqli_query($konek, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['admin'] = $row['admin'];
        $_SESSION['password'] = $row['password'];
     
        header("location: user.php");
        exit();
    
    } else 
    {
        echo "<script>alert('Username atau password anda salah.Silahkan coba lagi')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Absensi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/_login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/_login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/_login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/_login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/_login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/_login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/_login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/_login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/_login/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" action="" class="login100-form validate-form">
                    <span class="login100-form-title p-b-48">
                        <!-- <i class="zmdi zmdi-font"></i> -->
                        <img src="assets/img/pusin.png" width="100">
                    </span>
                    <span class="login100-form-title p-b-26">
                        Pusinfolahta TNI
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    <br>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>


                </form>
			
			</div>
		</div>
	</div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="assets/_login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/_login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/_login/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/_login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/_login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/_login/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/_login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="assets/_login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="assets/_login/js/main.js"></script>


</body>

</html>

ingpo salah dimana @Bintang RPL 2 @Arakbar