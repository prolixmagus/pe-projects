<?php foreach($pageData['page-header'] as $content) { ?>
	<inner-column>
		<mast-head>
			<a href="#" class='logo'>
				<h1><?php include('templates/components/logo.php')?></h1>
			</a>
			<nav class='page-menu'>
				<?php include('templates/partials/page-header-nav.php')?>
			</nav>
				<login>
					<?php if ($page == 'home' || $page =='about') { ?>
					<div class='page-header-icon'>
						<?php include('templates/components/page-header-icon.php')?>
					</div>
				<?php } ?>
						<a class='login-button white' href='#'>
							Sign Up
						</a>
						<?php if($page == 'contact') { ?>
							<a class='login-button' href='#'>
							<?=$content['button']?>
							</a>
						<?php	} ?>
				</login>
		</mast-head>
	</inner-column>
<?php } ?>