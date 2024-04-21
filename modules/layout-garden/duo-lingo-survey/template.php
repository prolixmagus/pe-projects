<?php include('modules/layout-garden/data/duo-lingo-survey-data.php') ?>

<progress-section>
	<progress-container>
		<svg class ='back-arrow' id="Layer_1" data-name="Layer 1" viewBox="0 0 122.88 108.06"><title>back-arrow</title><path d="M63.94,24.28a14.28,14.28,0,0,0-20.36-20L4.1,44.42a14.27,14.27,0,0,0,0,20l38.69,39.35a14.27,14.27,0,0,0,20.35-20L48.06,68.41l60.66-.29a14.27,14.27,0,1,0-.23-28.54l-59.85.28,15.3-15.58Z"/></svg>
		<label class='duo-progress-label' for="duo-icon">Progress Bar</label>
		<progress id="duo-lingo" max="100" value="25">25%</progress>
	</progress-container>
	<picture>
		<img src='modules/layout-garden/duo-lingo-survey/owl.svg'>
	</picture>
</progress-section>

<form class='duo-lingo-form' method='POST'>
	<ul class='user-sources'>
		<?php foreach ($categories as $category) {
			include('modules/layout-garden/duo-lingo-survey/article-card/template.php');
		} ?>
	</ul>
</form>