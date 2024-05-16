
<?php 
	$exercises = read_page_data('exercises');
	
	$pageTitle = $exercises['title'];
	$pageIdea = $exercises['intro'];
?>

<?php include('modules/page-header/template.php'); ?>

<section class='projects section-grid'>
	<inner-column class='inner-grid'>
			<ol class='e4p-grid'>
				<?php foreach($exercises['exercises'] as $exercise) { ?>
					<?php include('modules/exercise-card/template.php'); ?>
				<?php } ?>
			</ol>
	</inner-column>
</section>