<?php foreach ($pageData['mast-head'] as $content) { ?>
<mast-head>

	<nav class='site-menu'>
		<ul>
			<li>
				<a class='home' href='#'>
					<?php include("../modules/" . $content['logo'] . ".php"); ?>
				</a>
			</li>
		</ul>
	</nav>

	<nav class='user-menu'>
		<ul>
			<li class='close-menu'>
				<button rel='toggle'>X CLOSE</button>
			</li>
			<li class='plant-logo small-menu'>
				<?php include("../modules/" . $content['logo'] . ".php"); ?>
			</li>
			<li class='theme-link'>
				<a href='?theme=<?=$content['theme-1']?>'>Wireframe</a>
			</li>

			<li class='theme-link'>
				<a href='?theme=<?=$content['theme-2']?>'>Garden</a>
			</li>
			<li class='menu-toggle'>
				<button rel='toggle'>Menu</button>
			</li>
			<li class='button-link'>
				<a class='button leaf-sign' href='#'>
					<?php if ($page === 'garden') { ?>
						<svg class='leaf-icon' width="800px" height="800px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title>ionicons-v5-o</title><path d="M321.89,171.42C233,114,141,155.22,56,65.22c-19.8-21-8.3,235.5,98.1,332.7C231.89,468.92,352,461,392.5,392S410.78,228.83,321.89,171.42Z" style="stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M173,253c86,81,175,129,292,147" style="stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
				<?php } ?>
					<p class='calm-voice'><?=$content['button']?></p>
				</a>
			</li>
		</ul>
	</nav>

</mast-head>

<?php } ?>
