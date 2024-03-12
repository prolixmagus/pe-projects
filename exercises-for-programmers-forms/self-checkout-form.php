<?php include('code/self-checkout-code.php'); ?>


<section class="form-group">
	<form-explanation>
		<inner-column>
			<h2 class="form-title"><a class="refresh" href="?">Self-Checkout</a></h2>
			<p class="calm-voice">Exercise explanation</p>
		</inner-column>
	</form-explanation>

	<form-section>
		<inner-column>
			
			<form method="POST">

				<h2>Input</h2>

				<div class="checkout-field">
					<field-set class='field'>
						<label for="item1">Item 1</label>
						<input id ="item1" type="text" name="item1" value="<?=$item1['name']?>" required />
					</field-set>

					<field-set class='field'>
						<label for="amount1">Quantity</label>
						<input class='numbertype' id ="amount1" type="number" name="amount1" value="<?=$item1['amount']?>" min="0" required />
					</field-set>

					<field-set class='field'>
						<label for="price1">Price</label>
						<input class='numbertype' id ="price1" type="number" step=".01" name="price1" value="<?=$item1['price']?>" min="0" required />
					</field-set>
				</div>

				<div class="checkout-field">
					<field-set class='field'>
						<label for="item2">Item 2</label>
						<input id ="item2" type="text" name="item2" value="<?=$item2['name']?>" required />
					</field-set>

					<field-set class='field'>
						<label for="amount2">Quantity</label>
						<input class='numbertype' id ="amount2" type="number" name="amount2" value="<?=$item2['amount']?>" min="0" required />
					</field-set>

					<field-set class='field'>
						<label for="price2">Price</label>
						<input class='numbertype' id ="price2" type="number" step=".01" name="price2" value="<?=$item2['price']?>" min="0" required />
					</field-set>
				</div>

				<div class="checkout-field">
					<field-set class='field'>
						<label for="item3">Item 3</label>
						<input id ="item3" type="text" name="item3" value="<?=$item3['name']?>" required />
					</field-set>

					<field-set class='field' >
						<label for="amount3">Amount</label>
						<input class='numbertype' id ="amount3" type="number" name="amount3" value="<?=$item2['amount']?>" min="0" required />
					</field-set>

					<field-set class='field'>
						<label for="price3">Price</label>
						<input class='numbertype' id ="price3" type="number" step=".01" name="price3" value="<?=$item3['price']?>" min="0" required />
					</field-set>
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
					<p class="output-voice">Subtotal: $<?=$subtotal?></p>
					<p class="output-voice" style="font-size: .9rem">Tax: $<?=$salesTax?></p>
					<p class="output-voice">Total: $<?=$total?></p>
				</output>
		
		</inner-column>
	</section>
<?php } ?>