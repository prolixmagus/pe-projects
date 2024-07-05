<?php $pageData = read_page_data('home');?>

<section class='section-grid'>
	<inner-column class='inner-grid'>
		<header class='home-header'>
			<h1 class='loud-voice'>Web Developer. </br> Linguist. Human.</h1>

			<intro-area>
				<p class='calm-voice'>I'm Jeremy, a web developer and K-12 <abbr title='English as a Second Language'>ESL</abbr> educator. I help people of all ages navigate foreign systems.</p>

				<p class='calm-voice'>If you want to talk tech, music, linguistics, or whatever crosses your mind, you can reach me at <a href='mailto:jeremypfishman@gmail.com'>jeremypfishman@gmail.com</a>. I usually respond within 24 hours.</p>
			</intro-area>
		</header>

		<section class='cycle-button-container'>
			<button class='cycle' id='cycle' data-action='cycle'>Click Me</button>
		</section>

		<section class='thoughts'>
				<h2>Thoughts</h2>
				<ul class='thoughts-list'>
					<?php foreach($pageData['blogs'] as $blog) { ?>
					<li>
						<a href='<?=$blog['link']?>'>
							<h3><?=$blog['description']?></h3>
						</a>
						<date class='quiet-voice'><?=$blog['date'] ?></date>
					</li>
					<?php } ?>
				</ul>
		</section>

		<!-- JUST playing ... maybe add to code pen ... do the click button to replace header text, cycle through many options with final message - 'alright you reached the end, curiosity sated? -->

<!-- 		<picture>
			<img src='../images/jeremy-circles.svg'>
		</picture> -->
	</inner-column>
</section>

<!-- Once I get the canvas figured out on all devices...
	<section>
	<inner-column>
		<?php include('../modules/whiteboard/template.php');?>
	</inner-column>
</section> -->