<?php 
include('functions.php');

$teapetData = "";
$petName = "";
$description = "";
$hasDescription= "";
$descriptionError= false;
$haspetName = false;
$petNameError = false;
$customTeapet = "";
$id = "";


if ( isset($_POST["submitted"]) ) {

	//setting variables for $_POST key => values
	if ( isset($_POST["pet-name"]) ) {
		$petName = $_POST["pet-name"];
	}

	if ( strlen( $petName ) > 0 ) {
		$haspetName = true;
	} else {
		$petNameError = "*Please enter your tea pet's name.";
	}

	if ( isset($_POST["description"]) ) {
		$description = $_POST["description"];
	}

	if ( strlen( $description ) > 0 ) {
		$hasDescription = true;
	} else {
		$descriptionError = "*Please describe your tea pet's origin story.";
	}

	//creating item
	if ($haspetName && $hasDescription) {

		$customTeapet = [
			"id" => uniqid(),
			"pet-name" => $petName,
			"type" => $_POST["type"],
			"origin" => $_POST["origin"],
			"material" => $_POST["material"],
			"description" => $description,
			"dimensions" => $_POST["dimensions"],
			"price" => 0,
		];

		if ($_POST["dimensions"] == "2.54cm") {
			$customTeapet["price"] = 9.99;
		} else if ($_POST["dimensions"] == "5.08cm") {
			$customTeapet["price"] = 12.99;
		} else {
			$customTeapet["price"] = 16.99;
		}



		

		//READ and decode json file to PHP
	 	$teapetData = readDatabase();

	 	//UPDATE the array
	 	$teapetData[] = $customTeapet;

	 	//SAVE the data to JSON
		$encodedTeapet = json_encode($teapetData);
		file_put_contents('database.json', $encodedTeapet);

		?>
		<!--success message -->
		<p class="success">Order received. Thank you!</p>
		<?php 
		} 
	}
?>


<form method="POST">
	<field>
		<label for="pet-name">What's your pet's name?</label>
		<input id="pet-name" type="text" name="pet-name" value="<?=$petName?>">
		<?php if ($petNameError) { ?>
			<p class="error"><?=$petNameError?></p>
		<?php } ?>
	</field>

	<field>
		<label for="type">What type of teapet do you want?</label>
		<select id="type" name="type">
			<option value="Frog">Frog</option>
			<option value="Pig">Pig</option>
			<option value="Cat">Cat</option>
			<option value="Dragon">Dragon</option>
			<option value="Turtle">Turtle</option>
			<option value="Buddha">Buddha</option>
			<option value="Pee-Pee-Boy">Pee-Pee Boy</option>
		</select>
	</field>

	<field>
		<?php include('country-label.php') ?>
	</field>

	<field>
		<label for="material">What material do you want?</label>
		<select id="material" name="material">
			<option value="Zisha">Zisha</option>
			<option value="Ceramic">Ceramic</option>
			<option value="Stone">Stone</option>
			<option value="Porcelain">Porcelain</option>
		</select> 
	</field>

	<field>
		<label for="dimensions">How tall will it be?</label>
			<select id="dimensions" name="dimensions">
				<option value="2.54cm">2.54cm</option>
				<option value="5.08cm">5.08cm</option>
				<option value="7.62cm">7.62cm</option>
			</select>
	</field>

	<field>
		<label for="message">What's your teapet's origin story?</label>
		<textarea id="description" name="description" rows="5"><?=$description?></textarea>
		<?php if ($descriptionError) { ?>
			<p class="error"><?=$descriptionError?></p>
		<?php } ?>
	</field>

	<button type=submit name="submitted">
		Submit
	</button>
</form>