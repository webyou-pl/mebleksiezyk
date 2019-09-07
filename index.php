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
    <section>
        <div id="hover-main"></div>
        <section id="main" class="main"></section>


        <div class="main_logo-circle">
            <div>
                <img src="images/logo/ksiezyk_meble_logo_white.png" class="img-fluid main__logo" id="logo" onclick="startAnimation() startA()">
            </div>
        </div>
    </section>

    <section id="secondary">
        <section id="secondary__onas">
            <div class="secondary__title">
                <h2 class="h2">O nas</h2>
            </div>
            <div class="container">
                    <div class="row secondary__row">
                        <div class="col-sm-12 col-lg-4 d-flex secondary__column-1">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br>
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.<br><br>
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat.</p>
                        </div>
                        <div class="col-sm-12 col-lg-4 d-block secondary__column-2">
                            <div class="secondary__column-2-inside">
                            <h5 class="first">Wyjątkowy dizajn</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet.</p>
                            </div> 
                            <div class="secondary__column-2-inside">
                            <h5 class="second">Doświadczenie</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet.</p>

                            </div>
                            <div class="secondary__column-2-inside">
                            <h5 class="third">Gwarancja jakości</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 d-flex secondary__column-3">
                            <img src="../mebleksiezyk/images/sections/onas/rzybornik.jpg">
                        </div>
                    </div>
            </div>            
        </section>




        <!-- <section>
        x
        </section> -->
    </section>



        <?php //echo $cta;
        // echo $footer;
        // echo $template_copyright;
        // echo $socialMedia_fix;
     echo $template_end_body; ?>
     </body>
</html>