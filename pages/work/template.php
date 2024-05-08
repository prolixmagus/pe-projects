<?php 
	$workData = read_page_data('work');
	
	$pageTitle = $workData['title'];
	$pageIdea = $workData['intro'];

	$recent_articles = most_recent_articles($workData['articles']);
?>

<?php include('modules/page-header/template.php'); ?>

<section class='work'>
	<inner-column>
		<?php include('modules/recent-articles-list/template.php')?>
	</inner-column>
</section>


