<?php

require_once("./process/Users.php");

if(isset($_POST['register'])){

    $user = new Users();
    $payload = [
        'nama_karyawan' => $_POST['nama_karyawan'],
        'no_tlp' => $_POST['no_tlp'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'email' => $_POST['email'],
        // 'avatar' => $_FILES['avatar']
        
    ];

    // eksekusi query untuk menyimpan ke database
    $create = $user->create($payload);;

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($create == TRUE) 
    header("location: landing.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inventory Management | Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign Up
					</span>
				</div>

				<form class="login100-form validate-form" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Tolong isi nama dengan benar.">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama_karyawan" placeholder="Masukkan nama">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Tolong isi Username dengan benar">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukkan username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Isi email dengan benar">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter username or email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Isi nomor dengan benar">
						<span class="label-input100">No Telepon</span>
						<input class="input100" type="text" name="no_tlp" placeholder="Masukkan nomor anda">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
					<!-- <div class="input100 validate-input m-b-18"> -->
                       <!--  <span class="label-input100" for="user_pict">Avatar</span> -->
                        <!-- <input class="" type="file" class="form-control-file" name="user_pict" id="user_pict"> -->
                    <!-- </div> -->

<!-- 					<div class="container-login100-form-btn">
						<a href="index.php" class="login100-form-btn">
							Login
						</a>
					</div> -->
					<input type="submit" class="login100-form-btn" name="register" value="Daftar" />
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<style type="text/css">
		input.input100 {
  		height: 19px;
}
		.login100-form {
		  width: 100%;
		  height: 500px;
		  display: -webkit-box;
		  display: -webkit-flex;
		  display: -moz-box;
		  display: -ms-flexbox;
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: space-between;
		  padding: 43px 88px 93px 190px;
}

		.wrap-login100 {
		  width: 500px;
		  height: 600px;
		  background: #fff;
		  border-radius: 10px;
		  overflow: hidden;
		  position: relative;
}
	</style>

</body>
</html>