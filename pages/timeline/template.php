<?php $timelineData = read_page_data('timeline') ?>

<?php
	$pageTitle = $timelineData['title'];
	$pageIdea = $timelineData['intro'];
?>


<?php include('modules/page-header/template.php');?>


<?php foreach($timelineData['section'] as $section) { ?>
	<section class='<?=$section['id']?> section-grid' id='<?=$section['id']?>'>
		<inner-column class='inner-grid'>

			<work-narrative>
				<h2 class='attention-voice'><?=$section['year']?></h2>

				<?php 
				$figure = $section['image'];
				$figCaption = $section['figCaption'];

				include('modules/common-figure/template.php')
				?>

				<?=$section['narrative']?>
			</work-narrative>


			<experience-gained>
				<h3 class='strong-voice'>Skills</h3>		

				<ul title='skills'>
					<?php foreach($section['skills'] as $skill) { ?>
						<li><?=$skill['skill']?></li>
					<?php } ?>
				</ul>
			</experience-gained>

		</inner-column>
	</section>
<?php } ?>