

<graphic-diptych>
	<picture>
		<?php if ($page === 'default') { ?>
			<img src="https://peprojects.dev/images/landscape.jpg" alt='$todo'>
		<?php } else if ($page === 'garden') { ?>
			<img src='images/background/garden-diptych.jpg' alt='$todo'>
		<?php } ?>
	</picture>
	
	<text-content>
		<h1 class='loud-voice'><?=$section['title']?></h1>

		<p><?=$section['copy']?></p>
	</text-content>

</graphic-diptych>


