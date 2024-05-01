<?php 
	$figure = $figure ?? "images/landscape.jpg";
	$figCaption = $figCaption ?? null;
	?>

<common-figure>
	<figure>
		<picture>
			<img src='<?=$figure?>' alt="[[todo]]">
		</picture>
		<?php if(isset($figCaption)) { ?>
			<figcaption>
				<?=$figCaption?>
			</figcaption>
		<?php } ?>
	</figure>
</common-figure>