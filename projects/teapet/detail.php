
<?php include('functions.php');

//READ FIRST

	$tea_pets = readDatabase();

//GET PET ID

	if (isset($_GET["tea-pet"])) {
		$this_tea_pet_id = $_GET["tea-pet"];
	}

	foreach ($tea_pets as $teapet) {
		if ($teapet["id"] == $this_tea_pet_id) {
			$detail = $teapet;
		}
	}

//SET UP DELETE PROCESS

	$filtered = [];

	if (isset($_POST["delete"]) ) {
		foreach ($tea_pets as $tea_pet) {
			if ($tea_pet["id"] !== $this_tea_pet_id) {
				array_push($filtered, $tea_pet);
			}
		}

	$encodedTeapet = json_encode($filtered); 	//Save
	
	file_put_contents('database.json', $encodedTeapet);

	header("Location: ".$_SERVER['PHP_SELF']."?page=pet-shop-list");
	exit();

	}

	?>

<!-- HTML START -->

<inner-column class="details">

<?php 
	if (isset($detail) ) { ?>

	<picture class="detail-picture">
		<img src="<?=$detail["image"]?>" alt="tea pet">
	</picture>
	<item-details>
		<h1 class="pet-name bold"><?=$detail["pet-name"]?></h1>
		<h2 class="price"><?=$detail["price"]?></h2>
		<h3 class="description"><?=$detail["description"]?></h3>

		<extra-details>
			<h4 class="dimensions">Dimensions: <?=$detail["dimensions"]?> </h4>
			<h5 class="material">Material: <?=$detail["material"]?> </h5>
			<h6 class="origin">Origin: <?=$detail["origin"];?> </h6>
		</extra-details>
		<form method="POST" action="">
			<field>
				<button class="delete" type="submit" name="delete">
				Delete Tea Pet
				</button>
			</field>
		</form>
	</item-details>

	<?php } else { ?>

		<h2 class="outdoor-voice">No Tea pets Here!</h1>
		<p class="indoor-voice">Please visit our <a href="?page=pet-shop-list">Pet Shop</a> to nurture a Tea Pet today!</p>

	<?php } ?>
</inner-column>
	



