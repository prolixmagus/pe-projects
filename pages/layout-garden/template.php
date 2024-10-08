<?php

$pageData = read_page_data('layout-garden');

$pageTitle = $pageData['title'];
$pageIdea = $pageData['intro'];

?>

<?php include('../modules/page-header/template.php')?>

<?php foreach ($pageData['sections'] as $section) { ?>

	<section class='module-showcase <?=$section['module']?> section-grid'>
		<inner-column class='inner-grid'>

			<case-study-wrapper>
				<h2 class='layout-voice'><?=$section['title']?></h2>
				<a class='case-study-link quiet-voice' href="?page=layout&slug=<?=$section['slug']?>">
						Case Study
				</a>
			</case-study-wrapper>

			<div class='layout-divider'>
				<hr />
			</div>

			<module-showcase>
				<?php include("../modules/layout-garden/" . $section['module'] . "/template.php");?>
			</module-showcase>

		</inner-column>
	</section>

<?php } ?>