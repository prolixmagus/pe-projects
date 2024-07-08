<ul>
<?php foreach($content['links'] as $linkContent) { ?>
	<li>
		<a class='link-voice <?=$linkContent['class']?>' href='<?=$linkContent['link']?>'><?=$linkContent['name']?></a>
	</li>
<?php } ?>
</ul>
	