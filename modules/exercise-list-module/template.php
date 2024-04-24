<?php $exercises = read_page_data('exercises-database');?>

<exercise-list-module>
	<ol class='project-list'>
		<?php foreach($exercises as $exercise) { 
			include('modules/exercise-card/template.php');
		} ?>
	</ol>
</exercise-list-module>