<overview-container>
	<company-overview>
		<?php if ($page == 'contact') { ?>
			<p class="calm-voice"><?=$section['teaser'];?></p>
		<?php } ?>
		<h2 class="loud-voice"><?=$section['heading'];?></h2>
		<p class="calm-voice"><?=$section['sub-heading'];?></p>
		<?php if ($page == 'home') { ?>
			<picture>
				<img src="images/square.jpg" />
			</picture>
		<?php } ?>
	</company-overview>
	<article-gallery>
		<?php foreach($section['article'] as $article) { ?>
			<article-card class='article-card'>
				<?php include('templates/components/icon.php')?>
					<article-content>
						<h2 class="strong-attention-voice"><?=$article['small-heading']?></h2>
						<p class="quiet-voice"><?=$article['article-text']?></p>
					</article-content>
			</article-card>
		<?php } ?>

	</article-gallery>

</overview-container>

