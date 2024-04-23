<?php $exercises = readPageData('exercises-database');

$exercise = getItemBySlug($exercises, $_GET['slug']); 

$exercise_slug = $exercise['slug'];
?>

<?php
//show correct exercise template
if ($exercise_slug) {
	getExerciseTemplate($exercise_slug);
} else {
	include("pages/error404/template.php");
}

?>

