<!DOCTYPE html>
<html lang="en">
	<head>
		<title>NEW ARTICLE</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="shortcut icon" href="<?php echo site_url('img/favicon.ico'); ?>" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>" >
        <link rel="stylesheet" href="<?php echo site_url('css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo site_url('css/style.css'); ?>">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 		 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  		<link rel="stylesheet" href="/resources/demos/style.css">
  
		<script>
		$(function(){
			 var date = new Date();
			 var currentMonth = date.getMonth();
			 var currentDate = date.getDate();
			 var currentYear = date.getFullYear();
			 $("#id_date").datepicker({
			 	 minDate: new Date(currentYear, currentMonth, currentDate),
        		 dateFormat: 'yy-mm-dd'
			 });
			 
		});
		</script>



	</head>
	<body>

			<div class="container">
				<div class="name">
					<h5><strong>NEWS.COM</strong></h5>
					<a href="<?php echo site_url('index.php/login/logout'); ?>"><button class="btn btn-default button-logout"><strong>Logout</strong></button></a>
				</div>
				<div class="article-edit">
					<h2><strong>NEW ARTICLE</strong></h2>
				</div>
				<?php echo form_open_multipart('index.php/login/do_upload');?>
			<form method="post" enctype="multipart/form-data" action="<?php echo site_url("index.php/login/do_upload");?>">
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>TITLE</strong></h4>
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control" placeholder="TITLE" name="title" />
					</div>

				</div>
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>DATE</strong></h4>
					</div>
					

					<div class="col-md-8">
						<input type="text" class="form-control" placeholder="yyyy-mm-dd" name="date" id="id_date" />
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>CONTENT</strong></h4>
					</div>
					<div class="col-md-8">
						<textarea type="text" class="form-control dde" placeholder="" name="article"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>IMAGE</strong></h4>
					</div>
					<div class="col-md-8">

						
						<?php echo "<input type='file' name='userfile' size='20' />"; ?>
						
					</div>
				</div>

				<?php echo "<input type='submit' name='submit' value='upload' class='btn btn-success button-edit'/>";?>
			</div>
			</form>
		<script src="../js/jquery.min.cs"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
	</html>