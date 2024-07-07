<?php $pageData = read_page_data('timeline') ?>

<?php
	$pageTitle = $pageData['title'];
	$pageIdea = $pageData['intro'];

   $totalSections = count($pageData['section']);
   $currentIndex = 0;
?>


<?php include('../modules/page-header/template.php');?>

<div class='timeline-wrapper'>
	<?php foreach($pageData['section'] as $section) {
		$currentIndex++; 
	?>
		<section class='<?=$section['id']?> section-flex' id='<?=$section['id']?>'>
			<inner-column class='inner-flex'>

				<work-narrative>
					<h2 class='attention-voice'><?=$section['year']?></h2>

					<?php 
						$figure = $section['image'];
						$figCaption = $section['figCaption'];

						include('../modules/common-figure/template.php')
					?>

					<?=$section['narrative']?>
				</work-narrative>

				<?php if ($currentIndex < $totalSections) { ?>
					<div class='timeline-arrow'>
						<?php include('../icons/timeline-arrow.svg')?>
					</div>
				<?php } ?>

			</inner-column>
		</section>
	<?php } ?>
</div>