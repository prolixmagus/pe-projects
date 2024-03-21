<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php include("modules/site-header/template.php");?>

	<main>
		<section class='page-content <?=$page?>'>
			<?php getTemplate($page) ?>
		</section>
	</main>

	<footer>
		<inner-column>
			<?php include("modules/footer/template.php")?>
		</inner-column>
	</footer>

	</body>
</html>