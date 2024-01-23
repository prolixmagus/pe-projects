<?php 

$item1 = "item1";
$item2 = "item2";
$item3 = "item3"; 
$item4 = "item4";
$item5 = "item5";
$item6 = "item6";

$pets = [$item1, $item2, $item3, $item4, $item5, $item6];
?>

<inner-column>
	<ul class='item-grid'>
	<?php foreach ($pets as $pet) { ?>
			<li>
				<a href='?page=<?=$pet?>'>
					<picture>
						<img src="https://placehold.co/250x250">
						<ul class="preview-details">
							<li>Item</li>
							<li>Origin</li>
						</ul>
					</picture>
				</a>
			</li>
	<?php } ?>
	</ul>
</inner-column>