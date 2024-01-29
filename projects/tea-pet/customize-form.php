<?php 

$teapetData = "";
$petName = "";
$description = "";
$hasDescription= "";
$descriptionError= "";
$haspetName = false;
$petNameError = false;
$customTeapet = "";
$id = "";

/* READ function

	function readTeapetData() {
	$getTeapet = file_get_contents('teapet.json');
 	return json_decode($getTeapet, true);
} 
 */

if ( isset($_POST["submitted"]) ) {

	//setting variables for $_POST key => values
	if ( isset($_POST["petName"]) ) {
		$petName = $_POST["petName"];
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
			"petName" => $_POST["petName"],
			"type" => $_POST["type"],
			"material" => $_POST["material"],
			"description" => $_POST["description"],
		];

		//READ and decode json file to PHP
	 	$getTeapet = file_get_contents('teapet.json');
	 	$decodedTeapet = json_decode($getTeapet, true);

	 	//WRITE file into new array so no overwriting
	 	$teapetDataArray = $decodedTeapet;

	 	//UPDATE the array
	 	$teapetDataArray[] = $customTeapet;

	 	//SAVE the data to JSON
		$encodeTeapet = json_encode($teapetDataArray);
		file_put_contents('teapet.json', $encodeTeapet);
		
		//get updated JSON file
		$teapetData = file_get_contents('teapet.json');
		$displayTeapet = json_decode($teapetData, true);

		
		echo "<pre>";
		var_dump($displayTeapet);
		echo "</pre>";

		?>
		<!--success message -->
		<p class="success">Order received. Thank you!</p>
		<?php 
		} 
	}
?>


<form method="POST">
	<field>
		<label for="petName">What's your pet's name?</label>
		<input id="petName" type="text" name="petName" value="<?=$petName?>">
		<?php if ($petNameError) { ?>
			<p class="error"><?=$petNameError?></p>
		<?php } ?>
	</field>

	<field>
		<label for="type">Type</label>
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
		<label for="material">Material</label>
		<select id="type" name="material">
			<option value="Zisha">Zisha</option>
			<option value="Ceramic">Ceramic</option>
			<option value="Stone">Stone</option>
			<option value="Porcelain">Porcelain</option>
		</select> 
	</field>

	<field>
		<label for="message">What's your teapet's origin story?</label>
		<textarea id="description" type="textarea" name="description" rows="5"><?=$description?></textarea>
		<?php if ($descriptionError) { ?>
			<p class="error"></p>
		<?php } ?>
	</field>

	<button type=submit name="submitted">
		Submit
	</button>
</form>