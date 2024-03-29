<?php $exercises = read(getFile("data/exercises-database.json"));?>

<section class='challenge-introduction'>
	<inner-column>
		<h2 class="loud-voice">Practice Makes Perfect</h2>
		<p class='calm-voice'>In 2015, Brian P. Hogan published <span class="italic">Exercises for Programmers</span>, a collection of 57 coding challenges designed to "develop your coding skills." They can be completed in any language and be made as simple or complex as you want.</p>

		<p>Check out my solutions below!</p>
	</inner-column>
</section>

<section class='projects'>
	<inner-column>
		<ol class='project-list'>
			<?php foreach($exercises as $exercise) { ?>
				<li class="exercise">
					<a href="?page=exercise&slug=<?=$exercise['slug']?>">
						<?=$exercise["name"]?>
						<div class='e4p-icon'>
							<?php include('images/' . $exercise['slug'] . '.svg')?>
						</div>
					</a>
				</li>
			<?php } ?>
		</ol>
	</inner-column>
</section>