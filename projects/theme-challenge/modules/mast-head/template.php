
<mast-head>

	<nav class='site-menu'>
		<ul>
			<li>
				<a class='home' href='#'>
					<?php if ($page === 'garden') {
						include('modules/plant-logo.php');
					} else {
						include('modules/logo.php'); 
					} ?>
				</a>
			</li>

			<li>
				<a href='#'>Some page</a>
			</li>

			<li>
				<a href='#'>Some other page</a>
			</li>
		</ul>
	</nav>

	<nav class='user-menu'>
		<ul>
			<li>
				<?php foreach($pageData['mast-head'] as $content) { ?>
					<a class='button' href='?theme=<?=$content['theme-1']?>'>Default</a>
					<a class='button' href='?theme=<?=$content['theme-2']?>'>Garden</a>
			<?php } ?>
			</li>
		</ul>
	</nav>

</mast-head>
