<?php $workData = read_page_data('work-database');

$work_article = get_item_by_slug($workData, $_GET['slug']);
?>

<article class='exploration'>
	<?php $pageTitle = $work_article['title']?>
	<?php include('modules/explorations-header/template.php') ?>

	<section>
		<inner-column>
			<h2>ARTICLE WILL GO HERE YA HEAR</h2>
		</inner-column>
	</section>

</article>

<article class='related-articles'>
	<section>
		<inner-column>
			<?php include('modules/related-articles-list.php') ?>
		</inner-column>
	</section>
</article>