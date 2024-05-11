<?php $workData = read_page_data('work');

$work_article = get_item_by_slug($workData, $_GET['slug']);
?>

<article class='exploration bottles-in-the-sky'>
	<?php $explorationTitle = $work_article['title']?>

	<?php include('modules/explorations-header/template.php') ?>

<?php foreach($work_article['case-study'] as $part) { ?>
	
	<section class='section-grid'>
		<inner-column class='inner-grid'>
			<?php foreach($part['section'] as $section) { 
				$module = $section['module'] 
			?>
				<?php include("modules/$module/template.php") ?>
			<?php } ?>
		</inner-column>
	</section>

	<?php } ?>

</article>