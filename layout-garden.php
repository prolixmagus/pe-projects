<section class='intro layout-garden'>
	<inner-column>
		<h2 class="loud-voice">Layout Garden</h2>

		<p>The internet is a sprawling forest filled with responsive modules of all kinds. Inspired by their designs, here are the modules I've grown in my own garden.</p>

	</inner-column>
</section>

<?php

$layout_database = read('data/layout-garden-database.json');

foreach ($layout_database['sections'] as $section) { ?>

	<section class='<?=$section['module']?>'>
		<inner-column>
			<?php include("modules/layout-garden/" . $section['module'] . "/template.php");?>
		</inner-column>
	</section>

<?php } ?>