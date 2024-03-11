<cta-text>
	<h2 class='strong-loud-voice'><?=$section['heading']?></h2>
	<p class='calm-voice'><?=$section['text']?></p>
</cta-text>
<ul class='action-buttons'>
	<?php if($page == 'contact') {
		include('templates/components/email-input-solo.php'); 
	} ?>
	<?php foreach($section['actions'] as $action) { ?>
	<li>
		<a class='<?=$action['class']?>' href='#'><?=$action['text']?>
		</a>
	</li>
	<?php } ?>
</ul>