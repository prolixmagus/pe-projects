<?php
?>
<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Printing Quotes</a></h2>
			<p class="indoor-voice">Using quotation marks properly can be tricky when coding, so why not honor the occasion with thinking of famous quotations! </p>
			<p class="indoor-voice">The hardest part is remembering who said it!</p>
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