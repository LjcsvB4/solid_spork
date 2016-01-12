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
			<?php 
				$bdd=new PDO('mysql:host=localhost;dbname=blog_mvc;charset=utf8',
					'root','Pate63500');
				$posts=$bdd->query('SELECT POST_ID as id, POST_DATE as date,'.
					'POST_TITLE as title,POST_CONTENT as content FROM T_POST'.
					' ORDER BY POST_ID DESC');
				$posts->setFetchMode(PDO::FETCH_OBJ);
				foreach ($posts as $post) : 
			?>
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