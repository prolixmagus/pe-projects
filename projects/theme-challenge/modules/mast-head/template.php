<?php foreach ($pageData['mast-head'] as $content) { ?>
<mast-head>

	<nav class='site-menu'>
		<ul>
			<li>
				<a class='home' href='#'>
					<?php include("modules/" . $content['logo'] . ".php"); ?>
				</a>
			</li>

			<li>
				<a href='?theme=<?=$content['theme-1']?>'>Wireframe</a>
			</li>

			<li>
				<a href='?theme=<?=$content['theme-2']?>'>Garden</a>
			</li>
		</ul>
	</nav>

	<nav class='user-menu'>
		<ul>
			<li>
				<?php foreach($pageData['mast-head'] as $content) { ?>
					<a class='button' href='#'>BOOK NOW</a>
			<?php } ?>
			</li>
		</ul>
	</nav>

</mast-head>

<?php } ?>
