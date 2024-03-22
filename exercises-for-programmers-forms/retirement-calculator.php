<?php include('scripts/retirement-calculator-code.php'); ?>

<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Retirement Calculator</a></h2>
			<p class="calm-voice">Aside from looking wistfully into the future, this exercise was designed to solidify a separation of concerns when programming: keeping input, calculations, and processing separate (through functions, classes, or objects). I'm just hoping to make it to next year!</p>
		</inner-column>
	</form-explanation>

	<form-section>
		<inner-column>
			
			<form method="POST">

				<h2>Input</h2>

				<div class="field">
					<label for="currentAge">How old are you?</label>
					<input id ="currentAge" type="number" name="currentAge" min=0 value="" required />
				</div>

				<div class="field">
					<label for="retirementAge">When would you like to retire?</label>
					<input id ="retirementAge" type="number" name="retirementAge" min=0 value="" required />
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
				<?php if ($currentAge > $retirementAge) { ?>
					<h2>Output</h2>
					<p class="output-voice">Time Travel doesn't exist yet!</p>
				<?php } else { ?>
					<h2>Output</h2>
					<p class="output-voice">You have <?=$yearsLeft?> years left until you can retire.
					<p class="output-voice">It's <?=$currentYear?>, so you can retire in <?=$retirementYear?></p>
				<?php } ?>
			</output>
		</inner-column>
	</section>
<?php } ?>