<?php foreach ($pageData['page-footer'] as $content) { ?>
<site-map>
	<nav class='site-menu product'>
		<?php foreach($content['product-links'] as $link) { ?>
			<h3><?=$link['heading']?></h3>
			<ul>
				<?php foreach($link['links'] as $link_name) { ?>
					<li>
						<a href='#'><?=$link_name['name']?>
						</a>
					</li>
				<?php } ?>
			</ul>
		<?php } ?>
	</nav>

	<nav class='site-menu information'>
		<?php foreach($content['information-links'] as $link) { ?>
			<h3><?=$link['heading']?></h3>
			<ul>
				<?php foreach($link['links'] as $link_name) { ?>
					<li>
						<a href='#'><?=$link_name['name']?>
						</a>
					</li>
				<?php } ?>
			</ul>
		<?php } ?>
	</nav>

	<nav class='site-menu company'>
		<?php foreach($content['company-links'] as $link) { ?>
			<h3><?=$link['heading']?></h3>
			<ul>
				<?php foreach($link['links'] as $link_name) { ?>
					<li>
						<a href='#'><?=$link_name['name']?>
						</a>
					</li>
				<?php } ?>
			</ul>
		<?php } ?>
	</nav>

	<form class='subscribe'>
		<fieldset>
			<?php foreach($content['subscribe-section'] as $form_text) { ?>
				<h3><?=$form_text['heading']?></h3>

				<!-- insert form component-->

				<p><?=$form_text['fine-print']?></p>
			<?php } ?>
		</fieldset>
	</form>
</site-map>
<ul class='footer-masthead'>
	<li>
		<a href="#" class='link logo'><?php include('templates/components/logo.php')?>
		</a>
	</li>
	<li>
		<nav class='page-menu'>
			<?php include('templates/partials/page-footer-nav.php')?>
		</nav>
	</li>
	<li>
		<ul class='socials'>
			<li>
				<a href='#'><?php include('templates/components/icon.php')?></a>
			</li>
			<li>
				<a href='#'><?php include('templates/components/icon.php')?></a>
			</li>
			<li>
				<a href='#'><?php include('templates/components/icon.php')?></a>
			</li>
		</ul>
	</li>
<?php } ?>
