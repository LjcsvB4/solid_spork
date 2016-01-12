<?php $bdd=new PDO('mysql:host=localhost;dbname=blog_mvc;charset=utf8',
					'root','Pate63500');
				$posts=$bdd->query('SELECT POST_ID as id, POST_DATE as date,'.
					'POST_TITLE as title,POST_CONTENT as content FROM T_POST'.
					' ORDER BY POST_ID DESC');
				$posts->setFetchMode(PDO::FETCH_OBJ);