<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sistem Pembayaran Air</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>vendor/login/images/water-drop.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/login/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url('assets/'); ?>vendor/login/images/login.png" style="width: 300px; height: 350px;" alt="IMG">
				</div>

				<?= $this->session->flashdata('message'); ?>

				<form class="login100-form validate-form" method="post" action="<?= base_url('AuthLogin'); ?>">
					<h4 align="center">
						Sistem Pembayaran Air<br>
						<h2 align="center"><b>CLUSTER ANDALUS</b></h2>
					</h4><br><br>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" id="username" name="username" placeholder="Username/Nomor Rumah" value="<?= set_value('username'); ?>">
						<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" href="<?= base_url('AuthLogin/register'); ?>">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn">
						<a class="txt2" href="<?= base_url('AuthLogin/register'); ?>">
							Registrasi Akun
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="<?= base_url('assets/'); ?>vendor/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/'); ?>vendor/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/'); ?>vendor/login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/'); ?>vendor/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/'); ?>vendor/login/js/main.js"></script>

</body>

</html>