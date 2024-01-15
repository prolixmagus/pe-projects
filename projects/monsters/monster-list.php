<?php include("monster-data.php") ?>

<!-- HTML starts here -->

<h2 class='adopt-message'>Please Adopt Us!</h2>
	
<ul>

	<?php foreach ($monsters as $monster) { ?>

		<li class="monster">
			<?php include("monster-card.php")?>
		</li>
			
	<?php } ?>

</ul>
			




