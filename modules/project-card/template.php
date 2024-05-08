<?php
	$address = $section['address'] ?? "?";
	$name = $section['name'] ?? "This is the name of the project";
	$competency = $section['competency'] ?? "This explains what languages or frameworks used in the project";
	$description = $section['description'] ?? "This is a description of the project.";
?>

<project-card class='project-card'>
	<?php include('modules/common-figure/template.php')?>

	<a href='<?=$address?>'>
		<h2><?=$name?></h2>
	</a>

	<h3 class='calm-voice'><?=$competency?></h2>

	<p><?=$description?></p>

	<a href='<?=$address?>'>Read more</a>
</project-card>

