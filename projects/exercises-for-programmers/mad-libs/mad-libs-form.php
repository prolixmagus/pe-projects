<?php 
	$name = "";
	$noun1 = "";
	$adjective1 = "";
	$food = "";
	$bodyPart = "";
	$verb = "";
	$noun2 = "";
	$verb2 = "";
	$message = "";

	if ( isset($_POST["submitted"]) ) {
		$name = $_POST["name"];
		$noun1 = $_POST["noun1"];
		$adjective1 = $_POST["adjective1"];
		$food = $_POST["food"];
		$bodyPart = $_POST["body-part"];
		$verb = $_POST["verb"];
		$noun2 = $_POST["noun2"];
		$verb2 = $_POST["verb2"];
		$message = "One day, the president asked $name to hold a/n $noun1 that contained top $adjective1 launch codes. Before $name could finish eating their $food, the $noun1 was handcuffed to their $bodyPart. \"I can't $verb this!\" shouted $name, and they threw the $noun1 into the $noun2. The FBI $verb2 $name and they were never seen again.";
	}


?>

<a class="refresh" href="?">Mad-Libs</a>

<inner-column>

	<form method='POST'>
		<h2>Input</h2>
		
		<div class="field">
			<label type="text" for="name">
			Enter a name</label>
			
			<input type="text" name="name" id="name" value="<?=$name?>">
		</div>

		<div class="field">
			<label type="text" for="noun1">Enter a noun</label>

			<input type="text" name="noun1" id="noun1" value="<?=$noun1?>">
		</div>

		<div class="field">
			<label type="text" for="adjective1">Enter an adjective</label>

			<input type="text" name="adjective1" id="adjective1" value="<?=$adjective1?>">
		</div>

		<div class="field">
			<label type="text" for="food">Enter a type of food</label>

			<input type="text" name="food" id="food" value="<?=$food?>">
		</div>

		<div class="field">
			<label type="text" for="body-part">Enter a body part</label>

			<input type="text" name="body-part" id="body-part" value="<?=$bodyPart?>">
		</div>

		<div class="field">
			<label type="text" for="verb">Enter a verb</label>

			<input type="text" name="verb" id="verb" value="<?=$verb?>">
		</div>

		<div class="field">
			<label type="text" for="noun2">Enter a noun</label>

			<input type="text" name="noun2" id="noun2" value="<?=$noun2?>">
		</div>

		<div class="field">
			<label type="text" for="verb2">Enter a verb (past)</label>

			<input type="text" name="verb2" id="verb2" value="<?=$verb2?>">
		</div>

		<action-buttons>
			<button class="submit-button" type="submit" name="submitted">
				Submit
			</button>

			<button class="clear-button" type="submit" name="reset">
				Reset
			</button>
	</form>

</inner-column>

<inner-column>

	<output>
		<h2>Output</h2>
		<div>
			<p class="message"><?=$message?></p>
		</div>
	</output>

</inner-column>

<?php
displayCode($_POST);
?>





