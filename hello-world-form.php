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

<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Hello, World</a></h2>
			<p class="indoor-voice">One of the first programs that demonstrates the relationship between entering information and receiving a response. Fortunately for humans, we acquire langauge naturally. Computers, on the other hand, need instructions.</p>
			<p class="indoor-voice">Type in your name and you'll receive a greeting!</p>
		</inner-column>
	</form-explanation>

	<form-section>
		<inner-column>
			<form method="POST">

				<h2>Input</h2>

				<div class="field">
					<label for="name">What is your name?</label>
					<input id ="name" type="text" name="name" value="<?=$name?>" required />
				</div>

				<action-buttons>

					<button class="submit-button" type="submit" name="submitted">
						Submit
					</button>

					<button class="clear-button" type="submit" name="clear">
						clear x
					</button>

				</action-buttons>
			</form>
		</inner-column>
	</form-section>
</section>

<?php if (isset($_POST["submitted"]) ) { ?>
	<section class="form-output">
		<inner-column>

				<output>
					<h2>Output</h2>
					<p class="output-voice"><?=$message?></p>
				</output>
		
		</inner-column>
	</section>
<?php } ?>
