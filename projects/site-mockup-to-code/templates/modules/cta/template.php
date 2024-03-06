<?php
?>

<cta-text>
	<h2 class='<?=$section['heading-class']?>'><?=$section['heading']?></h2>
	<p class='<?=$section['text-class']?>'><?=$section['text']?></p>
</cta-text>
<ul class='action-buttons'>
	<?php foreach($section['actions'] as $action) { ?>
	<li>
		<a class='<?=$action['class']?>' href='#'><?=$action['text']?>
		</a>
	</li>
	<?php } ?>
</ul>