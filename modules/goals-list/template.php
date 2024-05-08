<?php $section['goals'] = $section['goals'] ?? [1, 2, 3, 4];?>

<ul class='goal'>
		<?php foreach($section['goals'] as $goal) { ?>

			<?php $goal = $goal['hope'] ?? "My aspirations and career goals are listed here!"?>

				<li>
					<p><?=$goal?></p>
				</li>
				
		<?php } ?>
</ul>
