<?php
	$pageData = read_page_data('style-guide');

	$header = $pageData['header'];
?>

<?php include("modules/$header/template.php");?>

<?php foreach($pageData['sections'] as $section) { 

	$module = $section['module'];

	?>

<section class='section-grid'>
	<inner-column class='inner-grid'>
		<?php include ("modules/$module/template.php")?>
	</inner-column>
</section>

<?php } ?>