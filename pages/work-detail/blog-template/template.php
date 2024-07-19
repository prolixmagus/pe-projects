<?php $pageData = read_page_data('work');

$work_article = get_article_by_slug($pageData, $_GET['slug']);

$explorationTitle = $work_article['title']
?>

<article class='exploration <?=$work_article['slug']?>'>
	<?php $explorationTitle = $work_article['title']?>
	<?php include('../modules/explorations-header/template.php') ?>

<?php foreach($work_article['case-study'] as $part) { ?>
	
	<section class='section-grid'>
		<inner-column class='inner-grid'>
			<?php foreach($part['section'] as $section) { 
				$module = $section['module'] 
			?>
				<?php include("../modules/$module/template.php") ?>
			<?php } ?>
		</inner-column>
	</section>

	<?php } ?>
	
	<div class='section-grid'>
		<div class='inner-grid'>
			<div class='divider-wrapper'>
				<hr class='blog-divider' />
			</div>
		</div>
	</div>

</article>