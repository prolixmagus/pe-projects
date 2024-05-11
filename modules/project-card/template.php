<?php
	$address = $section['address'] ?? "?";
	$name = $section['name'] ?? "Project Name";
	$competency = $section['competency'] ?? "This explains what languages or frameworks used in the project";
	$description = $section['description'] ?? "This is a description of the project.";
?>

<project-card class='project-card'>
	<?php include('modules/common-figure/template.php')?>
	<project-teaser>
		<a href='<?=$address?>'>
			<h2><?=$name?></h2>
		</a>
		
		<h3 class='quiet-voice caption'><?=$competency?></h3>

		<p><?=$description?></p>

		<a class='read-more' href='<?=$address?>'>Read more</a>
	</project-teaser>
</project-card>

