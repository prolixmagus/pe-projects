<?php 
	$figure = $section['figure'] ?? "images/landscape.jpg";
	$figCaption = $section['figCaption'] ?? null;
	$figureTwo = $section['figureTwo'] ?? "images/landscape.jpg";
	$figCaptionTwo = $section['figCaptionTwo'] ?? null;
	?>

<double-figure>
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
	<figure>
		<picture>
			<img src='<?=$figureTwo?>' alt="[[todo]]">
		</picture>
		<?php if(isset($figCaptionTwo)) { ?>
			<figcaption>
				<?=$figCaptionTwo?>
			</figcaption>
		<?php } ?>
	</figure>
</double-figure>