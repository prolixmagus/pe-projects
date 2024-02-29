<?php
//nouns

//length
	$length = '';
	$width = '';
	$gallons = 350;


	function calculatePaintNeeded ($gallons, $area) {
		$gallonsNeeded = intval($area) / $gallons;
		return ceil($gallonsNeeded);
	}

	if ( isset( $_POST['submitted'] ) ) {
		$length = $_POST['length'];
		$width = $_POST['width'];
		$area = $length * $width;

		$totalPaint = calculatePaintNeeded($gallons, $area);
	}

?>


<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Exercise Name</a></h2>
			<p class="calm-voice">Exercise explanation</p>
		</inner-column>
	</form-explanation>

	<form-section>
		<inner-column>
			
			<form method="POST">

				<h2>Input</h2>

				<div class="field">
					<label for="length">What is the length of the room in feet?</label>
					<input id ="length" type="number" name="length" value="<?=$length?>" required />
				</div>

				<div class="field">
					<label for="width">What is the width of the room in feet?</label>
					<input id ="width" type="number" name="width" value="<?=$width?>" required />
				</div>


				<action-buttons>

					<button class="submit-button" type="submit" name="submitted">
						Submit
					</button>

					<button class="clear-button" type="submit" name="clear">
						x clear
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
					<p class="output-voice">You will need to purchase <?=$totalPaint?> gallons of paint to cover <?=$area?> square feet.</p>
				</output>
		
		</inner-column>
	</section>
<?php } ?>