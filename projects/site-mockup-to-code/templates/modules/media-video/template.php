<video-heading>
	<?php if ($page == 'about') { include('templates/components/icon.php'); } ?>
	<p class="calm-voice"><?=$section['teaser'];?></p>
	<h2 class="loud-voice"><?=$section['heading'];?></h2>
	<p class="calm-voice"><?=$section['sub-heading'];?></p>
</video-heading>
<?php if ($page == 'home') { ?>
	<iframe width="510" height="300" src="https://www.youtube.com/embed/6HsepgHlIFg" title="Clouds 4K free footage" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
	</iframe>
<?php } elseif ($page == 'about') { ?>
	<ul class='action-buttons'>
		<?php foreach($section['actions'] as $link) { ?>
			<li>
				<a class='<?=$link['class']?>' href='#'><?=$link['text']?>
				</a>
			</li>
		<?php } ?>
	</ul>
<?php } ?>
