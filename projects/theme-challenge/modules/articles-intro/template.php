
<?php include ('data/articles.php'); ?>

<articles-intro>
	<header>
		<h2 class='attention-voice'>Heading for this section here</h2>

		<p>A short introduction explaining why these articles are here to help you understand if you want to read them.</p>
	</header>

	<article-grid>
		<ul class='article-list'>

			<?php foreach ($pageData['articles-intro'] as $content) { ?>
				<?php foreach($content['content'] as $article_contents) { ?>
				<li class='article'>
					<?php include('modules/article-card/template.php'); ?>
				</li>
			<?php } ?>
		<?php } ?>

		</ul>
	</article-grid>
</articles-intro>
