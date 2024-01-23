<!doctype html>

<?php 

	$page = null;

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home'; // default
	}
?>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title><?=$page?></title>	
		<meta name='description' content='[[insert description!]]'>
		<meta property='og:image' content='[[link to image!]]'>

		<link rel='stylesheet' href='css/style.css'>

	</head>

	<body>

		<header class='site-header'>
			<?php include("site-menu.php")?>
		</header>

		<main>

			<section class='page-content'>
				<?php 
					if ($page === 'home') {
						include('home.php');
					}

					if ($page === 'pet-shop') {
						include('pet-shop.php');
					}
					
					if ($page === 'contact') {
						include('contact.php');
					}
					if ($page === 'care') {
						include('care.php');
					}
					?>

			</section>

		</main>

		<footer class='site-footer'>
			<inner-column>
				<p>Copyright Information</p>
			</inner-column>
		</footer>
		
	</body>
</html>