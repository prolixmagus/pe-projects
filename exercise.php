<?php
//get correct exercise

function getAllExercises() {
	include("exercises-data.php");
	return $exercises;
}


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
	getTemplate($exercise);
} else {
	echo "There is no exercise";
}

?>