<?php 
	$quote = "nothing";
	$author = "Nobody";
	$message = "";

	if ( isset($_POST["submitted"]) ) {
		$quote = $_POST["quote"];
		$author = $_POST["author"];
		$message = "$author says &ldquo;$quote.&rdquo;";
	}


?>

<?php
?>
<main>

	<section class="form-group">
		<form-explanation>
			<inner-column>
				<h2 class="form-title"><a class="refresh" href="?">Printing Quotes</a></h2>
				<p class="indoor-voice">It's so difficult to remember whos says what anymore!</p>
				<p class="indoor-voice">This short form exercise is used to practice interpolating quotation marks or using escape character. Always important to decide whether you want to use single or double quotes - and to be consistent with it!</p>
			</inner-column>
		</form-explanation>

	<form-section>
		<inner-column>
				
				<form method="POST">

					<h2>Input</h2>

					<div class="field">
						<label type="text" for="quote">Think of a quote! (<span style="font-weight: 600; color: red;">no quotation marks</span>)</label>
						<input type="text" name="quote" id="quote" value="<?=$quote?>" required>
					</div>

					<div class="field">
						<label type="text" for="quote">Who said it?</label>
						<input type="text" name="author" id="author" value="<?=$author?>" required>
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
					<blockquote><?=$message?></blockquote>
				</output>
			
			</inner-column>
		</section>
	<?php } ?>
</main>