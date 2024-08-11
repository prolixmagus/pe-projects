<?php
$pageData = read_page_data('layout-garden');
$layout = get_layout_by_slug($pageData['sections'], $_GET['slug']);
$module = $layout['module'];
?>

<?php if ($module) { ?>
    <section class='<?=$module?> section-grid'>
        <inner-column class='inner-grid'>
            <module-showcase>
                <case-study-wrapper>
                    <h2 class='layout-voice'><?=$layout['title']?></h2>
                    <a class='case-study-link quiet-voice' href="?page=layout-garden">Back</a>
                </case-study-wrapper>

                <?php include("../modules/layout-garden/" . $layout['module'] . "/template.php"); ?>
            </module-showcase>
        </inner-column>
    </section>

    <?php foreach ($layout['case-study'] as $section) { 
        $module = $section['module']; 
        $content = $section['content']?>
        
        <section class="case-study-paragraph section-grid">
            <inner-column class='inner-grid'>
                <!-- includes generic text heading -->
                <?php include("../modules/$module/template.php"); ?>
            </inner-column>
        </section>
    <?php } ?>
<?php } else { ?>
    <section>
        <inner-column>
            <p>No layout here!</p>
        </inner-column>
    </section>
<?php } ?>