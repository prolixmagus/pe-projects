<overview-container>
	<company-overview>
		<h2 class="attention-voice"><?=$section['heading'];?></h2>
		<p class="calm-voice"><?=$section['sub-heading'];?></p>
		<picture>
			<img src="images/square.jpg" />
		</picture>
	</company-overview>
	<article-gallery>
		<?php foreach($section['article'] as $article) { ?>
			<article-card class='<?=$article['article-card']?>'>
				<?php include('templates/components/icon.php')?>
					<article-content>
						<h2 class="small-heading-voice"><?=$article['small-heading']?></h2>
						<p class="calm-voice"><?=$article['article-text']?></p>
					</article-content>
			</article-card>
		<?php } ?>

	</article-gallery>

</overview-container>

