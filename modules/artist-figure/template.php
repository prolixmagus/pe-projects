<?php 
	$figure = $creator['image'] ?? "images/landscape.jpg";
	$figCaption = $creator['figCaption'] ?? "An illuminating piece of information or a pithy aside.";
	$creatorName = $creator['creator'] ?? "The name of the author, musician, director, network, or artist."
	
	?>

<artist-figure>
	<figure>
		<!--<artist-icon><svg></svg></artist-icon>-->
		<picture>
			<img src='<?=$figure?>' alt="[[todo]]">
		</picture>
			<figcaption>
				<h2><?=$figCaption?></h2>
				<p><?=$creatorName?></p>
			</figcaption>
	</figure>
</common-figure>