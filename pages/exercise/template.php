

<?php

//get correct exercise

function getExerciseNameById($id) {
	//get the exercises from the database
	$exercises = getAllExercises();
	//find the right one by id
	foreach ( $exercises as $exercise ) {
		if ( $_GET['id'] == $exercise["id"] ) {
			return $exercise["slug"]; // slug
		}
	} 
	//otherwise return false
	return false;
}

$exercise = getExerciseNameById($_GET['id']);

?>


<?php
//show correct exercise template
if ($exercise) {
	getExerciseTemplate($exercise);
} else {
	include("pages/error404/template.php");
}

?>