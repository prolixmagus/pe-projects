

<ul class='double-figure'>

	<?php foreach($section['figure'] as $figure) { 

	$image = $figure['image'] ?? "images/landscape.jpg";
	$figCaption = $figure['figCaption'] ?? null;
	$alt = $figure['alt'] ?? "placeholder image";
	?>

	<figure>
		<picture class='with-fit'>
			<img src='<?=$image?>' alt="<?=$alt?>">
		</picture>
		<?php if(isset($figCaption)) { ?>
			<figcaption>
				<?=$figCaption?>
			</figcaption>
		<?php } ?>
	</figure>
<?php } ?>
</ul>