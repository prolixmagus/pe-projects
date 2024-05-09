<?php include("modules/layout-garden/data/fly-fishing-data.php"); ?>

	<h2 class='fishing-title'>Best Sellers</h2>
	<ul>
		<?php foreach($flies as $fly) { ?>
			<li>
				<?php (include('modules/layout-garden/fly-fishing-grid/fly-fishing-card/template.php')) ?>
			</li>
		<?php } ?>
	</ul>