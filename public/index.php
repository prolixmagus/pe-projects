<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php include("../modules/mast-head/template.php");?>

  <main>
    <article class='page-content <?=$page?>'> 
      <?php get_template($page) ?>
    </article>
  </main>

<?php include("../modules/footer/template.php")?>


<script src="scripts/site.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="<?=get_site_scripts($page)?>" type='module'></script>

<?php if (isset($_GET['page']) && $_GET['page'] == "exercise") { ?>
  <?php $exercises = read_page_data('exercises')?>
  <?php foreach($exercises['exercises'] as $exercise) {
    if ($_GET['slug'] == $exercise["slug"]) { ?>
      <script src="<?=get_exercise_scripts($exercise["slug"])?>"></script>
    <?php } 
  } 
} ?>


  </body>
</html>