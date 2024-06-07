<?php 
	$figure = $section['image'] ?? "images/landscape.jpg";
	$figCaption = $section['figCaption'] ?? null;
	$alt = $section['alt'] ?? 'add alt text';
	?>

<figure class="<?= isset($section['headline']) ? 'headline' : 'common-figure' ?>">
	<picture class="with-fit">
		<img src='<?=$figure?>' alt='<?=$alt?>'>
	</picture>
	<?php if(isset($figCaption)) { ?>
	<figcaption class='quiet-voice caption'>
		<?=$figCaption?>
	</figcaption>
	<?php } ?>
</figure>
