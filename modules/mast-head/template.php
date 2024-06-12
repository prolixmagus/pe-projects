<!DOCTYPE html>

<?php 
	include("functions.php");
	require("router.php");
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
	$metaDescription = $pageData['intro'] ?? "Teacher. Web Developer. Linguist. Human.";
	$metaImage = $pageData['meta-image'] ?? "https://peprojects.dev/alpha-8/jeremy/images/meta-fish-card.jpg";
	$metaUpdate = $pageData['meta-updated'] ?? "Monday, June 10th, 2024";
?>




<html lang="en">
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title><?=$metaTitle?></title>

		<meta name='description' content='<?=$metaDescription?>'>
		<meta name="Last-Modified" content='<?=$metaUpdate?>'>
		
		<meta property='og:title' content='<?=$metaTitle?>'>
		<meta property='og:type' content='article'>
		<meta property='og:description' content='<?=$metaDescription?>'>

		<meta property='og:url' content='https://peprojects.dev/alpha-8/jeremy/index.html'>
		<meta property='og:image' content='https://peprojects.dev/alpha-8/jeremy/images/meta-fish-card.jpg'>

		<meta name="twitter:title" content='<?=$metaTitle?>'>
		<meta name="twitter:description" content='<?=$metaDescription?>'>
		<meta name="twitter:image" content="https://peprojects.dev/alpha-8/jeremy/images/meta-fish-card.jpg">
		<meta name="twitter:card" content="summary_large_image">

		<link rel='stylesheet' href='styles/site.css'>
	</head>

		<body>

			<mast-head class='site-header section-grid'>
				<inner-column class='inner-grid'>

					<logo-container>
						<a class='site-logo' href='index.php'>
							<?php include("icons/jeremy-logo.svg")?>
						</a>
					</logo-container>

					<?php include("modules/nav-menu/template.php")?>

					<button class='hamburger-btn'>
						<svg class='hamburger'width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_429_11066)">
								<path d="M3 6.00092H21M3 12.0009H21M3 18.0009H21" stroke="" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
							</g>
							<defs>
								<clipPath id="clip0_429_11066">
									<rect width="24" height="24" fill="white" transform="translate(0 0.000915527)"/>
								</clipPath>
							</defs>
						</svg>
					</button>

				</inner-column>
			</mast-head>

