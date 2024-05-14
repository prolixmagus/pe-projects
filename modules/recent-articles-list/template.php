<?php $recent_articles = $recent_articles ?? [1];?>

<recent-articles class='recent-articles'>
	<ol>
		<?php foreach($recent_articles as $article) {
			?>
			<li>
				<?php include('modules/article-card/template.php')?>
			</li>
		<?php } ?>
	</ol>
</recent-articles>

