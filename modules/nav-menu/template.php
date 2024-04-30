<?php 

	$nav_links = [
		[
			"page" => "Work",
			"link" => "?page=work",
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
	<ul class='user-menu'>
		<?php foreach($nav_links as $link) { 

				$link['page'] = $link['page'] ?? "page link"; 
			?>

			<li class='main-link quiet-voice'>
				<a href='<?=$link['link']?>'><?=$link['page']?></a>
			</li>

		<?php } ?>
			<button class='close visually-hidden'>x close</button>
	</ul>
</nav>