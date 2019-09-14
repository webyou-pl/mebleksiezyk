<?php
    require_once 'structure/template.php';
?>

<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Meble Księżyk</title>
    <?php echo $template_end_head; ?>
    <body data-spy="scroll" data-target="#navbar" data-offset="400" class="body popup-gallery" id="body">
        <header id="header">
            <?php echo $nav_menu; ?>
            <!-- <div id="slider" class="text-center">
                <p>slider</p>
            </div> -->
        </header>
    <!-- <section> -->
        <div id="hover-main"></div>
        <section id="main" class="main"></section>


        <div class="main_logo-circle">
            <div>
                <img src="images/logo/ksiezyk_meble_logo_white.png" class="img-fluid main__logo" id="logo" onclick="startAnimation() startA()">
            </div>
        </div>
    <!-- </section> -->
    <div class="razor">
        <div class="razor_shadow"></div>
    </div>

    <!-- *** Pierwsza 'sekcja' z contentem strony powinna być w main zgodnie ze semantyka *** -->
    <main id="onas">
        
        
            <div class="container">
            <div class="onas__title">
                <!-- *** h2, która mam style h2 to się gryzie. W naszym przypadku sekcja o nas ma najwięcej tekstu, który opisuje strone, więc musi być h1. ps. na stronie może być tylko jedna h1 *** -->
                <h1>O nas</h1>
            </div>
                    <div class="row onas__row">
                        <div class="col-sm-12 col-lg-4 d-flex onas__column-1">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br>
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.<br><br>
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat.</p>
                        </div>
                        <div class="col-sm-12 col-lg-4 d-block onas__column-2">
                            <div class="onas__column-2-inside">
                                <!-- *** po h1 powinna być h2 i tak dalej. jeżeli chciałbyś mieć h2, z widokiem h5 o piszemy < h2 class="h5" > *** -->
                            <h2 class="h3 first">Wyjątkowy dizajn</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet.</p>
                            </div> 
                            <div class="onas__column-2-inside">
                            <h2 class="h3 second">Doświadczenie</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet.</p>

                            </div>
                            <div class="onas__column-2-inside">
                            <h2 class="h3 third">Gwarancja jakości</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 d-flex onas__column-3">
                            <img src="../mebleksiezyk/images/sections/onas/1.jpg">
                        </div>
                    </div>
            </div>
        </main>
       



    <div class="razor">
        <div class="razor_shadow"></div>
    </div>

        <section id="na-wymiar" class="text-white furnituresSize">
            <div class="container">
                <h2 class="h1">Meble na wymiar</h2>
                <div class="row">
                    <div class="col-12 col-md-5 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/kuchenne.jpg">
                                    <img src="images/sections/meble-na-wymiar/kuchenne.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="furnituresSize__title">
                                <h2>Kuchenne</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-7 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/szafy-i-wneki.jpg">
                                    <img src="images/sections/meble-na-wymiar/szafy-i-wneki.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="furnituresSize__title">
                                <h2>Szafy i wnęki</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/lazienki.jpg">
                                    <img src="images/sections/meble-na-wymiar/lazienki.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="furnituresSize__title">
                                <h2>Łazienki</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-7 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/pokoj.jpg">
                                    <img src="images/sections/meble-na-wymiar/pokoj.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="furnituresSize__title">
                                <h2>Pokój</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/przedpokoj.jpg">
                                    <img src="images/sections/meble-na-wymiar/przedpokoj.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="furnituresSize__title">
                                <h2>Przedpokój</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-7 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/mlodziezowe-i-dzieciece.jpg">
                                    <img src="images/sections/meble-na-wymiar/mlodziezowe-i-dzieciece.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="furnituresSize__title">
                                <h2>Młodzieżowe i dziecięce</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/sypialnia.jpg">
                                    <img src="images/sections/meble-na-wymiar/sypialnia.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="furnituresSize__title">
                                <h2>Sypialnia</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-7 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/dla-firm.jpg">
                                    <img src="images/sections/meble-na-wymiar/dla-firm.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="furnituresSize__title">
                                <h2>Dla firm</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 furnituresSize__content">
                        <div class="furnituresSize__box">
                            <div class="furnituresSize__image">
                                <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/pozostale.jpg">
                                    <img src="images/sections/meble-na-wymiar/pozostale.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="furnituresSize__title">
                                <h2>Pozostałe</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="razor">
            <div class="razor_shadow"></div>
        </div>
        <section id="uslugi">
            <div class="container">
                <h2 class="h1">Naszym klientom zapewniamy</h2>
                <div class="row">
                    <div class="col-12 col-md service">
                        <h2 class="service__title">Darmowy pomiar</h2>
                        <img class="service__image" src="images/sections/uslugi/pomiar.png" alt="">
                    </div>
                    <div class="col-12 col-md service">
                        <h2 class="service__title">Darmową wycene</h2>
                        <img class="service__image" src="images/sections/uslugi/wycena.png" alt="">
                    </div>
                    <div class="col-12 col-md service">
                        <h2 class="service__title">Transport</h2>
                        <img class="service__image" src="images/sections/uslugi/transport.png" alt="">
                    </div>
                    <div class="col-12 col-md service">
                        <h2 class="service__title">Montaż</h2>
                        <img class="service__image" src="images/sections/uslugi/montaz.png" alt="">
                    </div>
                    <div class="col-12 mt-5">
                        <p> Obcaecati ducimus voluptatem, possimus sapiente nemo facere voluptas eligendi totam sunt! Harum error odit nisi eos nobis explicabo itaque soluta provident facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ducimus voluptatem, possimus sapiente nemo facere voluptas eligendi totam sunt! Harum error odit nisi eos nobis explicabo itaque soluta provident facere.  Obcaecati ducimus voluptatem, possimus sapiente nemo facere voluptas eligendi totam sunt! Harum error odit nisi eos nobis explicabo itaque soluta provident facere.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="razor">
            <div class="razor_shadow"></div>
        </div>
        <section id="galeria">
            <div class="container">
                <h2 class="h1">Przykładowe realizacje</h2>
                <div class="gallery row">
                    <div class="col-12 col-md-5">
                        <div class="gallery__item">
                            <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/pozostale.jpg">
                                <img src="images/sections/meble-na-wymiar/pozostale.jpg" alt="" class="">
                            </a>
                        </div>    
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="gallery__item">
                            <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/kuchenne.jpg">
                                <img src="images/sections/meble-na-wymiar/kuchenne.jpg" alt="" class="">
                            </a>
                        </div>    
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="gallery__item">
                            <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/lazienki.jpg">
                                <img src="images/sections/meble-na-wymiar/lazienki.jpg" alt="" class="">
                            </a>
                        </div>    
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="gallery__item">
                            <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/lazienki.jpg">
                                <img src="images/sections/meble-na-wymiar/lazienki.jpg" alt="" class="">
                            </a>
                        </div>    
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="gallery__item">
                            <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/pozostale.jpg">
                                <img src="images/sections/meble-na-wymiar/pozostale.jpg" alt="" class="aaa">
                            </a>
                        </div>    
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="gallery__item">
                            <a class="popup-gallery__item" href="images/sections/meble-na-wymiar/kuchenne.jpg">
                                <img src="images/sections/meble-na-wymiar/kuchenne.jpg" alt="" class="">
                            </a>
                        </div>    
                    </div>
                </div>
            </div>
        </section>

        <div class="razor">
            <div class="razor_shadow"></div>
        </div>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="#!">
                            <?= $logo_svg; ?>
                        </a>
                    </div>
                    <div class="col-12 col-md-8">
                        <p>tel: <a href="#!">600 334 535</a></p>
                        <p>Email: <a href="#!">mebleksiezyk@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <p>&#169;2019 <strong>www.mebleksiezyk.pl<strong> - wszelkie prawa zastrzeżone. Projekt zrealizowany przez zespół <a href="https://www.webyou.pl" title="Front-End Web Developer Programisa Wrocław" target="_blank">webyou.pl</a>.</p>
                    </div>
                </div>
            </div>
        </div>

        <?= $template_end_body; ?>
    </body>
</html>