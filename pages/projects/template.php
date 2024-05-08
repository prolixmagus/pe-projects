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
		<ol class='project-list'>
			<?php foreach($section['projects'] as $section) { ?>
				<?php if ( isset($section['featured']) ) { ?>
					<li>
						<?php include ("modules/$module/template.php")?>
					</li>
				<?php } ?>
			<?php } ?>
		</ol>
	</inner-column>
</section>

<?php } ?>

