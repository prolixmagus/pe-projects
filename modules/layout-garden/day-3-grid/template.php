<day-3-grid>
	<ul class='headline-list'>
		<li>
			<h2 class='teaser-little'>Little teaser</h2>
		</li>
		<li class='headline'>
			<h2 class='small-heading'><strong>Heading level 2</strong></h2>
			<p class='calm-voice'>This is some body text. This is some body text. This is some body text. This is some body text.</p>
		</li>
	</ul>

	<ul class='headline-group'>
		<li class='headline-list'>
			<ul>
				<li>
					<h2 class='teaser-little'>Little teaser</h2>
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
					<h2 class='teaser-little'>Little teaser</h2>
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