<?php
	$name = $exercise['name'] ?? "Exercise name";
	$exercise_description = $exercise['description'] ?? "Here is a description of an exercise!";
	$exercise_slug = $exercise['slug'] ?? "hello-world";
	$address = $exercise['address'] ?? "#";
?>

<exercise-card class='exercise'>
	<a class='exercise-link' href='<?=$address?>'>
		<h2><?=$name?></h2>
		<div class='e4p-icon'>
			<?php include('icons/' . $exercise_slug . '.svg')?>
		</div>
	</a>
	
	<p><?=$exercise_description?></p>

	<a class='exercise-link' href='<?=$address?>'>Read more</a>
</exercise-card>