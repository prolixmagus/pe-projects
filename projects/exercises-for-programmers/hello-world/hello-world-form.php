<?php
	$name = "";
	$message = "";

	if ( isset($_POST["submitted"]) ) {

		if ( isset($_POST["name"]) ) {
			$name = $_POST["name"];

			if ( strlen($name) > 30) {
				$message = "Is your name really that long? Try again!";
			} else {
				$message = "Hello, $name, nice to meet you!";
			}
		}
	}
?>

<a class="refresh" href="?">Hello, World!</a>

<inner-column>
	<form method="POST">

		<h2>Input</h2>

		<div class="field">
			<label for="name">What is your name?</label>
			<input id ="name" type="text" name="name" value="<?=$name?>">
		</div>

		<action-buttons>

			<button class="submit-button" type="submit" name="submitted">
				Submit
			</button>

			<button class="clear-button" type="submit" name="clear">
				Clear
			</button>

		</action-buttons>
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
