<?php 
	$figure = $creator['image'] ?? "../images/square.jpg";
	$figCaption = $creator['figCaption'] ?? "An illuminating piece of information or a pithy aside.";
	$creatorName = $creator['creator'] ?? "The name of the author, musician, director, network, or artist.";
	$category = $creator['icon'] ?? '../icons/headphones-icon.svg';
	$alt = $creator['alt'] ?? 'alt-text'
	
	?>


<figure class='artist-card'>
	<picture class='influences-icon'>
		<?php include($category)?>
	</picture>

	<picture>
		<img src='<?=$figure?>' alt='<?=$alt?>'>
	</picture>

	<figcaption>
		<cite><?=$figCaption?></cite>
		<p><?=$creatorName?></p>
	</figcaption>

</figure>
