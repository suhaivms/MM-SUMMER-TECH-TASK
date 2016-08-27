<!DOCTYPE html>
<html lang="en">
	<head>
		<title>EDIT ARTICLE</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo site_url('img/favicon.ico'); ?>" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>" >
        <link rel="stylesheet" href="<?php echo site_url('css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo site_url('css/style.css'); ?>">
	</head>
	<body>

			<div class="container">
				<div class="name">
					<h5><strong>NEWS.COM</strong></h5>
				</div>
				<div class="article-edit">
					<h2><strong>EDIT ARTICLE</strong></h2>
				</div>

				<?php foreach ($single_article as $article): ?>

				<form action="<?php echo site_url('index.php/login/update_article_id1'); ?>" method="post">
				
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>ID</strong></h4>
					</div>
					<div class="col-md-8">
						<input type="text" name="id" class="form-control" readonly value="<?php echo $article->id; ?>"/>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>TITLE</strong></h4>
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control" placeholder="TITLE" name="title" value="<?php echo $article->title; ?>"/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>DATE</strong></h4>
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control" placeholder="yyyy-mm-dd" name="date" value="<?php echo $article->date;?>"/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 left-edit">
						<h4><strong>CONTENT</strong></h4>
					</div>

					<div class="col-md-8">
						<textarea type="text"  placeholder="" class="form-control dde" name="article">
							<?php echo $article->article;?>
						</textarea>
					</div>
				</div>
				
				<button class="btn btn-success button-edit" type="submit"><strong>CONFIRM</strong></button>
			</div>
    			  
			</form>
			<?php endforeach; ?>

		<script src="<?php echo site_url('js/jquery.min.cs')?>"></script>
		<script src="<?php echo site_url('js/bootstrap.min.js')?>"></script>
	</body>
	</html>