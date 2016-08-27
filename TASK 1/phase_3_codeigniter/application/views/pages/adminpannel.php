<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Pannel</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo site_url('img/favicon.ico'); ?>" type="image/x-icon" />
		<link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" href="<?php echo site_url('css/bootstrap-theme.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('css/style2.css'); ?>">
	</head>
	<body>
			<div class="container">
				<div class="name">
					<strong>NEWS.COM</strong>
					<a href="<?php echo site_url('index.php/login/logout'); ?>"><button class="btn btn-default button-logout"><strong>Logout</strong></button></a>
				</div>
				<div class="row admin_pannel_head">
					</div>
				<div class="admin_pannel_head">
					<h2><strong>ADMIN PANNEL</strong></h2>

					<h3>Welcome To Admin Page. </h3>
				</div>
				<div class="row">
					<a href="<?php echo site_url('index.php/login/create'); ?>"><button class="btn btn-default button-admin-pannel"><strong>NEW ARTICLE</strong></button></a>
				</div>
				<div class="row">
					<a href="<?php echo site_url('index.php/login/edit_pannel'); ?>"><button class="btn btn-default button-admin-pannel"><strong>EDIT ARTICLE</strong></button></a>
				</div>
			</div>

		<script src="<?php echo site_url('js/jquery.min.cs');?>"></script>
		<script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>
		</body>
	</html>