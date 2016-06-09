<?php

    $host = 'localhost';
    $dbname = 'news';
    $username = 'root';
    $password = '';

   

try {
 $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 $id = $_GET['srch'];
 $sqldat = "SELECT *
 FROM article where id ='$id'";

 $dat = $conn->query($sqldat);
 $dat->setFetchMode(PDO::FETCH_ASSOC);


} catch (PDOException $pe) {
 die("Could not connect to the database $dbname :" . $pe->getMessage());
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>EDIT ARTICLE</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" >
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>

			<div class="container">
				<div class="name">
					<h5><strong>NEWS.COM</strong></h5>
				</div>
				<div class="article-edit">
					<h2><strong>EDIT ARTICLE</strong></h2>
				</div>

				<form method="get" action="edit_article.php">
					<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>Search by ID:</strong></h4>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" placeholder="ID" name="srch" />
					</div>
					<div class="col-md-2">
						<input type="submit" value="SEARCH"  class="btn btn-success" />
					</div>

				</div>					
				</form>

				<form action="edit_article_code.php" method="post">
				<?php while ($data = $dat->fetch()): ?>
				
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>ID</strong></h4>
					</div>
					<div class="col-md-8">
						<input type="text" name="id" class="form-control" readonly value="<?php echo $data['id']; ?>"/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>TITLE</strong></h4>
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control" placeholder="TITLE" name="title" value="<?php echo $data['title']; ?>" />
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>DATE</strong></h4>
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control" placeholder="yyyy-mm-dd" name="date" value="<?php echo htmlspecialchars($data['date']); ?>"/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>CONTENT</strong></h4>
					</div>
					<div class="col-md-8">
						<textarea type="text"  placeholder="" class="form-control dde" name="article">
							<?php echo $data['article']; ?>
						</textarea>
					</div>
				</div>
				
				<button class="btn btn-success button-edit" type="submit"><strong>CONFIRM</strong></button>
			</div>
    			  <?php endwhile; ?>
			</form>

		<script src="../js/jquery.min.cs"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
	</html>