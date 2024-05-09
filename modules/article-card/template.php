	<?php
	$title = $article['title'] ?? "Article Title"; 
	$slug = $article['slug'] ?? "#"; 
	$published = $article['published'] ?? "Date published";
	$preview_image = $article['preview-image'] ?? "images/landscape.jpg";
	$description = $article['description'] ?? "A one sentence teaser to entice the reader!";
?>

	<article-card>
		<picture class='work-picture'>
			<img src="<?=$preview_image?>" / >
		</picture>

		<article-teaser>
			<h2>
				<a href='?page=work-detail&slug=<?=$slug?>'>
					<?=$title?>
				</a>
			</h2>

			<time class='quiet-voice'><?=$published?></time>
			
			<p><?=$description?></p>

			<a class='read-more' href='?page=work-detail&slug=<?=$slug?>'>Read more</a>
		</article-teaser>
	</article-card>