<ul class='article-grid'>
	<li class='article-headline'>
		<h2 class='attention-voice'>We like ideas.</h2>
		<p class='calm-voice'>Tall ones, short ones, wild ones, fiesty ones, we're here to make your ideas ideate! </p>
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