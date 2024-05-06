<?php
	$projectData = read_page_data('projects-database');

	$pageTitle = 'Projects';
	$pageIdea = 'Everyone loves a showcase!';
?>

<?php include('modules/page-header/template.php');?>

<?php foreach($projectData['sections'] as $section) {

	$module = $section['module'];

	?>

<section>
	<inner-column>
		<?php include ("modules/$module/template.php")?>
	</inner-column>
</section>

<?php } ?>

