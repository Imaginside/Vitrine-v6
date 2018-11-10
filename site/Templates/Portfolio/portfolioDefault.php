<?php
use II\Utilities\Configure;

// Affichage grand, type page d'accueil
$this->set('page_title', [
    'PageTitleClassesSection' => 'page-title-left light',
    // - Style : EMPTY | page-title-classic
    // - Alignement : EMPTY => page-title-left | page-title-center | page-title-right |
    // - Color : dark | light | color

    'PageTitleH1' => $NamePage, // Titre de la page
        'PageTitleH1Classes' => 'text-primary', // text-muted | text-dark | text-light | text-primary | ... css bootstrap
    'PageTitleSubTitle' => '
        <div class="portfolio-attributes style1 text-light">
        <div class="attribute" data-animation="fadeInUp" data-animation-delay="1000"><strong>Client :</strong> Ma Vitrine</div>
        <div class="attribute" data-animation="fadeInUp" data-animation-delay="1200"><strong>Date :</strong> 10/11/2018</div>
        <div class="attribute" data-animation="fadeInUp" data-animation-delay="1400"><strong>Services :</strong> Site vitrine </div>
        </div>
        ', // Sous titre

    // Choix du background du page-title
    'PageTitleImg' => '/site/Medias/img/header.jpg', // Lien vers l'image.  Vide si pas d'image. Ex. : /site/Medias/img/header.jpg
    'PageTitleImgSpeedParallax' => '-.170', // Vitesse du paralax -.170
    'PageTitlePattern' => '', // Lien vers l'image du pattern. Vide si pas de pattern. Ex. : /site/Medias/pattern/pattern-exemple.png
    'PageTitleBgColor' => '', // Couleur de fond - Vide si pas de couleur. Ex. : #DF0A40
    'PageTitleVideo' => '', // Lien vers la vidéo SANS EXTENSION. Ex. : /site/Medias/video/presentation

    'PageTitleBreadcrumb' => true, // Affiche ou non du fil d'ariane => true | false | '' => '' vide pour laisser la configuration par défault via app.php
    'PageTitleScroller' => false, // Activer le bouton scroller
        'PageTitleScrollerClasses' => 'dark circle-color', // Style du scroller : [light | dark | color] && [circle-light | circle-dark | circle-color]
        'PageTitleScrollerLink' => '#portfolio', // Lien du scroller. Ex. : #portfolio
]);
?>

<section id="page-content" class="p-b-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="portfolio-attributes style2">
                    <div class="attribute"><strong>Client :</strong> Ma Vitrine</div>
                    <div class="attribute"><strong>Site internet :</strong> <a href="https://www.ma-vitrine.pro" title="Création de site internet" target="_blank">ma-vitrine.pro</a></div>
                    <div class="attribute"><strong>Date :</strong> 10/11/2018</div>
                    <div class="attribute"><strong>Services :</strong> Création d'un site vitrine</div>
                </div>
                <div> <a href="https://www.ma-vitrine.pro" class="btn btn-secondary btn-outline" target="_blank">Visitez le site internet</a></div>
            </div>
            <div class="col-md-4">
                <div class="project-description">
                    <h3>Guide to the World has the guts to design and develop the impossible. With passion and a lot of expertise we create a surprisingly timeless collection of beautiful functional furniture, made with innovative and sustainable materials. Our brand represents connection.</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-description">
                    <h3> Our brand represents connection. With passion and a lot of expertise we create a surprisingly timeless collection of beautiful functional furniture, made with innovative and sustainable materials. Our brand represents connection.</h3>
                </div>
            </div>

        </div>

<div class="row">
            <div class="col-md-4">
                <div class="text-box text-dark">
                    <a href="#">
                        <i class="fa fa-paper-plane"></i>
                        <h3>Tags &amp; Models </h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-box text-dark">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <h3>Our charts </h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-box text-dark">
                    <a href="#">
                        <i class="fa fa-lightbulb-o"></i>
                        <h3>Light &amp; Dark</h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
        </div>

        <hr class="space">

        <div class="col-md-10 center">
            <div class="carousel carousel-promotion m-b-40" data-items="1" data-margin="40" data-loop="true" data-autoplay="true">
                <div class="portfolio-item img-zoom">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/site/Medias/img/portfolio/project/31.jpg" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a title="Paper Pouch!" data-lightbox="image" href="/site/Medias/img/portfolio/project/31.jpg" class="btn btn-light btn-rounded">Zoom</a>

                        </div>
                    </div>
                </div>
                <div class="portfolio-item img-zoom">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/site/Medias/img/portfolio/project/32.jpg" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a title="Paper Pouch!" data-lightbox="image" href="/site/Medias/img/portfolio/project/32.jpg" class="btn btn-light btn-rounded">Zoom</a>

                        </div>
                    </div>
                </div>
                <div class="portfolio-item img-zoom">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/site/Medias/img/portfolio/project/33.jpg" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a title="Paper Pouch!" data-lightbox="image" href="/site/Medias/img/portfolio/project/33.jpg" class="btn btn-light btn-rounded">Zoom</a>

                        </div>
                    </div>
                </div>
                <div class="portfolio-item img-zoom">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/site/Medias/img/portfolio/project/34.jpg" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a title="Paper Pouch!" data-lightbox="image" href="/site/Medias/img/portfolio/project/34.jpg" class="btn btn-light btn-rounded">Zoom</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row m-b-40">
            <div class="col-md-8 center">
                <div class="project-description text-center">
                    <h2>Project Info</h2>
                    <p>Guide to the World has the guts to design and develop the impossible. With passion and a lot of expertise we create a surprisingly timeless collection of beautiful functional furniture, made with innovative and sustainable materials. Our brand represents connection.</p>

                    <div class="portfolio-share" data-animation="fadeIn">
                        <h4>Share this project</h4>
                        <div class="align-center">

                            <a class="btn btn-slide btn-light" href="#">
                                <i class="fa fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-slide btn-light" href="#" data-width="120">
                                <i class="fa fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-slide btn-light" href="#" data-width="140">
                                <i class="fa fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-slide btn-light" href="mailto:#" data-width="96">
                                <i class="fa fa-envelope"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="post-navigation">
        <a href="portfolio-page-background-video.html" class="post-prev">
            <div class="post-prev-title"><span>Previous Post</span>Woody Chair vel accumsan</div>
        </a>
        <a href="portfolio-masonry-3.html" class="post-all">
            <i class="fa fa-th"></i>
        </a>
        <a href="portfolio-page-particles.html" class="post-next">
            <div class="post-next-title"><span>Next Post</span>Guide To The World</div>
        </a>
    </div>
</section>