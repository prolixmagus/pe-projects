<?php $workData = read_page_data('work');


$work_article = get_article_by_slug($workData, $_GET['slug']);

$work_article_slug = $work_article['slug'];

?>

<?php 
	if($work_article_slug) {
		include('pages/work-detail/blog-template/template.php');
	} else {
		include('error404/template.php');
	}
?>

<section class='work-detail section-grid'>
	<inner-column class='inner-grid'>
		<?php include('modules/related-articles-list/template.php')?>
	</inner-column>
</section>