
<html>
	<head>
		<style>

			section + section {
				padding-top: 10px;
			}

			p {
				max-width: 75ch;
			}

			div {
				max-width: 50px;
				height: 50px;
				margin-top: 10px;
				border: 2px solid black;
			}

			.a {
				background-color: hsl(200, 100%, 50%)
			}

			.b {
				background-color: hsl(360, 100%, 50%)
			}

			.c {
				background-color: hsl(40, 100%, 50%)
			}

		</style>
	</head>

	<body>
		<header> 
			<h1>Arrays</h1>
			<div class='a'></div>
			<div class='b'></div>
			<div class='c'></div>
		</header>

		<main>
			<section>
				<?php

				$drinks = [
					"vodka" => 4,
					"apples" => null,
					"cider" => 3,
					"gin" => "",
				];

				// echo "<p>";
				// echo var_dump(count($drink));
				// echo "<p>";

				$mixers = [
					"rum" => "coke",
					"gin" => "tonic",
					"vodka" => "milk"
				];

				foreach ($drinks as $key => $value) {
					if ($value == true) {
						echo "$key";
					}
				}

				?>
				<!-- <p>When I drink rum, I have it with <?=$mixers["rum"]?>. How many drinks, you ask? About <?php echo $drinks[3] ?>.</p> -->

				<p><?=$value?></p>


			</section>
		</main>

	</body>
</html>