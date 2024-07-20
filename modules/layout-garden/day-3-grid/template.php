<day-3-grid>
	<ul class='headline-list'>
		<li>
			<h2 class='teaser-little'>Shocking Update!</h2>
		</li>
		<li class='article-headline'>
			<h2 class='small-heading'>There is news!</h2>
			<p class='calm-voice'>Internet outages sweep the country. Are you and your loved ones safe?</p>
		</li>
	</ul>

	<ul class='headline-group'>
		<li class='headline-list'>
			<ul>
				<li>
					<h2 class='teaser-little'>Lock Your Doors</h2>
				</li>
				<?php
					for ($article = 0; $article <= 2; $article++) { ?>
						<li class='details-item'>
							<?php
								include('day-3-details-element/template.php');
							?>
						</li>
					<?php } ?>
			</ul>
		</li>

		<li class='headline-list'>
			<ul>
				<li>
					<h2 class='teaser-little'>Drink Water</h2>
				</li>
				<?php
					for ($article = 0; $article <= 7; $article++) { ?>
						<li class='details-item'>
							<?php
								include('day-3-details-element/template.php');
							?>
						</li>
					<?php } ?>
			</ul>
		</li>
	</ul>
<day-3-grid>