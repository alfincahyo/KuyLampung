<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/login.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<ul class="header">
						<a href="" style="">KUYLAMPUNG</a>
						</ul>
					</div>
					<div class="col-md-2"></div>
				</div>
				<!--buat 2 kolom-->
				<div class="row" style="margin-top: 10px; box-shadow: -1px 1px 50px 10px black;">
					<div class="col-md-6" style="margin-top: 20px;">
						<ul>
							<a href="#" style="border-bottom: 2px solid white; padding: 10px;">Sign in</a>
						</ul>
						<label class="label control-label">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Masukkan Username">
						<label class="label control-label">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukkan Password">
						<input type="checkbox"><small>remember me?</small>
						<a href="#"><div class="btn btn-info" style="margin-left: 40px;">SIGN IN</div>
					</div>
						<img src="<?=base_url()?>assets/img/tumbnail.jpg">
				</div>	
			<!--tutup-->
		</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>