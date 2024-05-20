<?php include("functions.php"); ?>
<?php require("router.php"); ?>
<?php $pageData = read_page_data($page); ?>

<!doctype html>

<html lang='en' class='special-magic no-js'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title><?=$pageData['title']?></title>
		<meta name='description' content='<?=$pageData['description']?>'>
		<meta property='og:image' content='Can you research emulate a website for a specific niche industry?'>

		<link rel='stylesheet' href='styles/site.css'>
	</head>

	<body class="<?=$page?>">
		<header class='page-header'>
			<?php include('templates/modules/page-header/template.php') ?>
		</header>

		<main class="page-content">
			<?php
				foreach ($pageData['sections'] as $section) { ?>
				<section class='<?=$section['section-class']?>'>
					<inner-column>
						<?php include("templates/modules/" . $section['module'] . "/template.php");?>
					</inner-column>
					<?php if ($section['module'] == "cta") { ?>
						<?php include('templates/components/slice.php')?>
					<?php } ?>
				</section>
			<?php } ?>

		</main>

		<footer class='page-footer'>
			<?php include('templates/modules/page-footer/template.php') ?>
		</footer>

	</body>
</html>

