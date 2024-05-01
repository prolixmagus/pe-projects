<?php
	$explorationTitle = $work_article['title'] ?? "Exploration Title";
	$explorationTime = $work_article['published'] ?? "This is the date the content was published.";
	$explorationUpdate = $work_article['updated'] ?? "This is the date the content was updated.";
	?>

<header class='page-header'>
	<inner-column>
		<h1 class="loud-voice"><?=$explorationTitle?></h2>
		<time>Published: <?=$explorationTime?></time>
		<time>Updated: <?=$explorationUpdate?></time>
	</inner-column>
</header>