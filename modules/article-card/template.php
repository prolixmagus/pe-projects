<?php
	$title = $article['title'] ?? "Article Title"; 
	$slug = $article['slug'] ?? "#"; 
	$published = $article['published'] ?? "29 FEB 2024";
	$preview_image = $article['preview-image'] ?? "images/purple-landscape.jpg";
	$description = $article['description'] ?? "A one sentence teaser to entice the reader!";
	$alt = $article['alt'] ?? "alt-text for image accessibility"
?>

<article class='card'>
	
	<picture class='work-picture'>
		<img src='<?=$preview_image?>' alt=<?=$alt?> / >
	</picture>

	<div class='text-area'>
			<h2>
				<?=$title?>
			</h2>

		<time class='quiet-voice'><?=$published?></time>
			
		<p class='light-text'><?=$description?></p>

		<a class='read-more' href='?page=work-detail&slug=<?=$slug?>'>Read more</a>

		<a class='article-link' href='?page=work-detail&slug=<?=$slug?>'></a>
	</div>

</article class='card'>