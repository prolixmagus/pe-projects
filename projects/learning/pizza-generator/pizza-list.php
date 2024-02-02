<?php include ("pizza-data.php"); ?>

<ol>
	<?php foreach ($pizzas as $pizza) { ?>

		<li class='pizza-item'>
			<?php include("pizza-item.php")?>
		</li>

	<?php } ?>

</ol>