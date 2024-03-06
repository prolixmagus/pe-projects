<?php foreach($pageData['page-header'] as $content) { ?>
<header class='<?=$content['class']?>'>
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
					<?php foreach($content['button'] as $button) { ?>
						<a class='<?=$button['class']?>' href='#'>
							<?=$button['text']?>
						</a>
					<?php } ?>
				</login>
		</mast-head>
	</inner-column>
</header>
<?php } ?>