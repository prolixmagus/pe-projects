<?php include('code/counting-characters-code.php')
?>

<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Counting Characters</a></h2>
			<p class="calm-voice">PHP technically does not count the characters in a given string, rather, the amount of bytes that make up the string. Usually byte to character is 1:1, but certain languages (like Arabic or Chinese) are several bytes per character!</p>
			<p class="calm-voice">TL;DR I made a form to count the letters in a word.</p>
		</inner-column>
	</form-explanation>

<form-section>
	<inner-column>
			
			<form method="POST">

				<h2>Input</h2>

				<div class="field">
					<label for="string">Write anything!</label>
					<input id ="string" type="text" name="string" value="<?=$string?>" required />
				</div>

				<action-buttons>

					<button class="submit-button" type="submit" name="submitted">
						Submit
					</button>

					<button class="clear-button" type="submit" name="clear">
						clear x
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