
<h1>🏁🏁🏁</h1>

<ul class="list">
<?php 
	$symbols = read();
	foreach($symbols as $symbol) { ?>
		<li>
			<?=$symbol['symbol']?>
			<a href="?page=detail&id=<?=$symbol['id']?>"><span>ℹ️</span></a>
		</li>
	<?php } ?>
</ul>