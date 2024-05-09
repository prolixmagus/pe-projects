<?php $pageData = read_page_data('goals'); 
	$pageTitle = $pageData['title'];
	$pageIdea = $pageData['idea'];
?>

<?php include('modules/page-header/template.php') ?>

<?php foreach ($pageData['sections'] as $section) {
	$module = $section['module'];
?>
<section class='section-grid'>
	<inner-column class='inner-grid'>
		<?php include("modules/$module/template.php")?>
	</inner-column>
</section>

<?php } ?>