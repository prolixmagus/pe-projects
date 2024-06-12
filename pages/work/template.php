<?php 
	$pageData = read_page_data('work');
	
	$pageTitle = $pageData['title'];
	$pageIdea = $pageData['intro'];

	$recent_articles = array_slice(sorted_articles($pageData['articles']), 0, 4);
?>	

<?php include('modules/page-header/template.php'); ?>

<section class='work section-grid'>
	<inner-column class='inner-grid'>
		<?php include('modules/recent-articles-list/template.php')?>
	</inner-column>
</section>


