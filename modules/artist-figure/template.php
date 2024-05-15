<?php 
	$figure = $creator['image'] ?? "images/square.jpg";
	$figCaption = $creator['figCaption'] ?? "An illuminating piece of information or a pithy aside.";
	$creatorName = $creator['creator'] ?? "The name of the author, musician, director, network, or artist."
	
	?>


<figure class='artist-card'>
	<div class='placeholder-icon'>
		<svg viewBox='0 0 10 10'>
			<circle cx='5' cy='5' r='5' />
		</svg>
	</div>

	<picture>
		<img src='<?=$figure?>' alt="[[todo]]">
	</picture>

	<figcaption>
		<cite><em><?=$figCaption?></em></cite>
		<p><?=$creatorName?></p>
	</figcaption>

</figure>
