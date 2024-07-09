<ul class='article-grid'>
	<li class='headline'>
		<h2 class='attention-voice'>Heading level 2 large</h2>
		<p class='calm-voice'>This is some body text. This is some body text. This is some body text. This is some body text.</p>
	</li>
	<?php
		for ($article = 0; $article <= 5; $article++) {
			include('day-1-article-card/template.php');
		}
	?>
</ul>
<ul class='picture-grid'>
	<li>
		<picture>
			<img src="images/teal-square.jpg" alt='teal placeholder'>
		</picture>
	</li>
	<li>
		<picture>
			<img src="images/purple-square.jpg" alt='purple placehodler'>
		</picture>
	</li>
	<li>
		<picture>
			<img src="images/orange-square.jpg" alt='orange placeholder'>
		</picture>
	</li>
	<li>
		<picture>
			<img src="images/square.jpg" alt='gray placeholder'>
		</picture>
	</li>
</ul>