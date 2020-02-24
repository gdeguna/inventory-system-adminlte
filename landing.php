<?php

require_once("./process/Users.php");

if(isset($_POST['login'])){

	$user = new Users();
	$payload = [
			"username" => $_POST['email'],
			"email" => $_POST['email']
		];

	$query = $user->login($payload);
	$data = $query->fetch_assoc();

	// jika user terdaftar
    if($data){
        // verifikasi password
        if(password_verify($_POST['password'], $data["password"])){
            // buat Session
            session_start();
            if($data['levels']=="Admin"){
			// buat session login dan username
            	$_SESSION["user"] = $data;
				$_SESSION['username'] = $username;
				$_SESSION['levels'] = "Admin";
				// alihkan ke halaman dashboard admin
				header("location:index.php");
 
			// cek jika user login sebagai pegawai
			}else if($data['levels']=="Karyawan"){
				// buat session login dan username
				$_SESSION["user"] = $data;
				$_SESSION['username'] = $username;
				$_SESSION['levels'] = "Karyawan";
				// alihkan ke halaman dashboard pegawai
				header("location:index.php");
			 
			// cek jika user login sebagai pengurus
			}else if($data['levels']=="Super Admin"){
				// buat session login dan username
				$_SESSION["user"] = $data;
				$_SESSION['username'] = $username;
				$_SESSION['levels'] = "Super Admin";
				// alihkan ke halaman dashboard pengurus
				header("location:index.php");
				$hiddendashboardicon = "";
			 
			}else{
			 
				// alihkan ke halaman login kembali
				header("location:landing.php?pesan=gagal");
			}
            exit;
        }

    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inventory Management | Login</title>
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
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" action="" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter username or email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="register.php" class="txt2">
								Daftar Akun Baru!
							</a>
						</div>
					</div>
<!-- 					<div class="form-group">
		                <label for="username">Username</label>
		                <input class="form-control" type="text" name="email" placeholder="Username atau email" />
		            </div>
		            <div class="form-group">
		                <label for="password">Password</label>
		                <input class="form-control" type="password" name="password" placeholder="Password" />
		            </div> -->


<!-- 					<div class="container-login100-form-btn">
						<a href="index.php" class="login100-form-btn">
							Login
						</a>
					</div> -->
					<input type="submit" class="login100-form-btn" name="login" value="Masuk" />
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

</body>
</html>