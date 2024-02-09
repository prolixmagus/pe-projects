<?php
?>

<form method="POST">
	<fieldset>

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
	</fieldset>
</form>
