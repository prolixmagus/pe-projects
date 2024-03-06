<?php include('templates/modules/page-header/template.php') ?>

<main class="page-content">
	<?php
		foreach ($pageData['sections'] as $section) { ?>

		<section class='<?=$section['module']?>'>
			<inner-column>
				<?php include("templates/modules/" . $section['module'] . "/template.php");?>
			</inner-column>
		</section>
	<?php } ?>

</main>

<footer>
	<p>hi</p>
</footer>
	</body>
</html>

