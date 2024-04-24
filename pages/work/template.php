<?php 
	$pageTitle = "Work & Exploration";
	$pageIdea = "Great designers know that those “a-ha!” moments hide within the tall grass of process and practice. Below are various writings, wonderings, and experiments that hopefully spark ... you guessed it ... joy.";

	$workData = read_page_data('work-database');

	function most_recent_articles($articles) {
		usort($articles, function($a, $b) {
			return strtotime($b['published']) - strtotime($a['published']);
		});
		return array_slice($articles, 0, 2);
	}

	$recent_articles = most_recent_articles($workData);
?>

<?php include('modules/page-header/template.php'); ?>

<section class='work'>
	<inner-column>
		<ol>


		</ol>
	</inner-column>
</section>