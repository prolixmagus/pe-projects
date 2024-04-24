<?php
	$pageTitle = $pageTitle ?? "Living Style Guide";
	$pageIdea = $pageIdea ?? "The following are a collection of the reusable modules and consistent design choices presented throughout the site. This <code>page-header</code> module has a main header and supporting paragraph."
	?>

<header class='page-header'>
	<inner-column>
		<h1 class="loud-voice"><?=$pageTitle?></h2>
		<p class='calm-voice'><?=$pageIdea?></p>
	</inner-column>
</header>