
<?php
	$heading = $article_contents['heading'];
	$description = $article_contents['description'];
	$thumbnail = $article_contents['thumbnail'];
?>

<article class='article-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='#'>Call to action</a>
	</text-content>
</article>
