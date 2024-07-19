

<ul class="<?=isset($section['double-figure']) ? 'double-figure' : 'figure-list' ?>">

	<?php foreach($section['figure'] as $figure) { 
		$image = $figure['image'] ?? "images/orange-landscape.jpg";
		$figCaption = $figure['figCaption'] ?? null;
		$alt = $figure['alt'] ?? "placeholder image";
	?>

	<figure>
		<picture class='with-fit'>
			<img src='<?=$image?>' alt="<?=$alt?>">
		</picture>
		<?php if(isset($figCaption)) { ?>
			<figcaption class='quiet-voice caption'>
				<?=$figCaption?>
			</figcaption>
		<?php } ?>
	</figure>
<?php } ?>
</ul>