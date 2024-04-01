
<?php
	$heading = $content['heading'];
	$description = $content['description'];
	$thumbnail = $content['thumbnail'];
	$link = $content['link'];
?>

<article class='article-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='#'><?=$link?></a>
	</text-content>
</article>
