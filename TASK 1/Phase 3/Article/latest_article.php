<?php
    $host = 'localhost';
    $dbname = 'news';
    $username = 'root';
    $password = '';

try {
 $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

 $sqldat = "SELECT *
 FROM article where id= (SELECT MAX(id) FROM article) ";

 $dat = $conn->query($sqldat);
 $dat->setFetchMode(PDO::FETCH_ASSOC);

} catch (PDOException $pe) {
 die("Could not connect to the database $dbname :" . $pe->getMessage());
}

?>


<!DOCTYPE html>
<html lang="en">
<?php while ($data = $dat->fetch()): ?>
	<head>
		<title><?php echo htmlspecialchars($data['title']); ?></title>

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
		<link rel="stylesheet" href="../css/style.css">
	</head>

	<body>
		<section>
		<header>
			<div class="container">
			<div class="row">
				<!-- NAVBAR -->
				<div class="col-md-9">
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
				<!-- SEARCH -->
				<div class="col-md-3 ser">
					<input type="text" class="form-control" placeholder="Search Access" />
				</div>
			</div>
		</header>
		<div class="container">
				<div class="row">
					<div class="nam">
					<h5><strong>NEWS.COM</strong></h5>
					</div>
				</div>

				<div class="row art">
					<div class="col-md-8 main-article">
						<h2><?php echo $data['title']; ?></h2>
						        <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/>'; ?> <br/><br/>
						<article> <?php echo $data['article']; ?> </article>
					</div>
					<div class="col-md-3 rightnav">
					 	<div class="well">	
							<div class="row">
								<h6>Related News</h6>
							</div>
							<div class="row">
							  	
							    	<a href="article.php?id=4" class="thumbnail">
							     	 <img src="../img/National/2.jpg" alt="BJP's Roopa Ganguly Attacked, Allegedly By Trinamool Workers Near Kolkata">
							     	 <div class="caption">
								        
								        <p>BJP's Roopa Ganguly Attacked, Allegedly By Trinamool Workers Near Kolkata</p>
								        
								 	</div>
							    	</a>
							   	
							 </div>
							 <div class="row">
							  
							    	<a href="article.php?id=10" class="thumbnail">
							     	 <img src="../img/National/3.jpg" alt="Former Delhi Top Cop Kiran Bedi Appointed Puducherry Lieutenant Governor">
							     	 <div class="caption">
								        
								        <p>Former Delhi Top Cop Kiran Bedi Appointed Puducherry Lieutenant Governor</p>
								        
								 	</div>
							    	</a>
							 </div>
						 </div>
					</div>		
				</div>
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
 <?php endwhile; ?>	
</html>