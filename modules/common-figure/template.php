<?php 
	$figure = $figure['image'] ?? "images/landscape.jpg";
	$figCaption = $figure['figCaption'] ?? null;
	?>

<common-figure class="<?= isset($section['headline']) ? 'headline' : 'common-figure' ?>">
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