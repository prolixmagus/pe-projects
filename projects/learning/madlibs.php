
<html>
	<head>
		<style>
			h1 {
				color: red;
			}

			section + section {
				padding-top: 10px;
			}

			p {
				max-width: 75ch;
			}
		</style>
	</head>

	<body>
		<header>
			<h1>MADLIB practice</h1>
		</header>

		<main>
			<section>
				<?php
					$name = "Bob";
					$noun1 = "briefcase";
					$adjective1 = "smelly";
					$food = "coconut curry";
					$bodyPart = "butthole";
					$verb = "massage";
					$noun2 = "combination pizza hut / taco bell";
					$verb2 = "pantsed"


				?>

				<h2><?=$name?> Forgets the Launch Codes</h2>

				<p>One day, the president asked <?=$name?> to hold a <?=$noun1?> that contained top <?=$adjective1?> launch codes. Before <?=$name?> could finish eating their <?=$food?>, the <?=$noun1?> was handcuffed to their <?=$bodyPart?>. "I can't <?=$verb?> this!" shouted <?=$name?>, and he threw the <?=$noun1?> into the <?=$noun2?>. The FBI <?=$verb2?> <?=$name?> and he was never seen again.</p>

				<p>The End</p>
			</section>

			<section>
				<?php
					$otherNoun = "nostril";
					$pluralNoun = "toenails";
					$presentVerb = "castrate";
					$anotherVerb = "pontificate";
					$bodyParts = "nipples";
					$adjective = "sandpaper-like";
					$pluralNoun2 = "gizmos";
					$otherAdjective = "erotic";

					echo "<h2>The Magic Computer</h2>";

					echo "<p>Today, every student has a computer small enough to fit into their " . $otherNoun . ". You can solve any math problem by simply pushing the computer’s little " . $pluralNoun . ".</p>";

					echo "<p>Computers can add, multiply, divide, and " . $presentVerb . ". They can also " . $anotherVerb . " better than a human.</p>";

					echo "Some computers have their own " . $bodyParts . ". Other’s have a " . $adjective . " screen that shows all kinds of " . $pluralNoun2 . " and " . $otherAdjective . " figures.</p>";
				?>

			</section>
			
			<section>

				<h2>The Magic Computer (again?)</h2>

				<p>Today, every student has a computer small enough to fit in their <?php echo $otherNoun; ?>. You can solve any math problem by simply pushing the computer's little <?php echo $pluralNoun; ?>.</p>

				<p>computers can add, multiply, divide, and <?php echo $presentVerb; ?>. They can also <?php echo $anotherVerb; ?> better than a human</p>

				<p>Some computers have their own <?php echo $bodyParts; ?>. Other's have a <?php echo $adjective; ?> screen that shows all kinds of <?php echo $pluralNoun2; ?> and <?php echo $otherAdjective; ?> figures</p>
			</section>

			<section>
				<?php

					$website = 'https://www.popeyes.com';

				?>
				<a href=<?php echo $website;?>>popeyes is amazing</a>
			</section>
		</main>

	</body>
</html>