
<!DOCTYPE html>

<?php include("functions.php"); ?>
<?php require("router.php") ?>

<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		
		<meta property='og:title' content='Jeremy Fishman'>
		<meta property='og:type' content='article'>
		<meta property='og:description' content='Teacher. Web Developer. Linguist. Writer. Human.'>

		<meta property='og:url' content='https://www.peprojects.dev/alpha-8/jeremy/index.html'>
		<meta property='og:image' content='www.peprojects.dev/alpha-8/jeremy/images/meta-fish-card.jpg'>

		<meta name="twitter:title" content="Jeremy Fishman's Portfolio">
		<meta name="twitter:description" content="Teacher. Web Developer. Linguist. Writer. Human.">
		<meta name="twitter:image" content="www.peprojects.dev/alpha-8/jeremy/images/meta-fish-card.jpg">
		<meta name="twitter:card" content="summary_large_image">

		<title>Jeremy Fishman</title>

		<link rel='stylesheet' href='css/style.css'>

	</head>

	<body>

		<header class='site-header'>
			<inner-column>

				<?php include("site-header.php")?>
				
			</inner-column>
		</header>
		
		<main>
			<section class='page-content'>

				<?php getTemplate($page) ?>

			</section>
		</main>

	</body>

	<footer>
		<inner-column>
			<?php include("footer.php")?>
		</inner-column>
	</footer>
</html>