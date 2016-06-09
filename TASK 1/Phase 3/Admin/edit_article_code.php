
<?php
				error_reporting();
				$con = mysqli_connect("localhost","root","", "news") or die(mysql_error());

					$id = $_POST['id'];
					$date = $_POST['date'];
					$art = $_POST['article'];
					$article = htmlspecialchars($art, ENT_QUOTES, 'ISO-8859-1', true);

					$q = "UPDATE  article SET date = '$date', article = '$article' WHERE id = '$id'";

					$cq = mysqli_query($con ,$q) or die("Query Failed". mysql_error());
	

					if ($cq) {
						header("location:../Article/article.php?id=$id"); }


					mysqli_close($con);


				
				?>