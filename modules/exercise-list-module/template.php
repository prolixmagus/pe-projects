<?php $exercises = readPageData('exercises-database');?>

<exercise-list-module>
	<ol class='project-list'>
		<?php foreach($exercises as $exercise) { 
			include('modules/exercise-card/template.php');
		} ?>
	</ol>
</exercise-list-module>

function getItemBySlug($database, $slug_to_match) {
	foreach ($database as $data) {
		if ($data['slug'] == $slug_to_match) {
			return $data;
		}
	}
}