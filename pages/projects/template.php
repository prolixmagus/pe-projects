<?php
	$projectData = read_page_data('projects-database');

	$pageTitle = 'Projects';
	$pageIdea = 'Everyone loves a showcase!';
?>

<?php include('modules/page-header/template.php');?>

<?php foreach($projectData['sections'] as $section) {

	$module = $section['module'];

	?>

<section class='section-grid'>
	<inner-column class='inner-grid'>
		<project-list class='project-list'>
			<ol>
				<?php foreach($section['projects'] as $section) { ?>
					<?php if ( isset($section['featured']) ) { ?>
						<li>
							<?php include ("modules/$module/template.php")?>
						</li>
					<?php } ?>
				<?php } ?>
			</ol>
		</project-list>
	</inner-column>
</section>

<?php } ?>

