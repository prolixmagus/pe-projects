

<?php
	include('scripts/rectangular-room-code.php')
?>


<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Area of a Rectangular Room</a></h2>
			<p class="calm-voice">&#8220;Create a program that calculates the area of a room.&#8221; But not just any room - a rectangular room! No squares, circles, or triangles allowed.</p>
		</inner-column>
	</form-explanation>

	<form-section>
		<inner-column>
			
			<form method="POST">

				<h2>Input</h2>

				<div class="field">
					<label for="length">What is the length of the room in feet?</label>
					<input id ="length" type="number" name="length" value="<?=$length?>" min="0" required />
				</div>

				<div class="field">
					<label for="width">What is the width of the room in feet?</label>
					<input id ="width" type="number" name="width" min="0" value="<?=$width?>" required />
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
					<p class="output-voice">You entered dimensions of <?=format_decimale($length)?> feet by <?=format_decimale($width)?> feet.</p>
					<p class="output-voice">The area is <?=format_decimale($totalSquareFeet)?> feet or <?=format_decimale($totalSquareMeters)?> meters.</p>
				</output>
		
		</inner-column>
	</section>
<?php } ?>