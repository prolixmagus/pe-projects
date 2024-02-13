<?php include("functions.php"); ?>

<inner-column>
	<h2 class="loud-voice">The Tea Pet Shop</h2>

	<ul class='item-grid'>
		<?php 
			$tea_pets = readDatabase();

			foreach ($tea_pets as $tea_pet) { ?>
			<li>
				<a href='?page=detail&tea-pet=<?=$tea_pet["id"]?>'>
					<picture>
						<img src="<?=$tea_pet["image"]?>">
						<dl class="preview-details">
							<div class="detail-container">
								<dt>Type:</dt> 
								<dd class="pet-name"><?=$tea_pet["pet-name"]?></dd>
							</div>
							<div class="detail-container">
								<dt>Origin:</dt>
								<dd class="origin"> <?=$tea_pet["origin"]?></dd>
							</div>
							<div class="detail-container">
								<dt>Material:</dt> 
								<dd class="material"> <?=$tea_pet["material"]?></dd>
							</div>
						</dl>
					</picture>
				</a>
			</li>
		<?php } ?>
	</ul>
</inner-column>