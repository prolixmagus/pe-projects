<?php
	$name = $exercise['name'] ?? "Exercise name";
	$exercise_description = $exercise['description'] ?? "Here is a description of an exercise!";
	$exercise_slug = $exercise['slug'] ?? "hello-world";
	$address = $exercise['address'] ?? "#";
?>

<li class='exercise-card'>
	<a href='<?=$address?>'>
		<h2><?=$name?></h2>
		<div class='e4p-icon'>
			<?php include('icons/' . $exercise_slug . '.svg')?>
		</div>
	</a>
	
	<p><?=$exercise_description?></p>

	<a class='read-more' href='<?=$address?>'>Read more</a>
</li>