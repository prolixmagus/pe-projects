<?php
	$layouts = readPageData('layout-garden-database');

	$section = getLayoutBySlug($layouts['sections'], $_GET['slug']);

	$module = $section['module'];
?>

<?php if ($module) { ?>
	<section class='<?=$module?>'>

		<case-study-wrapper>
			<a class='case-study-link quiet-voice' href="?page=layout-garden">
					Back
			</a>
		</case-study-wrapper>

		<inner-column>
			<module-showcase>
				<?php include("modules/layout-garden/" . $section['module'] . "/template.php");?>
			</module-showcase>
		</inner-column>

	</section>

	<section class="case-study-paragraph">
		<inner-column>
			<?php include("modules/layout-garden/" .  $section['module'] . "/case-study.php");?>
<?php } else { ?>

	<section>
		<inner-column>
			<p>No layout here!</p>
		</inner-column>
	</section>

<?php } ?>


