<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('back-end') ?>/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= base_url('back-end') ?>/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?= base_url('back-end') ?>/assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('back-end') ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('back-end') ?>/assets/css/azzara.min.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<br>
			<center>
			<img src="<?= base_url('logo') ?>/logo.png" width="80px"
			</center>
			<br>
			<br>
			<div class="text-center">
				<a href="<?= base_url('home') ?>" style="font-size: 25px; font-weight:bold;">WEB KAB CIREBON</a>
			</div>
			<h3 class="text-center">Silahkan Login</h3>
			<?php
			session();
			$validasi= \Config\Services::validation();
			
			// Display flashdata error if exists
			if(session()->getFlashdata('error')): ?>
				<div class="alert alert-danger text-center"><?= session()->getFlashdata('error') ?></div>
			<?php endif; ?>
			
			<?php echo form_open('login') ?>
			<div class="login-form">

				<div class="form-group">
					<label><b>Username</b></label>
					<input id="username" name="username" type="text" class="form-control" value="<?= old('username') ?>">
					<p class="text-danger"><?= $validasi->getError('username') ?></p>
				</div>

				<div class="form-group">
					<label><b>Level</b></label>
					<select name="level" class="form-control">
						<option value="1" <?= old('level') == '1' ? 'selected' : '' ?>>Admin</option>
						<option value="2" <?= old('level') == '2' ? 'selected' : '' ?>>User</option>
					</select>
					<p class="text-danger"><?= $validasi->getError('level') ?></p>
				</div>

				<div class="form-group">
					<label><b>Password</b></label>
					<a href="#" class="link float-right">Forget Password ?</a>
					<div class="position-relative">
						<input id="password" name="password" type="password" class="form-control" required>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
						<p class="text-danger"><?= $validasi->getError('password') ?></p>
					</div>
				</div>

				<div class="form-group form-action-d-flex mb-3">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="rememberme">
						<label class="custom-control-label m-0" for="rememberme">Remember Me</label>
					</div>
					<button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Login</button>
				</div>
			</div>
			<?php echo form_close() ?>

		</div>
	</div>
	<script src="<?= base_url('back-end') ?>/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url('back-end') ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url('back-end') ?>/assets/js/core/popper.min.js"></script>
	<script src="<?= base_url('back-end') ?>/assets/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url('back-end') ?>/assets/js/ready.js"></script>
</body>
</html>