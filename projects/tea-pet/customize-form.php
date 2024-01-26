<?php 
$petname = "";
$type = "";
$material = "";
$requests = "";
$hasPetname = false;
$petnameError = false;
$customTeapet = "";
$id = "";

if ( isset($_POST["submitted"]) ) {

	if ( isset($_POST["petname"]) ) {
		$petname = $_POST["petname"];
	}

	if ( strlen( $petname ) > 0 ) {
		$hasPetname = true;
	} else {
		$petnameError = "*Please enter a name.";
	}

	if ( isset($_POST["type"]) ) {
		$type = $_POST["type"];
	}

	if ( isset($_POST["material"]) ) {
		$material = $_POST["material"];
	}

	if ( isset($_POST["requests"]) ) {
		$requests = $_POST["requests"];
	}

	if ($hasPetname) {
		$customTeapet = [
			$id => "",
			$petname => $_POST["petname"],
			$type => $_POST["type"],
			$material => $_POST["material"],
			$requests => $_POST["requests"],
		]; ?>

		<p class="success">Order received! Thank you!</p>
	<?php }
}

?>

<form method="POST">
	<field>
		<label for="petname">What is your pet's name?</label>
		<input id="petname" type="text" name="petname" value="<?=$petname?>">
		<?php if ($petnameError) { ?>
			<p class="error"><?=$petnameError?></p>
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

	<field class="requests">
		<label for="message">Please include any special requests:</label>
		<textarea id="requests" type="textarea" name="requests" value="<?=$requests?>" rows="5"></textarea>
	</field>

	<button type=submit name="submitted">
		Submit
	</button>
</form>