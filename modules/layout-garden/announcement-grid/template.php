<?php include("data/announcement-card-data.php"); ?>

<ul>
	<?php foreach($shows as $show) { ?>
		<li>
			<?php (include('modules/layout-garden/announcement-card/template.php')) ?>
		</li>
	<?php } ?>
</ul>