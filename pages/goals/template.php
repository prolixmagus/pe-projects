<?php $goalsData = read_page_data('goals') ?>
<?php include('modules/page-header/template.php') ?>

<?php foreach ($goalsData['sections'] as $section) {
	$module = $section['module'];
?>
<section>
	<inner-column>
		<?php include("modules/$module/template.php")?>
	</inner-column>
</section>

<?php } ?>