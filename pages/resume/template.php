<?php $pageData = read_page_data('timeline') ?>

<?php
	$pageTitle = $pageData['title'];
	$pageIdea = $pageData['intro'];

   $totalSections = count($pageData['section']);
   $currentIndex = 0;
?>


<?php include('../modules/page-header/template.php');?>

<section>
		<ul class='timeline-wrapper'>
			<?php foreach($pageData['section'] as $section) {
				$currentIndex++; 
			?>

			<li class='<?=$section['id']?> section-flex' id='<?=$section['id']?>'>
				<h2 class='attention-voice'><?=$section['year']?></h2>

				<?php 
					$figure = $section['image'];
					$figCaption = $section['figCaption'];

					include('../modules/common-figure/template.php')
				?>

				<?=$section['narrative']?>
			</li>

			<?php } ?>
		</ul>
</section>