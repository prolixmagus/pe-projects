<?php

$database = read();

if ( isset($_GET['id']) ) {
	$this_symbol_id = $_GET['id'];
}

$detail = getSymbolById($database, $this_symbol_id);


if ( isset($_POST['submitted']) ) {
	$updatedSymbol = [
		"id" => uniqid(),
		"symbol" => $_POST["symbol"],
	];
	update($database, $this_symbol_id, $updatedSymbol);
	save($database);
}

?>
<h1>🔃🏁</h1>

<p><?=$detail['symbol']?></p>

<form method="POST">
	<label for="symbol"></label>
	<input id ="symbol" name="symbol" type="text" value="<?=$detail['symbol']?>" required />
	<button type='submit' name='submitted'>➕</button>
</form>


