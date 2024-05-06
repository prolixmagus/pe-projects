<ol class='project-list'>
	<?php foreach($section['projects'] as $project) { ?>
		<?php if ( isset($project['featured']) ) { ?>
			<li class="exercise e4p">
				<a href='<?=$project['address']?>'><?=$project['name']?></a>
				<h2 class='calm-voice'><?=$project['competency']?></h2>
				<p><?=$project['description']?></p>
			</li>
		<?php } ?>
	<?php } ?>
</ol>
