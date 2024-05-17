<?php 
	$pgaeData = read_page_data('work');
	
	$pageTitle = $pgaeData['title'];
	$pageIdea = $pgaeData['intro'];

	$recent_articles = most_recent_articles($pgaeData['articles']);
?>

<?php include('modules/page-header/template.php'); ?>

<section class='work section-grid'>
	<inner-column class='inner-grid'>
		<?php include('modules/recent-articles-list/template.php')?>
	</inner-column>
</section>


