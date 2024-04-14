<?php foreach ($pageData['site-map'] as $content) { 
	foreach($content['menu-links'] as $link) { ?>
		<site-map>


			<nav class='site-menu'>
				<ul>
					<li>
						<a class='logo' href='#'>
							<?php include("modules/" . $link['heading'] . ".php"); ?>
						</a>
					</li>
					<li>
						<?=$link['number']?>
						<a class='company-email' href='#'><?=$link['email']?></a>
					</li>

					<li>
						<address>
							<?=$link['street']?><br />
							<?=$link['city']?>
						</address>
					</li>
				</ul>
			</nav>
		<?php } ?>

		<?php foreach($content['services-links'] as $link) { ?>

			<nav class='x-menu'>
				<h3 class='strong-voice'><?=$link['heading']?></h3>

				<ul>
					<li>
						<a href='#'><?=$link['xeriscaping']?></a>
					</li>

					<li>
						<a href='#'><?=$link['hardscaping']?></a>
					</li>

					<li>
						<a href='#'><?=$link['planting']?></a>
					</li>
					<li>
						<a href='#'><?=$link['mulching']?></a>
					</li>
					<li>
						<a href='#'><?=$link['water features']?></a>
					</li>
					<li>
						<a href='#'><?=$link['indoor design']?></a>
					</li>
					<li>
						<a href='#'><?=$link['seasonal']?></a>
					</li>
				</ul>
			</nav>
		<?php } ?>

		<?php foreach($content['gallery-links'] as $link) { ?>
			<nav class='x-menu'>
				<h3 class='strong-voice'><?=$link['heading']?></h3>
				
				<ul>
					<li>
						<a href='#'><?=$link['lawn']?></a>
					</li>

					<li>
						<a href='#'><?=$link['garden']?></a>
					</li>

					<li>
						<a href='#'><?=$link['pool']?></a>
					</li>

					<li>
						<a href='#'><?=$link['urban']?></a>
					</li>
					<li>
						<a href='#'><?=$link['desert']?></a>
					</li>
				</ul>
			</nav>
		<?php } ?>

		<?php foreach($content['social-links'] as $link) { ?>

			<nav class='y-menu'>
				<h3 class='strong-voice'><?=$link['heading']?></h3>
				<?php if ($page === 'garden') { ?>	
					<ul>
						<li>
							<a href='#'><?=$link['blog']?></a>
						</li>
						<li>
							<ul class='social'>
								<li>
									<a href='#'>
										<picture class='social-icon'>
											<img src='../../images/icons/facebook.png'>
										</picture>
									</a>
								</li>
								<li>
									<a href='#'>
										<picture class='social-icon'>
											<img src='../../images/icons/instagram.png'>
										</picture>
									</a>
								</li>
								<li>
									<a href='#'>
										<picture class='social-icon'>
											<img src='../../images/icons/snapchat.png'>
										</picture>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				<?php } else { ?>
					<ul>
						<li>
							<a href='#'><?=$link['blog']?></a>
						</li>
					</ul>
			</nav>
		<?php } ?>
	<?php } ?>


		</site-map>
<?php } ?>
