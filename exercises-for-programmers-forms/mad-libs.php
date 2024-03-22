<?php 
	include("scripts/mad-libs-code.php") 
?>

<side-by-side-container>
	<section class="form-group">

		<form-explanation>
			<inner-column>
				<h2 class="form-title"><a class="refresh" href="?">Mad-Libs</a></h2>
				<p class="calm-voice">There is nothing better in life than sinking into the backseat of your parent's car on a sunny day, listening to music and burning through a dozen or so Mad-Libs while your parents argue over whose fault it was that they missed the the last exit.</p>
				<p class="calm-voice">Here is a PHP version of Mad-Libs. Write in your choices, click submit, and enjoy the story from server-generated HTML!</p>
			</inner-column>
		</form-explanation>

		<form-section>
			<inner-column>

				<form method='POST'>
					<h2>Input</h2>
					
					<div class="field mad-libs">
						<label for="name">
						Enter a name</label>
						
						<input type="text" name="name" id="name" value="<?=$name?>" required />
					</div>

					<div class="field mad-libs">
						<label type="text" for="noun1">Enter a <span class="word-assist" title="person, place, or thing">noun</span></label>

						<input type="text" name="noun1" id="noun1" value="<?=$noun1?>" required />
					</div>

					<div class="field mad-libs">
						<label type="text" for="adjective1">Enter an <span class="word-assist" title="a description word">adjective</span></label>

						<input type="text" name="adjective1" id="adjective1" value="<?=$adjective1?>" required />
					</div>

					<div class="field mad-libs">
						<label type="text" for="food">Enter a type of food</label>

						<input type="text" name="food" id="food" value="<?=$food?>" required />
					</div>

					<div class="field mad-libs">
						<label type="text" for="body-part">Enter a body part</label>

						<input type="text" name="body-part" id="body-part" value="<?=$bodyPart?>" required />
					</div>

					<div class="field mad-libs">
						<label type="text" for="verb">Enter a <span class="word-assist" title="an action word">verb</span></label>

						<input type="text" name="verb" id="verb" value="<?=$verb?>" required />
					</div>

					<div class="field mad-libs">
						<label type="text" for="noun2">Enter a noun</label>

						<input type="text" name="noun2" id="noun2" value="<?=$noun2?>" required />
					</div>

					<div class="field mad-libs">
						<label type="text" for="verb2">Enter a verb (past)</label>

						<input type="text" name="verb2" id="verb2" value="<?=$verb2?>" required />
					</div>

					<action-buttons>
						<button class="submit-button" type="submit" name="submitted">
							Submit
						</button>

						<button class="clear-button" type="submit" name="reset">
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
					<p class="output-voice"><?=$message?></p>
			</output>	
		</inner-column>
	</section>

	<?php } ?>

</side-by-side-container>


