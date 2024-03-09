<faq-info>
	<h2 class='loud-voice'><?=$section['heading']?></h2>
	<p class='calm-voice'><?=$section['sub-heading']?></p>
</faq-info>
<ul class='question-list'>
	<?php foreach($section['details'] as $detail) { ?>
		<li class='details-item'>
			<details>
				<summary class='strong-voice weighted'><?=$detail['question']?></summary>
				<p class='quiet-voice'><?=$detail['answer']?></p>
			</details>
		</li>
	<?php } ?>
</ul>