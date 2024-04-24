<!DOCTYPE html>

<?php require('router.php')?>
<?php include('crud-functions.php')?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>⛳</title>

		<style>

			body {
				padding: 20px;
			}

			.site-menu {
				display: flex;
				gap: 15px;
			}

			.site-menu li {
				list-style: none;
				margin: 0;
			}

			ul {
				padding: 0;
			}

			li, p {
				font-size: 2rem;
				margin-top: 10px;
			}

			a {
				text-decoration: none;
			}

			h1 {
				font-size: 4rem;
			}

			span {
				padding: 3px;
				border-bottom: 2px solid blue;
			}

			.list span {
				font-size: .75rem;
			}

			.list {
				padding-left: 25px;
			}

			.detail-links {
				display: flex;
				gap: 20px;
			}


		</style>
	</head>

	<body>

		<header>
			<nav>
				<ul class="site-menu">
					<li><a href="?page=list"><span>🗒️</span></a></li>
					<li><a href="?page=create"><span>✏️</span></a></li>
				</ul>
			</nav>
		</header>




		<main>
			<?php 
				get_template($page);
			?>	
		</main>
	</body>

</html>