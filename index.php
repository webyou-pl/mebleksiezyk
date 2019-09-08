<?php
    require_once 'structure/template.php';
?>

<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Meble Księżyk</title>
    <?php echo $template_end_head; ?>
    <body data-spy="scroll" data-target="#navbar" data-offset="400" class="body" id="body">
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
    <section id="onas">
        <div class="slant-top"></div>
        
            <div class="container">
            <div class="onas__title">
                <h2 class="h2">O nas</h2>
            </div>
                    <div class="row onas__row">
                        <div class="col-sm-12 col-lg-4 d-flex onas__column-1">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br>
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.<br><br>
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat.</p>
                        </div>
                        <div class="col-sm-12 col-lg-4 d-block onas__column-2">
                            <div class="onas__column-2-inside">
                            <h5 class="first">Wyjątkowy dizajn</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet.</p>
                            </div> 
                            <div class="onas__column-2-inside">
                            <h5 class="second">Doświadczenie</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet.</p>

                            </div>
                            <div class="onas__column-2-inside">
                            <h5 class="third">Gwarancja jakości</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 d-flex onas__column-3">
                            <img src="../mebleksiezyk/images/sections/onas/1.jpg">
                        </div>
                    </div>
            </div>
       




    </section>

        <section id="na-wymiar" class="text-white furnituresSize">
            <div class="container">
                <h2 class="h1">Meble na wymiar</h2>
                <div class="row">
                    <div class="col-12 col-md-5 offset-md-1 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <img src="images/sections/meble-na-wymiar/kuchenne.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="furnituresSize__title">
                                <h3>Kuchenne</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-6 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <img src="images/sections/meble-na-wymiar/szafy-i-wneki.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="furnituresSize__title">
                                <h3>Szafy i wnęki</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <img src="images/sections/meble-na-wymiar/lazienki.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="furnituresSize__title">
                                <h3>Łazienki</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-6 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <img src="images/sections/meble-na-wymiar/pokoj.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="furnituresSize__title">
                                <h3>Pokój</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <img src="images/sections/meble-na-wymiar/przedpokoj.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="furnituresSize__title">
                                <h3>Przedpokój</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-6 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <img src="images/sections/meble-na-wymiar/mlodziezowe-i-dzieciece.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="furnituresSize__title">
                                <h3>Młodzieżowe i dziecięce</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <img src="images/sections/meble-na-wymiar/sypialnia.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="furnituresSize__title">
                                <h3>Sypialnia</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-6 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <img src="images/sections/meble-na-wymiar/dla-firm.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="furnituresSize__title">
                                <h3>Dla firm</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <img src="images/sections/meble-na-wymiar/pozostale.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="furnituresSize__title">
                                <h3>Pozostałe</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="uslugi">
            <div class="container">
                <h2 class="h1">Naszym klientom zapewniamy</h2>
                <div class="row">
                    <div class="col-12 col-md">1</div>
                    <div class="col-12 col-md">2</div>
                    <div class="col-12 col-md">3</div>
                    <div class="col-12 col-md">4</div>
                </div>
            </div>
        </section>

        <section id="galeria">
            <div class="container">
                <h2 class="h1">Przykładowe realizacje</h2>
                <div class="gallery row">
                    <div class="gallery__item col-12 col-md-6"></div>
                </div>
            </div>
        </section>

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?= $logo_svg; ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>tel: <a href="#!">000 123 345 567</a></p>
                        <p>Email: <a href="#!">adres@domena.com.pl</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <?= $template_end_body; ?>
    </body>
</html>