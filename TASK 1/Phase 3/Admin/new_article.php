			<?php
				$con = mysqli_connect("localhost","root","", "news") or die(mysql_error());
				if(isset($_POST['title']))
				{
					$t = $_POST['title'];
					$title = htmlspecialchars($t, ENT_QUOTES, 'ISO-8859-1', true);
					$date = $_POST['date'];
					$art = $_POST['article'];
					$article = htmlspecialchars($art, ENT_QUOTES, 'ISO-8859-1', true);
					$imagename=$_FILES["myimage"]["name"];
       				$imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

       				if (empty($title)) {
       					echo "You must enter title </br>";
       					echo "</body></html>";
       				exit;
       				}

       				if (empty($date)) {
       					echo "You must enter date</br>";
       					echo "</body></html>";
       					exit;
       				}
       				
					
					if (empty($article)) {
       					echo "You must enter article";
       					echo "</body></html>";
       					exit;
       					
       				}
					$q = "INSERT INTO  article (title, date, article, image, img_name) VALUES ('$title', '$date', '$article', '$imagetmp','$imagename') ";
					$cq = mysqli_query($con ,$q);

					if ($cq) {
						header('location:../Article/latest_article.php'); }

					mysqli_close($con);
				}
			?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>NEW ARTICLE</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" >
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 		 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  		<link rel="stylesheet" href="/resources/demos/style.css">
  
		<script>
		$(function(){
			$("#id_date").datepicker();
		});
		</script>



	</head>
	<body>

			<div class="container">
				<div class="name">
					<h5><strong>NEWS.COM</strong></h5>
				</div>
				<div class="article-edit">
					<h2><strong>NEW ARTICLE</strong></h2>
				</div>
			<form method="post" enctype="multipart/form-data">
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
					    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
						<input type="file" class="form-control" placeholder="IMAGE" name="myimage" />
					</div>
				</div>

				<input type="submit" name="submit" value="SUBMIT" class="btn btn-success button-edit"/>
			</div>
			</form>
		<script src="../js/jquery.min.cs"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
	</html>

