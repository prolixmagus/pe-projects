<?php 
	$string = "";
	$countedString = "";
	$message = "";
	
	if ( isset($_POST['submitted']) ) {
		$string = $_POST['string'];
		$countedString = strlen($string);
		$message = "$string has $countedString characters.";
	}


?>

<a class="refresh" href="?">Counting Characters</a>

<inner-column>

	<form method='POST'>
		<h2>Input</h2>
		
		<div class='field'>
			<label for='string'>Please input a string:</label>
			<input type='text' id='string' name='string' value='<?=$string?>'>
		</div>

		<action-buttons>
			<button class='submit-button' type='submit' name='submitted'>
				Submit
			</button>

			<button class='clear-button' type='submit' name='clear'>
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

