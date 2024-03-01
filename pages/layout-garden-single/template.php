<?php
	$layout_database = read('data/layout-garden-database.json');

	$section = getItemById($layout_database['sections'], $_GET['id']);

	$module = $section['module'];
?>

<?php if ($module) { ?>
	<section class='<?=$module?>'>
		<inner-column>
			<a class='case-study-link' href="?page=layout-garden">
				Back
			</a>
			<?php include("modules/layout-garden/" . $section['module'] . "/template.php");?>
		</inner-column>
	</section>

	<section class="case-study-paragraph">
		<inner-column>
			<h2>Case Study</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet odit, perferendis. Omnis, quod corporis illo asperiores fuga libero, tempore non ullam debitis minima aspernatur dolore, soluta similique accusantium maxime impedit.</p>
<?php } else { ?>

	<section>
		<inner-column>
			<p>No layout here!</p>
		</inner-column>
	</section>

<?php } ?>


