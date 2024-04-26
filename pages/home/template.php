<!-- for future jsonifying of data
 <?php
	$homeJSON = file_get_contents('data/home.json');
	$pageData = json_decode($homeJSON, true)
?>

<?php foreach($pageData["sections"] as $section) { ?>


	<section>
		<inner-column>
			<?php include("modules/" . $section["module"] . "/template.php"); ?>
		</inner-column>
	</section>

<?php } ?> -->

<section>
	<inner-column>
		<header class='home-header'>
			<h2 class='loud-voice'>You made it!</h2>

			<p class='calm-voice'>I'm Jeremy, a web developer and K-12 <abbr title='English as a Second Language'>ESL</abbr> educator. I help people of all ages navigate foreign systems.</p>

			<!--if $page===home statement for following html -->

			<p class='calm-voice'>If I could sum up the 21st century in a single word, I would choose <span>overwhelming</span>. My <a href="?page=goals">goal as a developer</a> is to untangle the knots while preserving joy in discovery. There will be no more <span>whelming</span> on my watch!</p>

			<p class='calm-voice'>If you want to talk tech, music, linguistics, or whatever crosses your mind, you can reach me at <a href='mailto:jeremypfishman@gmail.com'>jeremypfishman@gmail.com</a>. I usually respond within 24 hours.</p>

			<p class='calm-voice'>And of course, here's my <a href='https://github.com/prolixmagus'>github</a> and <a href='https://prolixmagus.substack.com'>blog</a>.</p>
		</header>
	</inner-column>
</section>

<section>
	<inner-column>
		<?php include('modules/whiteboard/template.php');?>
	</inner-column>
</section>