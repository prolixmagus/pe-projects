<?php
$roundedTotal = "";
$output = "";

	if (isset($_POST["pixel"])) {
		$input = $_POST["input"];
		$roundedTotal = round(floatval($input) / 16, 3);
		$output = $roundedTotal . "rem";
	}

	if (isset($_POST["rem"])) {
		$input = $_POST["input"];
		$roundedTotal = round(floatval($input) * 16, 3);
		$output = $roundedTotal . "px";

	}
?>
<main>

	<form-explanation>
		<inner-column>
			<h2 class=form-title><a class="refresh" href="?">Pixel ⇄ Rem Converter</a></h2>
		</inner-column>
	</form-explanation>

	<section class='form-group'>
		<inner-column>

			<form method="POST">
				<div class="field">
					<label class="pixelated" for="input">enter font size</label>

					<input id="input" type="number" name="input" value="<?=$input?>" min="0">
				</div>

				<action-buttons>
					<button class="pixel-button" type="submit" name="pixel">
						Convert to rem
					</button>

					<button class="rem-button" type="submit" name="rem">
						Convert to pixels
					</button>

					<button class="clear-button" type="submit" name="clear">
						x clear
					</button>
				</action-buttons>	
			</form>


			<?php
			if (isset($_POST["pixel"]) || isset($_POST["rem"]) ) { ?>
				<arrow class="right-arrow">
					<img src="images/arrow.svg">
				</arrow>

				<arrow class="down-arrow">
					<img src="images/down-arrow.svg">
				</arrow>
			<?php } ?>

			<output>
				<p class="output"><?=$output?></p>
			</output>
		</inner-column>
	</section>

</main>
		