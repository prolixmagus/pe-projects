<cta-wrapper>
	<?php if ($page == 'contact') { ?>
		<picture>
			<img src="images/square.jpg" />
		</picture>
	<?php } ?>
	
	<cta-content>
		<cta-text>
			<?php if ($page == 'home' || $page == 'about') { ?>
				<p class='calm-voice'><?=$section['text']?></p>
			<?php } ?>

			<h2 class='loud-voice'><?=$section['heading']?></h2>

			<?php if ($page == 'contact') { ?>
				<p class='calm-voice'><?=$section['text']?></p>
			<?php } ?>
		</cta-text>

		<ul class='action-buttons'>
			<?php if ($page == 'contact') { include('templates/components/email-input-solo.php'); } ?>

			<?php foreach($section['actions'] as $action) { ?>
			<li>
				<a class='<?=$action['class']?>' href='#'><?=$action['text']?>
				</a>
			</li>
			<?php } ?>

		</ul>
	</cta-content>
</cta-wrapper>