<article class="announcement-card">
	<date-container>
		<time class="time-banner day"><?=$show["day"]?></time>
		<time class="time-banner date"><?=$show["date"]?></time>
	</date-container>
	<card-info>
		<h2><?=$show["headliner"]?></h2>
		<p><?=$show["summary"]?></p>
		<showtime>
			<picture>
				<img src='icons/clock.svg' alt=''>
			</picture>
			<time class="showtime"><?=$show["time"]?></time>
		</showtime>
	</card-info>
</article>
