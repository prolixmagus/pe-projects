<?php
	$projects = read('data/projects-database.json');
?>

<section class='intro'>
	<inner-column>
		<h2 class='loud-voice'>Projects</h2>
		<p>Everyone loves a showcase!</p>
	</inner-column>
</section>

<section class='projects'>
	<inner-column>
		<ol class='project-list'>
			<?php foreach($projects as $project) { ?>
				<li class="exercise">
					<a href='<?=$project['address']?>'><?=$project['name']?></a>
					<h2 class='calm-voice'><?=$project['competency']?></h2>
					<p><?=$project['description']?></p>
				</li>
			<?php } ?>
		</ol>
	</inner-column>
</section>

<picture class='seaweed-patch'>
	<img src='images/seaweed-patch.svg' alt='pink green blue seaweed patch'>
</picture>
