<?php
	$projects = read('data/projects-database.json');
?>

<section class='intro'>
	<inner-column class='pro-designer-grid'>
		<div>
		<h2 class='loud-voice'>Projects</h2>
		<p>Everyone loves a showcase!</p>
		</div>
	</inner-column>
</section>

<section class='projects'>
	<inner-column class='pro-designer-grid'>
		<ol class='project-list'>
			<?php foreach($projects as $project) { ?>
				<li class="exercise e4p">
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
