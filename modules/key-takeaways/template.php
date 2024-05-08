<?php 
	$takeaways = $section['takeaways'] ?? [1, 2, 3];
?>

<key-takeaways>
	<h2>Key Takeaways</h2>

	<ul>
		<?php foreach ($takeaways as $takeaway) { 
			$point = $takeaway['teaser'] ?? "A key point ... as a teaser!";
			$description = $takeaway['description'] ?? "An elaboration of the key point. This module is differentiated for people who want to read more about what interests them or just want the main gist."

			?>
			<li>
				<details>
					<summary>
						<h3><?=$point?></h3>
					</summary>
				<?=$description?>. 
				</details>
			</li>
		<?php } ?>
	</ul>
<key-takeaways>
