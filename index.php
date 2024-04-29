<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php include("modules/site-header/template.php");?>

	<main>
		<section class='<?=$page?>'>	
			<?php get_template($page) ?>
		</section>
	</main>


<?php include("modules/footer/template.php")?>



<script src="<?=get_site_scripts($page)?>" type='module'></script>

<?php if (isset($_GET['page']) && $_GET['page'] == "exercise") {
	foreach($exercises as $exercise) {
		if ($_GET['slug'] == $exercise["slug"]) { ?>
			<script src="<?=get_exercise_scripts($exercise["slug"])?>"></script>
		<?php } 
	} 
} ?>


	</body>
</html>