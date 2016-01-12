<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="global">
		<header>
			<a href="index.php">
				<h1 id="title"></h1></a>
			<p>description</p>
		</header>
		<div class="content">
		<?php foreach ($posts as $post) : ?>
			<article>
				<header>
					<p><?php echo $post->title; ?></p>
					<time><?php echo $post->date; ?></time>
				</header>		
				<p><?php echo $post->content; ?></p>
			</article>
			<hr>
			<?php endforeach; ?>
			</div><!-- content -->
			 <footer>
			 	<p>Blog created in CSS, PHP, HTML5</p>
			 </footer>
	</div><!-- global -->
</body>
</html>