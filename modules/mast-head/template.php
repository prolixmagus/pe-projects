<!DOCTYPE html>

<?php 
	include("../functions.php");
	require("../router.php");
	// $pageData = read_page_data($page);
	// create json file for each page, then use php to slot in information
	if ($page === 'exercise') {
		$pageData = read_page_data('exercises');
	} else if ($page === 'work-detail') {
		$pageData = read_page_data('work');
	} else {
		$pageData = read_page_data($page);
	}
	// if ($page === 'work-detail') {
	// 	$pageData = read_page_data('work'); /*fuction for each page*/

	// }

	$metaTitle = $pageData['title'] ?? "Home: Jeremy Fishman's Portfolio";
	$metaDescription = $pageData['meta-description'] ?? "Teacher. Web Developer. Linguist. Human.";
	$metaImage = $pageData['meta-image'] ?? "https://peprojects.dev/alpha-8/public/images/meta-fish-card.jpg";
	$metaUpdate = $pageData['meta-updated'] ?? "Monday, September 23rd, 2024";
?>




<html lang="en">
	<head>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-GGD5W46082"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-GGD5W46082');
		</script>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title><?=$metaTitle?></title>

		<meta name='description' content='<?=$metaDescription?>'>
		<meta name="Last-Modified" content='<?=$metaUpdate?>'>
		
		<meta property='og:title' content='<?=$metaTitle?>'>
		<meta property='og:type' content='article'>
		<meta property='og:description' content='<?=$metaDescription?>'>

		<meta property='og:url' content='https://peprojects.dev/alpha-8/index.html'>
		<meta property='og:image' content='<?=$metaImage?>'>

		<meta name="twitter:title" content='<?=$metaTitle?>'>
		<meta name="twitter:description" content='<?=$metaDescription?>'>
		<meta name="twitter:image" content="https://peprojects.dev/alpha-8/images/meta-fish-card.jpg">
		<meta name="twitter:card" content="summary_large_image">

		<link rel='stylesheet' href='site-compiled.css'>
	</head>

		<body>

			<mast-head class='site-header section-grid'>
				<inner-column class='inner-grid'>

					<logo-container>
						<a class='site-logo' href='https://jeremyfishman.dev' aria-label='Home: Jeremy Fishman'>
							<?php include("../icons/jeremy-logo.svg")?>
						</a>
					</logo-container>

					<?php include("../modules/nav-menu/template.php")?>

					<button class='hamburger-btn' id='hamburger-btn' aria-label='small-menu-button'>
						<svg class='hamburger' viewBox="0 0 24 24" fill="none" stroke="#fffafa">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier"> 
								<path d="M4 18L20 18" stroke="#E9994B" stroke-width="2" stroke-linecap="round"></path> 
								<path d="M4 12L20 12" stroke="#60D3AC" stroke-width="2" stroke-linecap="round"></path> 
								<path d="M4 6L20 6" stroke="#BE7DB4" stroke-width="2" stroke-linecap="round"></path> 
							</g>
						</svg>
					</button>

				</inner-column>
			</mast-head>



