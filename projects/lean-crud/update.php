<?php

$database = read();

if ( isset($_GET['id']) ) {
	$this_symbol_id = $_GET['id'];
}

$detail = getSymbolById($database, $this_symbol_id);
$updatedSymbol = $detail;


if ( isset($_POST['submitted']) ) {
	$updatedSymbol = [
		"id" => $detail['id'],
		"symbol" => $_POST["symbol"],
	];
	update($database, $this_symbol_id, $updatedSymbol);
	save($database);
}

?>
<h1><?=$updatedSymbol['symbol']?></h1>

<form method="POST">
	<label for="symbol"></label>
	<input id ="symbol" name="symbol" type="text" value="<?=$updatedSymbol['symbol']?>" required />
	<button type='submit' name='submitted'>🔃</button>
</form>



