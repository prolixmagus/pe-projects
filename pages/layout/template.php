<?php
	$layouts = read_page_data('layout-garden');

	$section = get_layout_by_slug($layouts['sections'], $_GET['slug']);

	$module = $section['module'];
?>

<?php if ($module) { ?>
	<section class='<?=$module?> section-grid'>
		<inner-column class='inner-grid'>

			<module-showcase>
				<case-study-wrapper>
					<a class='case-study-link quiet-voice' href="?page=layout-garden">
							Back
					</a>
				</case-study-wrapper>

				<?php include("modules/layout-garden/" . $section['module'] . "/template.php");?>
			</module-showcase>

		</inner-column>
	</section>

	<?php foreach ($section['case-study'] as $section) { 
		$module = $section['module'] ?>
		
		<section class="case-study-paragraph section-grid">
			<inner-column class='inner-grid'>

				<?php include("modules/$module/template.php");?>
			</inner-column>
		</section>
		
	<?php } ?>


<!-- 	<section class="case-study-paragraph section-grid">
		<inner-column class='inner-grid'>
			<?php include("modules/layout-garden/" .  $section['module'] . "/case-study.php");?>
		</inner-column>
	</section> -->
<?php } else { ?>

	<section>
		<inner-column>
			<p>No layout here!</p>
		</inner-column>
	</section>

<?php } ?>

