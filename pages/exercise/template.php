<?php $exercise = getExerciseNameBySlug(); ?>


<?php
//show correct exercise template
if ($exercise) {
	getExerciseTemplate($exercise);
} else {
	include("pages/error404/template.php");
}

?>