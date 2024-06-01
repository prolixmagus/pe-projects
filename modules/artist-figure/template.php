<?php 
	$figure = $creator['image'] ?? "images/square.jpg";
	$figCaption = $creator['figCaption'] ?? "An illuminating piece of information or a pithy aside.";
	$creatorName = $creator['creator'] ?? "The name of the author, musician, director, network, or artist.";
	$category = $creator['icon'] ?? include('icons/book-icon.svg');
	
	?>


<figure class='artist-card'>
	<div class='placeholder-icon'>
		<?=$category?>
	</div>

	<picture>
		<img src='<?=$figure?>' alt="[[todo]]">
	</picture>

	<figcaption>
		<cite><?=$figCaption?></cite>
		<p><?=$creatorName?></p>
	</figcaption>

</figure>
