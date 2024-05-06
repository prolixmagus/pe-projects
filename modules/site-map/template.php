<?php 
	$sitemapData = read('data/site-map-database.json');
	?>
	
<site-map>
	<?php foreach ($sitemapData['user-menu'] as $usermenu) { ?>
		<nav>
			<ul>
				<?php foreach($usermenu['links'] as $link) { ?>
					<li class='quiet-voice'>
						<a href='<?=$link['link']?>'><?=$link['content']?></a>
					</li>
				<?php } ?>
			</ul>
		</nav>
	<?php } ?>
</site-map>
