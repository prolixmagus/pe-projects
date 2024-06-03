<?php include('scripts/counting-characters-code.php')
?>

<section class="form-group section-grid">
	<inner-column class="inner-grid">
		<form-explanation>
				<h2 class="form-title"><a class="refresh" href="?">Counting Characters</a></h2>
				<p class="calm-voice">PHP technically does not count the characters in a given string, rather, the amount of bytes that make up the string. Usually byte to character is 1:1, but certain languages (like Arabic or Chinese) are several bytes per character!</p>
				<p class="calm-voice">TL;DR I made a form to count the letters in a word.</p>
		</form-explanation>
	</inner-column>
</section>


<form-section class="section-grid">
	<inner-column class="inner-grid">
		
		<form id='counting-characters' method="POST">

			<fieldset class='toggle-field'>
				<input id='toggle' class='toggle' type='checkbox'>
				<label class ='switch' for='toggle'></label>
				<p>PHP | JS</p>
			</fieldset>

			<h2>Input</h2>

			<div class="field">
				<label for="string">Write anything!</label>
				<div class='input-wrapper'>
					<input id ="string" type="text" name="string" value="<?=$string?>" required />
					<ul class='character-count-output'>
						<li id='word-count'></li>
						<li id='character-count'></li>
					</ul>
				</div>
			</div>

			<action-buttons>

				<button class="submit-button" type="submit" name="submitted">
					Submit
				</button>

				<button class="clear-button" type="button" name="clear">
					clear x
				</button>

			</action-buttons>
		</form>
	</inner-column>
</form-section>

<?php if (isset($_POST["submitted"]) ) { ?>
	<section class="form-output section-grid">
		<inner-column class="inner-grid">

				<output>
					<h2>Output</h2>
					<p class="output-voice"><?=$message?></p>
				</output>
		
		</inner-column>
	</section>
<?php } ?>