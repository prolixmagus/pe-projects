<?php 
	$exercises = read_page_data('exercises');

	$exercise = get_exercise_by_slug($exercises['exercises'], $_GET['slug']); 


	$exercise_slug = $exercise['slug'];
?>

<?php
//show correct exercise template

if ($exercise_slug) {
	get_exercise_template($exercise_slug);
} else {
	include("../pages/error404/template.php");
}

?>