<?php 
	$sitemapData = readPageData('site-map-database');
	?>
	
<site-map>
	<?php foreach ($sitemapData['user-menu'] as $usermenu) { ?>
		<nav>
			<ul>
				<?php foreach($usermenu['links'] as $link) { ?>
					<li>
						<a href='<?=$link['link']?>'><?=$link['content']?></a>
					</li>
				<?php } ?>
			</ul>
		</nav>
	<?php } ?>
</site-map>