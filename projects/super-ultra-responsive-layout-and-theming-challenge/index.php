<!doctype html>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>[[insert title]]</title>	
		<meta name='description' content='Super Ultra Responsive Layout and Theming Challenge for Perpetual Education Course!'>
		<meta property='og:image' content='images/ocean.png'>

		<link rel='stylesheet' href='css/style.css'>

	</head>

	<body>

		<?php include('header.php') ?>

		<main>
			<section class='diptych'>
				<inner-column>
					<?php include('diptych.php'); ?>
				</inner-column>
			</section>

			<section class='call-to-action'>
				<inner-column>
					<?php include('call-to-action.php'); ?>
				</inner-column>
			</section>

			<section class="article-list">
				<section class='article-list-header'>
					<inner-column>
						<?php include('article-list-header.php'); ?>
					</inner-column>
				</section>

				<section class='article-list-content'>
					<inner-column>
						<?php include('article-list-content.php'); ?>
					</inner-column>
				</section>
			</section>

			<section class="call-to-action" style="background-color: #FD9195">
				<inner-column>
					<?php include('call-to-action.php'); ?>
				</inner-column>
			</section>

		</main>
		
		<section class="footer">
			<inner-column>
				<?php include('footer.php'); ?>
			</inner-column>
		</section>

		
	</body>
</html>