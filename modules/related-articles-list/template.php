<?php $related_work_article_slugs = $work_article['related'] ?? "No related articles!"; ?>

	<?php if (empty($related_work_article_slugs)) { ?>
		<p>It seems I haven't written any related articles yet ... research time!</p>
	<?php } else { ?>

	<ol class='related-articles-list'>
		<?php
			foreach ($related_work_article_slugs as $related_article_slug) {
				$related_article = get_item_by_slug($workData, $related_article_slug); 

				if ($related_article) { ?>
			
					<li>
						<h2>
							<a href='?page=work-detail&slug=<?=$related_article['slug']?>'>
								<?=$related_article['title']?>
							</a>
						</h2>
						<time><?=$related_article['published']?></time>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit a, molestias aliquam in cum aperiam commodi perferendis culpa, tenetur consequatur recusandae ex pariatur cumque veniam eaque quasi! Quos, excepturi, corrupti.</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui illum odit, maiores, impedit distinctio culpa mollitia, vero obcaecati laudantium repellendus blanditiis! Molestias, tempora! Nam exercitationem vero temporibus iusto sequi distinctio.</p>
						<a href='?page=work-detail&slug=<?=$related_article['slug']?>'>
								Read more	
							</a>
					</li>
			<?php } ?>
		<?php } ?>
	</ol>
<?php } ?>