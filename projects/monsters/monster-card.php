<!-- Associative Array for Card -->

<?php
	$codey = [
		"id" => "001",
		"name" => "Codey",
		"favoriteFood" => "papayas",
		"age" => "5000",
		"adopted" => true, 
		"portrait" => "images/codey.jpg"
	];

	$shadow = [
		"id" => "002",
		"name" => "Shadow",
		"favoriteFood" => "Peanut M&M's",
		"age" => "3",
		"adopted" => false, 
		"portrait" => "images/shadow.jpg"
	];

	$orangina = [
		"id" => "003",
		"name" => "Orangina",
		"favoriteFood" => "oranges",
		"age" => "10",
		"adopted" => false, 
		"portrait" => "images/orangina.jpg"
	];

	$reads = [
		"id" => "004",
		"name" => "Miss Reads-a-lot",
		"favoriteFood" => "printer ink",
		"age" => "20",
		"adopted" => true, 
		"portrait" => "images/miss-reads-a-lot.jpg"
	];

	$limabean = [
		"id" => "005",
		"name" => "Lima Bean",
		"favoriteFood" => "macarons",
		"age" => "34",
		"adopted" => true, 
		"portrait" => "images/limabean.jpg"
	];

	$fragoo = [
		"id" => "006",
		"name" => "Fragoo",
		"favoriteFood" => "Tide Pods",
		"age" => "70",
		"adopted" => false, 
		"portrait" => "images/fragoo.jpg"
	];

	$banana = [
		"id" => "007",
		"name" => "Mr. Banana",
		"favoriteFood" => "bananas",
		"age" => "10 and 3/4",
		"adopted" => true,
		"portrait" => "images/mr-banana.jpg"
	];

	$monsters = [$codey, $shadow, $orangina, $reads, $limabean, $fragoo, $banana];
?>

<!-- HTML starts here -->

<h2 class='adopt-message'>Please Adopt Us!</h2>

<ul>

	<?php 
		foreach ($monsters as $monster) { 

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

	<li class="monster">
		<monster-card id="<?=$id?>">

			<identification>
				<h2 class="name"><?=$name?></h2>
				<picture class="portrait">
					<img src="<?=$portrait?>">
				</picture>
			</identification>
			
			<info-module>

				<about>
					<h2 class='outdoor-voice'>About</h2>
					<p class="story indoor-voice"><?=$story?></p>
				</about>
				<status>
					<h2 class='outdoor-voice'>Status</h2>
					<p class='status indoor-voice'><?=$status?></p>
				</status>

			</info-module>

		</monster-card>
	</li>
<?php } ?>
</ul>
			




