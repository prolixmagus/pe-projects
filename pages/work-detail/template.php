<?php $workData = read_page_data('work-database');

$work_article = get_item_by_slug($workData, $_GET['slug']);

$work_article_slug = $work_article['slug'];

?>

<?php 
	if($work_article_slug) {
		get_article_template($work_article_slug);
	} else {
		include('error404/template.php');
	}
?>

<section class='work'>
	<inner-column>
		<?php include('modules/related-articles-list/template.php')?>
	</inner-column>
</section>