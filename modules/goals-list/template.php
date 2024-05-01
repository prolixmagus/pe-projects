<?php 
	$goalsData = read_page_data('goals');
?>
<ul class='goal'>
	<?php foreach($goalsData['sections'] as $section ) { ?>
		<?php foreach($section['goals'] as $goal) { ?>
			<li>
				<p><?=$goal['hope']?></p>
			</li>
		<?php } ?>
	<?php } ?>
</ul>
