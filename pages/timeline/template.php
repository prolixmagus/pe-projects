<?php $timelineData = read_page_data('timeline') ?>

<?php
	$pageTitle = $timelineData['title'];
	$pageIdea = $timelineData['intro'];
?>

<section class='intro'>
	<inner-column>

		<?php include('modules/page-header/template.php');?>

	</inner-column>
</section>

<?php foreach($timelineData['section'] as $section) { ?>
	<section class='<?=$section['id']?>' id='<?=$section['id']?>'>
		<inner-column class='first'>
			<work-narrative>
				<h2 class='attention-voice'><?=$section['year']?></h2>

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


		<?php include('modules/common-figure/template.php')?>

		</inner-column>
	</section>
<?php } ?>