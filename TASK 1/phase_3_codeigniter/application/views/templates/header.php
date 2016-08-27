<!DOCTYPE html>
<html lang="en">

	<head>
		<title>NEWS</title>

		<script type="text/javascript" src="<?php echo site_url('js/jquery-2.2.4.min.js');?>"></script>		
		<script src="<?php echo site_url('js/jquery.min.cs');?>"></script>
		<script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>
		<script>
			$(document).ready(function(){
			        $("p#contact").hide();
	         		$("p#about").hide();
	         });  
			$(document).ready(function(){
			        $("a#s").click(function(){
			        	$("p#contact").toggle();
			        });
	         });  
			$(document).ready(function(){
			        $("a#t").click(function(){
			        	$("p#about").toggle();
			        });
	      	});
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo site_url('img/favicon.ico'); ?>" type="image/x-icon" />
		<link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" href="<?php echo site_url('css/bootstrap-theme.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('css/style.css'); ?>">
	</head>

	<body>
		<section>
		<header>
			<div class="container">
			<div class="row">
				<!-- NAVBAR -->
				<div class="col-md-12">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    
					    <ul class="nav navbar-nav">
					      <li><a href="../index.html">Home</a></li>
					      <li><a href="national.php">NATIONAL</a></li>
					      <li><a href="world.php">WORLD</a></li> 					       
					      <li><a href="sports.php">SPORTS</a></li> 					
					      <li><a href="others.php">OTHERS</a></li>
					    </ul>
					  </div>
					</nav>
				</div>
				

			</div>
			</div>
		</header>
		<div class='container'>
