
<?php 

	$id = $monster["id"];
	$name = $monster["name"];
	$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old. Let's be a family!";
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];

	if ($status == 1) {
		$status = "Adopted! 🎉";
	} else {
		$status = "Not yet adopted ... 😔";
	} 
?>


<monster-card id="<?=$id?>">

	<identification>
		<h2 class="name"><?=$name?></h2>
		<picture class="portrait cover">
			<img src="<?=$portrait?>">
		</picture>
	</identification>
	
	<info-module>

		<about>
			<h2 class='attention-voice'>About</h2>
			<p class="story calm-voice"><?=$story?></p>
		</about>
		<status>
			<h2 class='attention-voice'>Status</h2>
			<p class='status calm-voice'><?=$status?></p>
		</status>

	</info-module>

</monster-card>


	




