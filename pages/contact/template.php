<?php $pageData = read_page_data('contact');?>

<?php 
	$pageTitle = $pageData['title'];
	$pageIdea = $pageData['idea'];

	include('../modules/page-header/template.php')
?>

<?php foreach($pageData['sections'] as $section) { 
	$module = $section['module']; ?>

	<section class='contact section-grid'>
		<inner-column class='inner-grid'>
			<?php include ("../modules/$module/template.php") ?>
		</inner-column>
	</section>

<?php } ?>
