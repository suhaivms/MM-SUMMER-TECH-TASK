<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ADMIN LOGIN</title>

		<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>		
		<script src="../js/jquery.min.cs"></script>
		<script src="../js/bootstrap.min.js"></script>
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
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" >
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/style2.css">
	</head>

	<body>
	<section>

			<?php
				$con = mysqli_connect("localhost","root","", "news") or die(mysql_error());
				if(isset($_POST['admlogin']))
				{
					$u = $_POST['admname'];
					$pass = $_POST['admpass'];
					$q = "SELECT * FROM admin WHERE auser='$u' AND apass='$pass'";
					$cq = mysqli_query($con ,$q);
					$ret = mysqli_num_rows($cq);
					if (empty($u)) {
						echo "<script>alert('Enter username!')</script>";
					}
					else if (empty($pass)) {
						echo "<script>alert('Enter password!')</script>";
						
					}
					else {
						if($ret > 0)
					{
						header('location:admin_pannel.php');
					}
					else
					{
						echo "<script>alert('Wrong Login Details, Try Again!')</script>";
					}
				}
					mysqli_close($con);
				}
				?>
		<div class="container">
			<div class="name">
					<h5><strong>NEWS.COM</strong></h5>
			</div>
			<div class="row admin">
				<p id="ad">ADMIN LOGIN</p>
				
					<form method="POST">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="text" name="admname"  class="form-control" id="exampleInputEmail1" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" name="admpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
						  <p><input type="submit" value="Login" name="admlogin" class="button-admin btn btn-success"></p><br />
					</form>
				
					 
					
				
			</div>
			<hr/>
					
	<footer>
		
		<div class="row">
			<div class="col-md-4">	
				&copy;2016 All rights reserved.
			</div>
			<div class="col-md-4">
				<p id="contact">Phone:1800120054<br/>Email:news@gmail.com</p></br>
				<a id="s">Contact Us</a>

			</div>
			<div class="col-md-4">
				<p id="about">We are building a platform for India's youth to consume and share exciting stories. As a brand we are guided by a philosophy that encompasses all these attributes.</p></br>
				<a id="t">About us</a>
				
			</div>
				
			</div>
		</div>
		 </div>                                     

	</footer>
		</div>
	</section>
	</body>
	</html>