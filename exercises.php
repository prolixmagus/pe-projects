<?php include("exercises-for-programmers/data/exercises-data.php")?>

<section class='challenge-introduction'>
	<inner-column>
		<h2 class="title">Practice Makes Perfect</h2>
		<p>In 2015, Brian P. Hogan published <span class="italic">Exercises for Programmers</span>, a collection of 57 coding challenges designed to "develop your coding skills." They can be completed in any language and be made as simple or complex as you want.</p>

		<p>Check out my solutions below!</p>
	</inner-column>
</section>

<section class='projects'>
	<inner-column>
		<ol class='project-list'>
			<?php foreach($exercises as $exercise) { ?>
				<li class="exercise">
					<a href="?page=exercise&id=<?=$exercise['id']?>">
						<?=$exercise["name"]?>
					</a>
				</li>
			<?php } ?>
		</ol>
	</inner-column>
</section>