<?php $pageData = readPageData($page);?>

<header id="top">
	<inner-column>
		
		<?php include('modules/mast-head/template.php'); ?>

	</inner-column>	
</header>


<main id="page-content">
	<section class='welcome' id='welcome'>
	<inner-column>

		<?php include('modules/graphic-diptych/template.php'); ?>

	</inner-column>
	</section>


	<section class='sign-up' id='sign-up'>
	<inner-column>

		<?php include('modules/call-to-action/template.php'); ?>

	</inner-column>
	</section>


	<section class='latest' id='latest'>
	<inner-column>

		<?php include('modules/articles-intro/template.php'); ?>

	</inner-column>
	</section>


	<section class='get-involved' id='get-involved'>
	<inner-column>

		<?php include('modules/call-to-action/template.php'); ?>

	</inner-column>
	</section>
</main>


<footer>
	<inner-column>
			
		<?php include('modules/site-map/template.php'); ?>

	</inner-column>
</footer>
