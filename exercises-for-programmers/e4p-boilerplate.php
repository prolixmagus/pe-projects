<?php
?>


<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Exercise Name</a></h2>
			<p class="indoor-voice">Exercise explanation</p>
		</inner-column>
	</form-explanation>

	<form-section>
		<inner-column>
			
			<form method="POST">

				<h2>Input</h2>

				<div class="field">
					<label for="[[change]]">Label</label>
					<input id ="[[change]]" type="text" name="[[change]]" value="<?=$unknown?>" required />
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
					<p class="output-voice"><?=$message?></p>
				</output>
		
		</inner-column>
	</section>
<?php } ?>