<?php

$symbol = "";

if ( isset($_POST['submitted']) ) {
	$symbol = [
		"id" => uniqid(),
		"symbol" => $_POST["symbol"],
	];

	$database = read();
	$database = create($database, $symbol);
	save($database);
	header("Location: ".$_SERVER['PHP_SELF']."?page=list");
	exit();
}

?>

<h1>➕🏁</h1>
<form method="POST">
	<label for="symbol"></label>
	<input id ="symbol" name="symbol" type="text" value="" required />
	<button type='submit' name='submitted'>➕</button>
</form>


