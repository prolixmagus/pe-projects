<?php
	$projects = read('data/projects-database.json');

	$pageTitle = 'Projects';
	$pageIdea = 'Everyone loves a shocase!';
?>

<section class='intro'>
	<inner-column>
		<?php include('modules/page-header/template.php');?>
	</inner-column>
	
</section>

<section class='projects'>
	<inner-column>
		<ol class='project-list'>
			<?php foreach($projects as $project) { ?>
				<?php if ( isset($project['featured']) ) { ?>
					<li class="exercise e4p">
						<a href='<?=$project['address']?>'><?=$project['name']?></a>
						<h2 class='calm-voice'><?=$project['competency']?></h2>
						<p><?=$project['description']?></p>
					</li>
				<?php } ?>
			<?php } ?>
		</ol>
	</inner-column>
</section>

<picture class='seaweed-patch'>
	<img src='images/seaweed-patch.svg' alt='pink green blue seaweed patch'>
</picture>

