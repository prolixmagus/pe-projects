<?php include('scripts/simple-math-code.php'); ?>


<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Simple Math</a></h2>
			<p class="calm-voice">I have taught students in high school who have trouble with these.</p>
		</inner-column>
	</form-explanation>

	<form-section>
		<inner-column>
			
			<form method="POST">

				<h2>Input</h2>

				<div class="field">
					<label for="firstNumber">Enter a number:</label>
					<input id ="firstNumber" type="number" name="firstNumber" value=<?=$first?> min = 0 required />
				</div>

				<div class="field">
					<label for="secondNumber">Enter a number:</label>
					<input id ="secondNumber" type="number" name="secondNumber" value=<?=$second?> min = 0 required />
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
	</form-section>
</section>

<?php if (isset($_POST["submitted"]) ) { ?>
	<section class="form-output">
		<inner-column>

				<output>
					<h2>Output</h2>
					<?=displayOperations($first, $second)?>
				</output>
		
		</inner-column>
	</section>
<?php } ?>