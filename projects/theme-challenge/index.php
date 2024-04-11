<!doctype html>

<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php require('router.php');?>

<?php $pageData = readPageData($page);?>

<html class=<?=$page?> lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title><?=$pageData['title']?></title>
		<meta name='description' content='<?=$pageData['description']?>'>
		<meta property='og:image' content='Can you research emulate a website for a specific niche industry?'>

		<link rel='stylesheet' href='styles/site.css'>
	</head>

	<body>

		<?php getTemplate($page) ?>


		<script>
			var body = document.querySelector('body');
			var userMenu = document.querySelector('.user-menu');
			var siteMenu = document.querySelector('.site-menu');

			body.addEventListener('click', (e) => {

				if ( e.target.matches('[rel="toggle"]') ) {
					// userMenu.classList.toggle('open-menu');
					// siteMenu.classList.toggle('hide-menu');
					body.classList.toggle('open-menu')

				}

			})
		</script> 

	</body>

</html>