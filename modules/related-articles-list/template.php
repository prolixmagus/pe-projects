<?php $related_work_article_slugs = $work_article['related'] ?? "No related articles!"; ?>

	<?php if (empty($related_work_article_slugs)) { ?>
		<p>It seems I haven't written any related articles yet ... research time!</p>
	<?php } else { ?>
		<ol class='related-articles'>
			<h2>Related Articles</h2>
			<?php
				foreach ($related_work_article_slugs as $related_article_slug) {
					$article = get_article_by_slug($workData, $related_article_slug);

					if ($article) { ?>

						<li>
							<?php include("modules/article-card/template.php");?>
						</li>

					<?php } ?>
			<?php } ?>
		</ol>
		
<?php } ?>