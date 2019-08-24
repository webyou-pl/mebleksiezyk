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

        <div id="hover-main"></div>
        <section id="main" class="main"></section>


        <div class="main_logo-circle">
            <div>
                <img src="images/logo/ksiezyk_meble_logo_white.png" class="img-fluid main__logo" id="logo" onclick="startAnimation() startA()">
            </div>
        </div>
        <?php //echo $cta;
        // echo $footer;
        // echo $template_copyright;
        // echo $socialMedia_fix;
     echo $template_end_body; ?>
     </body>
</html>