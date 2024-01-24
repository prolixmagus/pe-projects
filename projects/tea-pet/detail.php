
<?php include("tea-pet-data.php"); ?>

<?php

if (isset($_GET["tea-pet"])) {
	$this_tea_pet_id = $_GET["tea-pet"];
}

// Price format
foreach ($tea_pets as $tea_pet) {
	$price = number_format($tea_pet["price"], 2, ".", ",");

	if ( $this_tea_pet_id == $tea_pet["id"] ) {
		$detail = $tea_pet;
	} else {
		"No data!";
	}
}

?>

<inner-column class="details">

<?php 
	if (isset($detail) ) { ?>
	<picture class="detail-picture">
		<img src="https://placehold.co/600x600" alt="tea pet">
	</picture>
	<item-details>
		<h1 class="pet-name"><?=$detail["pet-name"];?></h1>
		<h2 class="price"><?=$price?></h2>
		<h3 class="description">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quo nam eum sapiente, rem saepe debitis sed atque perspiciatis dignissimos cumque veniam corrupti quasi consequuntur fugiat tenetur sunt nobis blanditiis ullam!</h3>

		<extra-details>
			<h4 class="dimensions">Dimensions: <?=$detail["dimensions"];?> </h4>
			<h5 class="materials">Material: <?=$detail["materials"];?> </h5>
			<h6 class="origin">Origin: <?=$detail["origin"];?> </h6>
		</extra-details>
		<a class="buy" href='#'>Buy Now!</a>
	</item-details>

	<?php } else { ?>

		<h1>No Tea pets Here!</h1>
		<p>Please visit our<a href="?page=pet-shop-list">Pet Shop</a></li> to nurture a Tea Pet today!</p>

	<?php } ?>
</inner-column>
	



