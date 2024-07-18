<?php
	$pageTitle = $pageTitle ?? "Living Style Guide";
	
	$pageIdea = $pageIdea ?? "The following are a collection of the reusable modules and consistent design choices presented throughout the site. This <code>page-header</code> module has a main header and supporting paragraph.";
?>

<header class='page-header section-grid'>
	<inner-column class='inner-grid'>
		<h1 class="loud-voice"><?=$pageTitle?></h1>
		<p class='calm-voice light-text'><?=$pageIdea?></p>
	</inner-column>
</header>
