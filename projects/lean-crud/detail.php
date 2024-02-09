<?php

$symbols = read();

if ( isset($_GET['id']) ) {
	$this_symbol_id = $_GET['id'];
}

$detail = getSymbolById($symbols, $this_symbol_id);
?>

	<h1><?=$detail['symbol']?></h1>
	<nav class="detail-links">
		<a href="?page=update&id=<?=$detail['id']?>"><span>🔃</span></a>
		<a href="?page=delete&id=<?=$detail['id']?>"><span>❌</span></a>
	</nav>

