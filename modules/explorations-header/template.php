<?php
	$explorationTitle = $explorationTitle ?? "Exploration Title";
	$explorationTime = $explorationTime ?? "This is the date the content was published.";
	$explorationUpdate = $explorationUpdate ?? "This is the date the content was updated.";
	?>

<header class='page-header'>
	<inner-column>
		<h1 class="loud-voice"><?=$explorationTitle?></h2>
		<time>Published: <?=$explorationTime?>
		<time>Updated: <?=$explorationUpdate?>
	</inner-column>
</header>