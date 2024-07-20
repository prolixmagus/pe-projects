<headline-section>
		<inner-column>
			<headline class="article-grid-2">
				<h2 class='quiet-heading'>Routine</h2>
				<p class='quiet-voice'>I know you want to break free, but embrace the pattern! That's the only way out.</p>
			</headline>
		</inner-column>
</headline-container>

<article-section>
	<inner-column>
		<ul class="article-grid-2-cards">
				<?php
					for ($article = 0; $article <= 2; $article++) {
						include('day-2-article-card/template.php');
					}
					?>
		</ul>
	</inner-column>
</article-container>