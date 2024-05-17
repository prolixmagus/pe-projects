<?php $pageData = read_page_data('work');

$work_article = get_article_by_slug($pageData, $_GET['slug']);

$explorationTitle = $work_article['title']
?>

<article class='exploration death-and-design'>

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