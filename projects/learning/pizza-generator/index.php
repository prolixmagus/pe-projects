
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Pizza Sketch</title>

		<style>
			inner-column {
				max-width: 800px;
				padding-block: 1rem;
			}

			pizza-order {
				display: block;
				border: 2px solid red;
			}

			li {
				padding-top: 10px;
			}


		</style>
	</head>

	<body>
		<header style='font-size: 12px'>
			<inner-column>
				<h1>Pizza Selection</h1>
			</inner-column>
		</header>

		<main>
			<section>
				<inner-column>
					
					<?php include("pizza-list.php")?>

				</inner-column>
			</section>
		</main>
	</body>
</html>