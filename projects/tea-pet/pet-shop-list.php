<?php include("tea-pet-data.php"); ?>

<inner-column>
	<ul class='item-grid'>
		<?php foreach($tea_pets as $tea_pet) { ?>
			<li>
				<a href='?page=detail&tea-pet=<?=$tea_pet["id"]?>'>
					<picture>
						<img src="https://placehold.co/250x250">
						<ul class="preview-details">
							<h2 class="pet-name"><?=$tea_pet["pet-name"]?></li>
							<h3 class="origin"><?=$tea_pet["origin"]?></li>
						</ul>
					</picture>
				</a>
			</li>
		<?php } ?>
	</ul>
</inner-column>