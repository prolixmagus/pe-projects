<?php 
	$pageData = read_page_data('work');
	
	$pageTitle = 'The Archive';
	$pageIdea = 'Here is a complete list of my writings (so far)!';

	$recent_articles = sorted_articles($pageData['articles']);
?>	

<?php include('../modules/page-header/template.php'); ?>

<section class='work section-grid'>
	<inner-column class='inner-grid'>
		<?php include('../modules/recent-articles-list/template.php')?>
	</inner-column>
</section>