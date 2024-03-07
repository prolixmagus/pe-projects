<h2 class='attention-voice'><?=$section['heading']?></h2>
<p class='calm-voice'><?=$section['sub-heading']?></p>
<ul class='testimonial'>
	<?php foreach($section['testimonials'] as $testimonial) { ?>
		<li>
			<ul class='ratings'>
				<?php for ($i = 0; $i < 5; $i++) { ?>
					<li class='star'>
						<?php include('templates/components/star.php');?>
					</li>
				<?php }?>
			</ul>
			<p class='strong-voice'><?=$testimonial['text']?></p>
			<?php include('templates/components/icon.php') ?>
		</li>
	<?php } ?>
</ul>