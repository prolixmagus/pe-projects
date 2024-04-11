

<graphic-diptych>
	<picture>
		<?php if ($page === 'default') { ?>
			<img src="https://peprojects.dev/images/landscape.jpg" alt='wireframe'>
		<?php } else if ($page === 'garden') { ?>
			<img src='images/background/garden-diptych.jpg' alt='A stately mansion with a manicured lawn and stone walkway.'>
		<?php } ?>
	</picture>
	
	<text-content>
		<h1 class='loud-voice'><?=$section['title']?></h1>

		<p><?=$section['copy']?></p>
	</text-content>

</graphic-diptych>


