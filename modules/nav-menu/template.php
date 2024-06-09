<?php 

	$nav_links = [
		[
			"page" => "Home",
			"link" => "?",
		],
		[
			"page" => "Work",
			"link" => "?page=work",
		],
		[
			"page" => "Resume",
			"link" => "?page=timeline",
		],
		[
			"page" => "Influences",
			"link" => "?page=influences",
		],
		[
			"page" => "Contact",
			"link" => "?page=contact",
		],
	]
?>

<nav>
	<div>
	<ul class='user-menu'>
		<button type='button'>x close</button>

		<?php foreach($nav_links as $link) { 
				$link_page = $link['page'] ?? "page link"; 
				$current_page = $_GET['page'] ?? "";
			?>

			<li>
				<a href='<?=$link['link']?>'><?=$link_page?></a>
			</li>

		<?php } ?>
	</ul>
</nav>