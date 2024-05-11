<?php 
	$figure = $creator['image'] ?? "images/square.jpg";
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
			<h2 class='calm-voice'><em><?=$figCaption?></em></h2>
			<p class='quiet-voice'><?=$creatorName?></p>
		</figcaption>
	</figure>
</artist-figure>