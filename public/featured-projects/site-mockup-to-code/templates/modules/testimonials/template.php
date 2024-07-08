<testimonial-wrapper>
	<h2 class='loud-voice'><?=$section['heading']?></h2>
	<p class='calm-voice'><?=$section['sub-heading']?></p>
	<quote-wrapper>
		<?php if ($page == 'contact') { ?>
		<picture>
			<img src="images/square.jpg" />
		</picture>
	<?php } ?>
		<ul class='client-quotes'>
			<?php foreach($section['testimonials'] as $testimonial) { ?>
				<li class='client-quote-item'>
					<?php if($page == 'home') { ?>
						<ul class='ratings'>
							<?php for ($i = 0; $i < 5; $i++) { ?>
								<li class='star'>
									<?php include('templates/components/star.php');?>
								</li>
							<?php }?>
						</ul>
					<?php } ?>
					<p class='strong-voice'><?=$testimonial['text']?></p>
					<employee-info>
						<?php if ($page == 'home' || $page == 'about') {
							include('templates/components/icon.php'); 
						} ?>
						<div class='employee-info-wrapper'>
							<p class='employee-name'><?=$testimonial['employee']?></p>
							<?php if($page == 'about' || $page == 'contact') { ?>
							<p class='quiet-voice'><?=$testimonial['role']?></p>
							<?php } ?>
						</div>
					</employee-info>
				</li>
			<?php } ?>
		</ul>
	</quote-wrapper>
</testimonial-wrapper>