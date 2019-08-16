<?php
    require_once 'structure/template.php';
?>

<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Meble Księżyk</title>
    <?php echo $template_end_head; ?>
    <body>
        <header id="header">
            <?php echo $nav_menu; ?>
            <!-- <div id="slider" class="text-center">
                <p>slider</p>
            </div> -->
        </header>

        <section id="main">
          <div class="main__black-animation"></div>
            <div class="conteiner">
                <div class="row">
                    <img src="images/logo/ksiezyk_meble_logo_white.png" style="height:auto; width:250px;" class="img-fluid main__logo">
                </div>
            </div>
        </section>


        <?php //echo $cta;
        // echo $footer;
        // echo $template_copyright;
        // echo $socialMedia_fix;
     echo $template_end_body; ?>
     </body>
</html>