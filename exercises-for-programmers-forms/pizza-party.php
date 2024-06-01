<?php
	include('scripts/pizza-party-code.php');
?>


<section class="form-group section-grid">
	<inner-column>
		<form-explanation>
				<h2 class="form-title"><a class="refresh" href="?">Pizza Party</a></h2>
				<p class="calm-voice">The objective of this exercise was to create a critical web application that performs the emergency service of calculating how many pieces of pizza can be <em>evenly</em> distributed among a group of friends. Who wants to be the one left with &#188;<sup>th</sup> of slice?</p>
				<p class="calm-voice">This exercise involved using the <code>floor()</code> function as well as a bunch of if-then statements to account for singular/pluralization (piece/pieces, person/people, pizza/pizzas). Let's not forget about the <code>%</code> modulo operator that gives us the remainder of a divisible operation (aka, the leftovers).</p>
		</form-explanation>

		<form-section>
			<form method="POST">

				<h2>Input</h2>

				<div class="field">
					<label for="people">How many party people are demanding pizza at 2:30am?</label>
					<input id ="people" type="number" name="people" value=<?=$people?> min='1' required />
				</div>

				<div class="field">
					<label for="pizzas">How many pizzas did you order?</label>
					<input id ="pizzas" type="number" name="pizzas" value=<?=$pizzas?> min='1' required />
				</div>

				<div class="field">
					<label for="slices-per-pizza">How many slices did they cut the pizza into?</label>
					<input id ="slices-per-pizza" type="number" name="slices-per-pizza" min='1' value=<?=$slicesPerPizza?> required />
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
		</form-section>
	</inner-column>
</section>

<?php if (isset($_POST["submitted"]) ) { ?>
	<section class="form-output">
		<inner-column>

				<output>
					<h2>Output</h2>
					<?php
						if ($people == 1 && $pizzas == 1) { ?>
							<p class="output-voice"><?=$people?> person with <?=$pizzas?> pizza.</p>
						<?php } elseif ($people == 1 && $pizzas !== 1) { ?>
							<p class="output-voice"><?=$people?> person with <?=$pizzas?> pizzas.</p>
						<?php } elseif ($people !== 1 && $pizzas == 1) { ?>
							<p class="output-voice"><?=$people?> people with <?=$pizzas?> pizza.</p>
						<?php } else { ?>
							<p class="output-voice"><?=$people?> people with <?=$pizzas?> pizzas.</p>
						<?php } ?>
					
					<?php 
						if ($distributedSlices == 1) { ?>
							<p class="output-voice">Each person gets <?=$distributedSlices?> piece of pizza.</p>
						<?php } else { ?>
							<p class="output-voice">Each person gets <?=$distributedSlices?> pieces of pizza.</p>
						<?php } ?>
					<?php 
						if ($leftoverSlices == 1) { ?>
							<p class="output-voice">Each person gets <?=$leftoverSlices?> leftover piece</p>
						<?php } else { ?>
							<p class="output-voice">Each person gets <?=$leftoverSlices?> leftover pieces.</p>
						<?php } ?>
				</output>
		
		</inner-column>
	</section>
<?php } ?>