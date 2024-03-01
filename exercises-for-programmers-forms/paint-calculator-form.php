<?php
	include('code/paint-calculator-code.php');
?>

<section class="form-group">

	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Paint Calculator</a></h2>
			<p class="calm-voice">The goal of this exercise is to use the <code>ceil()</code> function to round <em>up</em>, since we can't buy fractions of a paint can. Assuming that a gallon of paint covers 350 square feet, I created a program to find how many gallons you needed. I also included the option to paint a circular room. They wanted me to do an "L" shaped room but what is this, geometry class?</p>
		</inner-column>
	</form-explanation>

	<form-section>
		<inner-column>
			
			<form method="POST">

				<h2>Input - Rectangular Room</h2>

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
		
<section class="form-group">
	<form-section>
		<inner-column>
			<form method="POST">

				<h2 style='border-top: 1px solid black; padding-top: 1rem;'>Input - Circular Room</h2>

				<div class="field">
					<label for="diameter">What is the diameter of the room in feet?</label>
					<input id ="diameter" type="number" name="diameter" value="<?=$diameter?>" required />
				</div>

				<action-buttons>

					<button class="submit-button" type="submit" name="circle">
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

<?php if (isset($_POST["circle"])) { ?> 
	<section class="form-output">
		<inner-column>

				<output>
					<h2>Output</h2>
					<p class="output-voice">You will need to purchase <?=$totalPaint?> gallons of paint to cover <?=$area?> square feet.</p>
				</output>
		
		</inner-column>
	</section>
<?php } ?> 

