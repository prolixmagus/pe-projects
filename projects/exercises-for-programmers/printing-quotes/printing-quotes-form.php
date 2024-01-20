<?php 
	$quote = "nothing";
	$author = "Nobody";
	$message = "";

	if ( isset($_POST["submitted"]) ) {
		$quote = $_POST["quote"];
		$author = $_POST["author"];
		$message = "$author says, \"$quote.\"";
	}


?>

<a class="refresh" href="?">Printing Quotes</a>

<inner-column>

	<form method='POST'>
		<h2>Input</h2>
		
		<div class="field">
			<label type="text" for="quote">Think of a quote! (<span style="font-weight: 600; color: red;">no quotation marks</span>)</label>
				<input type="text" name="quote" id="quote" value="<?=$quote?>">
		</div>

		<div class="field">
			<label type="text" for="quote">Who said it?</label>
				<input type="text" name="author" id="author" value="<?=$author?>">
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



