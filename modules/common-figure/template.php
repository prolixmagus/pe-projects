<?php 
	$figure = $figure ?? "images/landscape.jpg";
	$figCaption = $figCaption ?? "An illuminating piece of information or a pithy aside.";
	?>

<common-figure>
	<figure>
		<picture>
			<img src='<?=$figure?>' alt="[[todo]]">
		</picture>
			<figcaption>
				<?=$figCaption?>
			</figcaption>
	</figure>
</common-figure>