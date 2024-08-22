<?php 
	$figure = $creator['image'] ?? "images/teal-square.jpg";
	$figCaption = $creator['figCaption'] ?? "Name of the Work.";
	$creatorName = $creator['creator'] ?? "Author, musician, director, artist...";
	$category = $creator['icon'] ?? '../icons/headphones-icon.svg';
	$alt = $creator['alt'] ?? 'alt-text'
	
	?>


<figure class='artist-card'>
<!-- 	<picture class='influences-icon'>
		<?php include($category)?>
	</picture> -->

	<picture>
		<img src='<?=$figure?>' alt='<?=$alt?>'>
	</picture>

	<figcaption>
		<cite><?=$figCaption?></cite>
		<p class='quiet-voice caption'><?=$creatorName?></p>
	</figcaption>

</figure>
