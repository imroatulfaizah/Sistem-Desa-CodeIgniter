<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Administrator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url().'assets/login/images/icons/favicon.ico' ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/bootstrap/css/bootstrap.min.css' ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css' ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css' ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/animate/animate.css' ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/css-hamburgers/hamburgers.min.css' ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/animsition/css/animsition.min.css' ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/select2/select2.min.css' ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/daterangepicker/daterangepicker.css' ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/css/util.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/css/main.css' ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="<?php echo base_url().'Login/auth' ?>" method="POST">
					<span class="login100-form-title p-b-33">
						Login Admin
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Contoh username : admin123">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password harus diisi">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="text-center">
						<br>
						<span class="txt1">
							Copyright Desa Kebonagung 2019
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/jquery/jquery-3.2.1.min.js' ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/animsition/js/animsition.min.js' ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/bootstrap/js/popper.js' ?>"></script>
	<script src="<?php echo base_url().'assets/login/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/select2/select2.min.js' ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/daterangepicker/moment.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/login/vendor/daterangepicker/daterangepicker.js' ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/countdowntime/countdowntime.js' ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/js/main.js' ?>"></script>

</body>
</html>