<?php include('scripts/hello-world-code.php')?>

<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Hello, World</a></h2>
			<p class="calm-voice">One of the first programs that demonstrates the relationship between entering information and receiving a response. Fortunately for humans, we acquire langauge naturally. Computers, on the other hand, need instructions.</p>
			<p class="calm-voice">Type in your name and you'll receive a greeting!</p>
		</inner-column>
	</form-explanation>

	<form-section>
		<inner-column>
			<fieldset class='toggle-field'>
				<input id='toggle' class='toggle' type='checkbox'>
				<label class ='switch' for='toggle'></label>
				<p>PHP | JS</p>
			</fieldset>

			<form method="POST" id="hello-world">

				<h2>Input</h2>

				<div class="field">
					<label for="name">What is your name?</label>
					<input id ="name" type="text" name="name" value="<?=$name?>" required/>
				</div>

				<action-buttons>

					<button class="submit-button" type="submit" name="submitted">
						Submit
					</button>

					<button class="clear-button" type="button" name="clear">
						clear x
					</button>

				</action-buttons>
			</form>
		</inner-column>
	</form-section>
</section>

<?php if (isset($_POST["submitted"]) ) { ?>

	<section class="form-output">
		<inner-column id='form-column'>
				<output>
					<p class='output-voice'><?=$message?></p>
				</output>
		</inner-column>
	</section>

<?php } ?>


