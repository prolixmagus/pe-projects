<?php $recent_articles = $recent_articles ?? [1];?>

<recent-articles class='recent-articles'>
	<ol>
		<?php foreach($recent_articles as $article) {
			?>
			<?php include('modules/article-card/template.php')?>
		<?php } ?>
	</ol>
</recent-articles>

