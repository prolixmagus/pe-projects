
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
			<h1>Control Flow</h1>
		</header>

		<?php

		$tip = 15;

		if ($tip >= 15) {
			echo 'Wowza tipper!';
		} elseif ($tip >= 10 && $tip <= 14) {
			echo 'Nice tip!';
		} else {
			echo 'Tipping culture sucks anyway';
		}

		$mixers = [
			"rum" => "coke",
			"gin" => "tonic",
			"vodka" => "milk"
		];

		?>



		<main>
			<section>
			</section>
		</main>
	</body>
</html>