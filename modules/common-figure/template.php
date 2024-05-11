<?php 
	$figure = $section['image'] ?? "images/landscape.jpg";
	$figCaption = $section['figCaption'] ?? null;
	?>

<common-figure class="<?= isset($section['headline']) ? 'headline' : 'common-figure' ?>">
	<figure>
		<picture class="with-fit">
			<img src='<?=$figure?>' alt="[[todo]]">
		</picture>
		<?php if(isset($figCaption)) { ?>
		<figcaption class='quiet-voice caption'>
			<p><?=$figCaption?></p>
		</figcaption>
		<?php } ?>
	</figure>
</common-figure>