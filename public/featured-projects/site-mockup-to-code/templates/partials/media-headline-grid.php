<ul class='media-grid-articles'>
	<?php foreach($section['articles'] as $article) { ?>
		<li class='media-grid-article-content'>
			<h3 class='strong-attention-voice'><?=$article['subheading']?></h3>
			<p class='quiet-voice'><?=$article['text']?></p>
		</li>
	<?php } ?>
</ul>