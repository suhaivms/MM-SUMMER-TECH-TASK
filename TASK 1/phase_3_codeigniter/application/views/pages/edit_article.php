<!DOCTYPE html>
<html>
<head>
	<title>Edit Article</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo site_url('img/favicon.ico'); ?>" type="image/x-icon" />
		<link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" href="<?php echo site_url('css/bootstrap-theme.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('css/style2.css'); ?>">
</head>
<body>
	<div class="container">
		<div class="name">
				
				<h5><strong>NEWS.COM</strong></h5>
				<a href="<?php echo site_url('index.php/login/logout'); ?>"><button class="btn btn-default button-logout"><strong>Logout</strong></button></a>
		</div>
		<?php foreach ($recentarticles as $news) : ?>
			<div class="row">
				<a href="<?php echo site_url('index.php/login/edit/'.$news['id']); ?>"><h4><?php echo $news['title']; ?></h4></a>
			</div>
		<?php endforeach ; ?>
	</div>
</body>
</html>