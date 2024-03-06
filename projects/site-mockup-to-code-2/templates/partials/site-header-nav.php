<?php
	$module = readModuleData('site-header')
?>

<h2 class='calm-voice'><?=$module['header']?></h2>
<ul class='main-site-menu'>
	<?php foreach ($module['links'] as $link) { ?>
		<li>
			<a class='link-voice' href="<?=$link['link']?>">
				<?=$link['name']?>
			</a>
		</li>
	<?php } ?>
</ul>