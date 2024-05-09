	<?php
	$title = $article['title'] ?? "Article Title"; 
	$slug = $article['slug'] ?? "#"; 
	$published = $article['published'] ?? "Date published";
	$preview_image = $article['preview-image'] ?? "images/landscape.jpg";
	$description = $article['description'] ?? "A one sentence teaser to entice the reader!";
?>
	<article-card>

		<h2>
			<a href='?page=work-detail&slug=<?=$slug?>'>
				<?=$title?>
			</a>
		</h2>

		<time><?=$published?></time>

		<picture class='work-picture'>
			<img src="<?=$preview_image?>" / >
		</picture>
		
		<p><?=$description?></p>

		<a href='?page=work-detail&slug=<?=$slug?>'>Read more</a>
	</article-card>