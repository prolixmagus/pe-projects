<?php 
	$figure = $creator['image'] ?? "images/teal-square.jpg";
	$figCaption = $creator['figCaption'] ?? "Name of the Work.";
	$creatorName = $creator['creator'] ?? "Author, musician, director, artist...";
	$category = $creator['icon'] ?? '../icons/headphones-icon.svg';
	$alt = $creator['alt'] ?? 'alt-text';

	$parsedCreator = str_replace(" ", "_", $creatorName);

	?>


<figure class='artist-card'>
<!-- 	<picture class='influences-icon'>
		<?php include($category)?>
	</picture> -->

	<picture class="front-card">
		<img src='<?=$figure?>' alt='<?=$alt?>'>
	</picture>

	<figcaption class="back-card">
		<cite><?=$figCaption?></cite>
		<?php if (wikipediaEntryExists($creatorName)) { ?>
			<a class='quiet-voice caption' href="https://en.wikipedia.org/wiki/<?=$parsedCreator?>" target="_blank"><?=$creatorName?></a>
			<?php } else { ?>
				<p class='quiet-voice caption'><?=$creatorName?></p>
			<?php } 
		?>
	</figcaption>

</figure>
