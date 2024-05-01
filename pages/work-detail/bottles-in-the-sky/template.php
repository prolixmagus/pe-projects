<?php $workData = read_page_data('work-database');

$work_article = get_item_by_slug($workData, $_GET['slug']);
?>

<article class='exploration'>
	<?php $explorationTitle = $work_article['title']?>
	<?php include('modules/explorations-header/template.php') ?>

<?php foreach($work_article['case-study'] as $section) {
		$module = $section['module']
	?>
	
	<section>
		<inner-column>
				<?php include("modules/$module/template.php") ?>
		</inner-column>
	</section>

	<?php } ?>

</article>

<article class='related-articles'>
	<section>
		<inner-column>
			<?php include('modules/related-articles-list.php') ?>
		</inner-column>
	</section>
</article>
