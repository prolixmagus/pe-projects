<article class="announcement-card">
	<date-container>
		<time class="time-banner day"><?=$show["day"]?></time>
		<time class="time-banner date"><?=$show["date"]?></time>
	</date-container>
	<card-info>
		<h2><?=$show["headliner"]?></h2>
		<p><?=$show["summary"]?></p>
		<showtime>
			<div class='clock'>
				<?php include('../icons/clock.svg')?>
			</div>
			<time class="showtime"><?=$show["time"]?></time>
		</showtime>
	</card-info>
</article>
