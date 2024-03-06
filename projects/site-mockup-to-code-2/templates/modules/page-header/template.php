<?php include("functions.php"); ?>
<?php require("router.php"); ?>
<?php $pageData = readPageData($page); ?>

<!doctype html>

<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title><?=$pageData['title']?></title>
		<meta name='description' content='Theme challenge master file'>
		<meta property='og:image' content='Can you research emulate a website for a specific niche industry?'>

		<link rel='stylesheet' href='styles/site.css'>
	</head>

	<body>
		<header class="page-header">
			<inner-column>
				<mast-head>
					<a href="#" class='link logo'>
						<?php include('templates/components/logo.php')?>
					</a>
					<nav class='page-menu'>
						<?php include('templates/partials/page-header-nav.php')?>
					</nav>
						<login>
							<div class='icon'>
								<?php include('templates/components/icon.php')?>
								<p>EN</p>
							</div>
							<a class='login-button' href='#'>
								Login
							</a>
						</login>
				</mast-head>
			</inner-column>
		</header>