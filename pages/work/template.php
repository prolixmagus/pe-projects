<?php 
	$pageTitle = "Work & Exploration";
	$pageIdea = "Great designers know that those “a-ha!” moments hide within the tall grass of process and practice. Below are various writings, wonderings, and experiments that hopefully spark ... you guessed it ... joy.";

	$workData = read_page_data('work');

	$recent_articles = most_recent_articles($workData);
?>

<?php include('modules/page-header/template.php'); ?>

<section class='work'>
	<inner-column>
		<?php include('modules/recent-articles-list/template.php')?>
	</inner-column>
</section>


