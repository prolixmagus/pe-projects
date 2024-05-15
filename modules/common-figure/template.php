<?php 
	$figure = $section['image'] ?? "images/landscape.jpg";
	$figCaption = $section['figCaption'] ?? null;
	?>

<figure class="<?= isset($section['headline']) ? 'headline' : 'common-figure' ?>">
	<picture class="with-fit">
		<img src='<?=$figure?>' alt="[[todo]]">
	</picture>
	<?php if(isset($figCaption)) { ?>
	<figcaption class='quiet-voice caption'>
		<p class='quiet-voice caption'><?=$figCaption?></p>
	</figcaption>
	<?php } ?>
</figure>
