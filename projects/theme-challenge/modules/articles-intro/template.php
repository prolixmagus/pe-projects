

<articles-intro>
	<header>
		<h2 class='attention-voice'><?=$section['heading']?></h2>

		<p><?=$section['copy']?></p>
	</header>

	<article-grid>
		<ul class='article-list'>

			<?php foreach ($section['content'] as $content) { ?>
				<li class='article'>
					<?php include('../modules/article-card/template.php'); ?>
				</li>
			<?php } ?>

		</ul>
	</article-grid>
</articles-intro>
