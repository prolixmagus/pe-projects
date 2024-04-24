<?php 

	$nav_links = [
		[
			"page" => "Résumé",
			"link" => "?page=timeline",
		],
		[
			"page" => "Projects",
			"link" => "?page=projects",
		],
		[
			"page" => "Influences",
			"link" => "?page=influences",
		],
		[
			"page" => "Work",
			"link" => "?page=work",
		],
	]
?>

<nav>
	<ul class='header-menu'>
		<?php foreach($nav_links as $link) { 

				$link['page'] = $link['page'] ?? "page link"; 
			?>

			<li class='main-link quiet-voice'><a href='<?=$link['link']?>'><?=$link['page']?></a></li>
		<?php } ?>
	</ul>
</nav>