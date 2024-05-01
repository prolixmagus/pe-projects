<?php $influencesData = read_page_data('influences');?>

<?php
	$pageTitle = $influencesData['title'];
	$pageIdea = $influencesData['intro'];
?>


<?php include('modules/page-header/template.php');?>

<section class='influence-list'>
	<inner-column>
		<ul>
			<?php foreach($influencesData['creator-list'] as $creator) { ?>
				<?php if(isset($creator['featured'])) { ?>
					<li class='<?=$creator['id']?>'>
						<?php include('modules/artist-figure/template.php')?>
					</li>
				<?php } ?>
			<?php } ?>
		</ul>
	</inner-column>
</section>

<?php include('modules/footer/template.php');?>

	<!-- <inner-column class='first'>

		<div class='books'>
			<h2 class='attention-voice pink-mark'>Books</h2>
			<ul class='influences-list'>
				<li><span class='italic'>Badass: Making Users Awesome </span><span class='quiet-voice'>by </span>Kathy Sierra</li>
				<li><span class='italic'>Don Quixote </span><span class='quiet-voice'>by </span>Miguel de Cervantes</li>
				<li><span class='italic'>The Rings of Saturn </span><span class='quiet-voice'>by </span>Kurt Vonnegut</li>
				<li><span class='italic'>The Wind-Up Bird Chronicle </span><span class='quiet-voice'>by </span>Haruki Murakami</li>
				<li><span class='italic'>Xenogenesis </span><span class='quiet-voice'>by </span>Octavia Butler</li>
			</ul>
		</div>

		<div class='shows'>
			<h2 class='attention-voice green-mark'>Shows</h2>
			<ul>
				<li>Scandal</li>
				<li>Succession</li>
				<li>Love Death + Robots</li>
				<li>Avatar: The Last Airbender</li>
				<li>Doctor Who</li>
				<li>Sherlock</li>
				<li>Brooklyn 99</li>
			</ul>
		</div>

		<div class='music'>
			<h2 class='attention-voice blue-mark'>Music</h2>
			<ul>
				<li>DJ Sprinkles</li>
				<li>Rina Sawayama</li>
				<li>Four Tet</li>
				<li>Daft Punk</li>
				<li>Billy Strings</li>
				<li>Charles Mingus</li>
				<li>Timbaland</li>
				<li>Jhené Aiko</li>
				<li>Kehlani</li>
				<li>T-Pain</li>
				<li>Herbie Hancock</li>
				<li>Sonny Rollins</li>
				<li>
			</ul>
		</div>
	</inner-column>
</section>

