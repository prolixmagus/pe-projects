<?php

$symbols = read();

if ( isset($_GET['id']) ) {
	$this_symbol_id = $_GET['id'];
}

$database = delete($symbols, $this_symbol_id);

save($database);

?>

<p>👋🥹</p>