

<?php

//get correct exercise

function getExerciseById($id) {
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

$exercise= getExerciseById($_GET['id']);

?>


<?php
//show correct exercise template
if ($exercise) {
	getExerciseTemplate($exercise);
} else {
	echo "There is no exercise";
}

?>