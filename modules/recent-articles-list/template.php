<ol class='recent-articles-list'>
	<!--make recent articles list -->
	<?php foreach($recent_articles as $article) {
		?>
		<li>
			<h2>
				<a href='?page=work-detail&slug=<?=$work_article['slug']?>'>
					<?=$article['title']?>
				</a>
			</h2>
			<time><?=$article['published']?></time>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit a, molestias aliquam in cum aperiam commodi perferendis culpa, tenetur consequatur recusandae ex pariatur cumque veniam eaque quasi! Quos, excepturi, corrupti.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui illum odit, maiores, impedit distinctio culpa mollitia, vero obcaecati laudantium repellendus blanditiis! Molestias, tempora! Nam exercitationem vero temporibus iusto sequi distinctio.</p>
			<a href='?page=work-detail&slug=<?=$article['slug']?>'>
					Read more	
				</a>
		</li>

	<?php } ?>
</ol>

