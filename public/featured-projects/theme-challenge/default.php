<?php $pageData = read_data($page);?>

<header id="top">
	<inner-column>
		
		<?php include('modules/mast-head/template.php'); ?>

	</inner-column>	
</header>


<main id="page-content">
	<?php foreach ($pageData['section'] as $section) { ?>
		<section class='<?=$section['class']?>' id='<?=$section['id']?>'>
			<inner-column>

				<?php include('modules/' . $section['module'] . '/template.php'); ?>

			</inner-column>
		</section>
	<?php } ?>

</main>


<footer>
	<inner-column>
			
		<?php include('modules/site-map/template.php'); ?>

	</inner-column>
</footer>
