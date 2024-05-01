<ol class='recent-articles-list'>
	<?php foreach($recent_articles as $article) {
		?>
		<li>
			<h2>
				<a href='?page=work-detail&slug=<?=$article['slug']?>'>
					<?=$article['title']?>
				</a>
			</h2>
			<time><?=$article['published']?></time>
			<p><?=$article['description']?></p>
			<a href='?page=work-detail&slug=<?=$article['slug']?>'>
					Read more	
				</a>
		</li>

	<?php } ?>
</ol>

