<?php
	$explorationTitle = $work_article['title'] ?? "Exploration Title";
	$explorationTime = $work_article['published'] ?? "This is the date the content was published.";
	$explorationUpdate = $work_article['updated'] ?? "This is the date the content was updated.";
	?>

<header class='page-header section-grid'>
	<inner-column class='inner-grid'>
		<h1 class="loud-voice"><?=$explorationTitle?></h1>
		<times>
			<time class='quiet-voice caption'>Published: <?=$explorationTime?></time>
			<time class='quiet-voice caption'>Updated: <?=$explorationUpdate?></time>
		</times>
	</inner-column>
</header>