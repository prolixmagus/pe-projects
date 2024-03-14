<section class='intro layout-garden'>
	<inner-column>
		<h2 class="loud-voice">Layout Garden</h2>

		<p>The internet is a sprawling forest filled with responsive modules of all kinds. Inspired by their designs, here are the modules I've grown in my own garden.</p>

	</inner-column>
</section>

<?php

$layout_database = read('data/layout-garden-database.json');

// print_r($layout_database);

foreach ($layout_database['sections'] as $section) { ?>

	<section class='module-showcase <?=$section['module']?>'>
		
		<case-study-wrapper>
			<a class='case-study-link quiet-voice' href="?page=layout&slug=<?=$section['slug']?>">
					Case Study
			</a>
		</case-study-wrapper>

		<inner-column>
			<module-showcase>
				<?php include(getFile("modules/layout-garden/" . $section['module'] . "/template.php"));?>
			</module-showcase>
		</inner-column>
	</section>

<?php } ?>