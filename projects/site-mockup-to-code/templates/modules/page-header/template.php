<?php foreach($pageData['page-header'] as $content) { ?>
<header class='page-header'>
	<inner-column>
		<mast-head>
			<a href="#" class='link logo'>
				<?php include('templates/components/logo.php')?>
			</a>
			<nav class='page-menu'>
				<?php include('templates/partials/page-header-nav.php')?>
			</nav>
				<login>
					<div class='page-header-icon'>
						<?php include('templates/components/page-header-icon.php')?>
					</div>
						<a class='login-button' href='#'>
							<?=$content['button']?>
						</a>
				</login>
		</mast-head>
	</inner-column>
</header>
<?php } ?>