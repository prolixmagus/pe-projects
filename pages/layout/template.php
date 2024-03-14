<?php
	$layout_database = read('data/layout-garden-database.json');

	$section = getLayoutBySlug($layout_database['sections'], $_GET['slug']);

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
			<h2 class='small-heading'>Case Study</h2>
			<p class='calm-voice'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet odit, perferendis. Omnis, quod corporis illo asperiores fuga libero, tempore non ullam debitis minima aspernatur dolore, soluta similique accusantium maxime impedit.</p>
<?php } else { ?>

	<section>
		<inner-column>
			<p>No layout here!</p>
		</inner-column>
	</section>

<?php } ?>


