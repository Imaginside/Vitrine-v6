<?php
use II\Utilities\Configure;

// Affichage grand, type page d'accueil
echo $this->element('Page-title/page-title.php', [
    'PageTitleClassesSection' => Configure::read('Portfolio.PortfolioSingle_PageTitleClassesSection') . ' ' . $Portfolio_PageTitleClassesSection,
    // - Style : EMPTY | page-title-classic
    // - Alignement : EMPTY => page-title-left | page-title-center | page-title-right |
    // - Color : dark | light | color

    'PageTitleH1' => $PortfolioNameProjet, // Titre de la page
        'PageTitleH1Classes' => $Portfolio_PageTitleH1Classes, // text-muted | text-dark | text-light | text-primary | ... css bootstrap
    'PageTitleSubTitle' => '
        <div class="portfolio-attributes style1 text-light">
            <div class="attribute" data-animation="fadeInUp" data-animation-delay="1000"><strong>Client :</strong> Ma Vitrine</div>
            <div class="attribute" data-animation="fadeInUp" data-animation-delay="1200"><strong>Date :</strong> 10/11/2018</div>
            <div class="attribute" data-animation="fadeInUp" data-animation-delay="1400"><strong>Services :</strong> Site vitrine</div>
        </div>
        ', // Sous titre

    // Choix du background du page-title
    'PageTitleImg' => '/site/Medias/img/portfolio/project/'. $PortfolioBgheader, // Lien vers l'image.  Vide si pas d'image. Ex. : /site/Medias/img/header.jpg
    'PageTitleImgSpeedParallax' => '-.170', // Vitesse du paralax -.170
    'PageTitlePattern' => '', // Lien vers l'image du pattern. Vide si pas de pattern. Ex. : /site/Medias/pattern/pattern-exemple.png
    'PageTitleBgColor' => '', // Couleur de fond - Vide si pas de couleur. Ex. : #DF0A40
    'PageTitleVideo' => '', // Lien vers la vidéo SANS EXTENSION. Ex. : /site/Medias/video/presentation

    'PageTitleBreadcrumb' => true, // Affiche ou non du fil d'ariane => true | false | '' => '' vide pour laisser la configuration par défault via app.php
    'PageTitleScroller' => false, // Activer le bouton scroller
        'PageTitleScrollerClasses' => 'dark circle-color', // Style du scroller : [light | dark | color] && [circle-light | circle-dark | circle-color]
        'PageTitleScrollerLink' => '#portfolio', // Lien du scroller. Ex. : #portfolio
]);

echo '
<section id="page-content" class="p-b-0">
    <div class="container">
        <div class="row">
            <div class="">

                <div class="row">
                    <div class="col-md-4">
                        <div class="portfolio-attributes style2">';
                            if(isset($PortfolioClient) && $PortfolioClient !== '') echo '<div class="attribute"><strong>Client :</strong> ' . $PortfolioClient . '</div>';
                            if(isset($PortfolioWebsite) && $PortfolioWebsite !== '') echo '<div class="attribute"><strong>Site internet :</strong> <a href="' . $PortfolioWebsiteURL . '" title="' . $PortfolioWebsiteTitle . '" target="_blank">' . $PortfolioWebsite . '</a></div>';
                            if(isset($PortfolioDate) && $PortfolioDate !== '') echo '<div class="attribute"><strong>Date :</strong> ' . $PortfolioDate . '</div>';
                            if(isset($PortfolioServices) && $PortfolioServices !== '') echo '<div class="attribute"><strong>Services :</strong> ' . $PortfolioServices . '</div>';
                        echo '
                        </div>';
                        if(isset($PortfolioWebsiteURL) && $PortfolioWebsiteURL !== '') echo '<div><a href="' . $PortfolioWebsiteURL . '" class="btn btn-secondary btn-outline" target="_blank">Visitez le site internet</a></div>';
                    echo '
                    </div>';

                    if($PortfolioProjectDescriptionCol1 !== '' && $PortfolioProjectDescriptionCol2 !== '') {
                    echo '
                    <div class="col-md-4">
                        <div class="project-description">' . $PortfolioProjectDescriptionCol1 . '</div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-description">' . $PortfolioProjectDescriptionCol2 . '</div>
                    </div>';
                    }
                    else 
                    echo '
                    <div class="col-md-8">
                        <div class="project-description">' . $PortfolioProjectDescriptionCol1 . $PortfolioProjectDescriptionCol2 . '</div>
                    </div>';

                echo '
                </div>';

                

                if($PortfolioIcons === true) {
                echo '
                <hr class="space">
                <div class="row">';
                
                $NbIcons = count($PortfolioIcon);
                $NbCol = 12/$NbIcons;
                foreach ($PortfolioIcon as $PortfolioIcon) {
                    echo '
                    <div class="col-md-' . $NbCol . '">
                        <div class="text-box text-dark">
                            <i class="fa ' . $PortfolioIcon[0] . '"></i>
                            <h3>' . $PortfolioIcon[1] . '</h3>
                            <p>' . $PortfolioIcon[2] . '</p>
                        </div>
                    </div>';
                }

                    

                echo '
                </div>';
                }

                echo '
                <hr class="space">

                <div class="col-md-10 center">
                    <div class="carousel carousel-promotion m-b-40" data-items="1" data-margin="40" data-loop="true" data-autoplay="true">';
                        foreach ($PortfolioPictures as $Portfolio) {
                            echo '
                            <div class="portfolio-item img-zoom">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="/site/Medias/img/portfolio/project/' . $Portfolio[1] . '" alt="' . $Portfolio[0] . '"></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="' . $Portfolio[0] . '" data-lightbox="image" href="/site/Medias/img/portfolio/project/' . $Portfolio[1] . '" class="btn btn-light btn-rounded">' . $Portfolio[2] . '</a>

                                    </div>
                                </div>
                            </div>';
                        }

                    echo '
                    </div>
                </div>';

                if($PortfolioProjetInfo === true) {
                echo '
                <div class="row m-b-40">
                    <div class="col-md-8 center">
                        <div class="project-description text-center">
                            <h2>' . $PortfolioProjetInfoTitle . '</h2>
                            <p>' . $PortfolioProjetInfoDescription . '</p>';

                            if($PortfolioShare === true) {
                            echo '
                            <div class="portfolio-share" data-animation="fadeIn">
                                <h4>Partagez ce projet</h4>
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
                            </div>';
                            }

                        echo '
                        </div>
                    </div>
                </div>';
                }


                if($PortfolioPostNav === true) {
                    echo '
                    <div class="post-navigation">
                        <a href="portfolio-page-background-video.html" class="post-prev">
                            <div class="post-prev-title"><span>Réalisation précédente</span>Woody Chair vel accumsan</div>
                        </a>
                        <a href="/portfolio/" class="post-all" title="Retour">
                            <i class="fa fa-th"></i>
                        </a>
                        <a href="portfolio-page-particles.html" class="post-next">
                            <div class="post-next-title"><span>Réalisation suivante</span>Guide To The World</div>
                        </a>
                    </div>';
                }

            echo '
            </div>
        </div>
    </div>
</section>';