<?php

$pageData = read_page_data('layout-garden');

$pageTitle = $pageData['title'];
$pageIdea = $pageData['intro'];

?>

<?php include('modules/page-header/template.php')?>

<?php foreach ($pageData['sections'] as $section) { ?>

	<section class='module-showcase <?=$section['module']?> section-grid'>
		
	<case-study-wrapper>
		<a class='case-study-link quiet-voice' href="?page=layout&slug=<?=$section['slug']?>">
				Case Study
		</a>
	</case-study-wrapper>

		<inner-column class='inner-grid'>
			<module-showcase>
				<?php include("modules/layout-garden/" . $section['module'] . "/template.php");?>
			</module-showcase>
		</inner-column>
	</section>

<?php } ?>