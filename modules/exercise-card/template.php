<?php
	$exercise_name = $exercise['name'] ?? "Exercise name";
	$exercise_description = $exercise['description'] ?? "Here is a description of an exercise!";
	$exercise_slug = $exercise['slug'] ?? "hello-world"
?>

<exercise-card class='exercise'>
	<li>
		<a class="exercise-link" href="?page=exercise&slug=<?=$exercise_slug?>">
			<?=$exercise_name?>
			<div class='e4p-icon'>
				<?php include('images/' . $exercise_slug . '.svg')?>
			</div>
		</a>
		<p><?=$exercise_description?></p>
	</li>
</exercise-card>