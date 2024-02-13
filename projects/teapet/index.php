<!doctype html>

<?php require("router.php")?>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Tea Pets: <?=$page?></title>	
		<meta name='description' content='Online store for artisanal clay tea pets'>
		<meta property='og:image' content='[[link to image!]]'>

		<link rel='stylesheet' href='css/style.css'>

	</head>

	<body>
		
		<header class='site-header'>
			<?php include("site-menu.php")?>
		</header>

		<main class="<?=$page?>">

			<section class='page-content'>
				<?php getTemplate($page); 

					/* if ($page == 'home') {
						include('home.php');
					}

					if ($page == 'pet-shop-list') {
						include('pet-shop-list.php');
					}
					
					if ($page == 'contact') {
						include('contact.php');
					}
					if ($page == 'care') {
						include('care.php');
					}
					if ($page == 'detail') {
						include('detail.php');
					}

					if ($page == 'create') {
						include('detail.php');
					} */

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