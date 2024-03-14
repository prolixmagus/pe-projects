<?php 
$exercises = read(getFile("data/exercises-database.json"));
?>

<?php

//get correct exercise

function getExerciseNameBySlug($slug) {
	//get the exercises from the database
	$exercises = getAllExercises();
	//find the right one by id
	foreach ( $exercises as $exercise ) {
		if ( $_GET['slug'] == $exercise["slug"] ) {
			return $exercise["slug"]; // slug
		}
	} 
	//otherwise return false
	return false;
}

$exercise = getExerciseNameBySlug($_GET['slug']);

?>


<?php
//show correct exercise template
if ($exercise) {
	getExerciseTemplate($exercise);
} else {
	include("pages/error404/template.php");
}

?>