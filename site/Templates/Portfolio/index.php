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
    'PageTitleSubTitle' => 'Découvrez toutes nos dernières actualités.', // Sous titre

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

<section id="page-content" class="<?php if(Configure::read('Portfolio.SidebarPortfolioActiv') === true) echo 'sidebar-' . Configure::read('Portfolio.SidebarPortfolioPosition'); ?>">
    <div class="<?= Configure::read('Portfolio.PortfolioWidthContainer') ?>">
        <div class="row">
            <div class="<?php if(Configure::read('Portfolio.SidebarPortfolioActiv') === true) echo 'content col-md-9' ?>">
                
                <div>
                    <p>Les possibilités d'affichage du portfolio :
                        <ul>
                            <li>Avec ou sans sidebar</li>
                            <li>Paramétrer les widgets dans la sidebar</li>
                            <li>Affichage de 1 à 6 colonnes</li>
                            <li>Affichage en 100% ou non</li>
                            <li>Avec ou sans barre de filtre</li>
                            <li>Choisir quoi et comment afficher les réalisations <small><i>(couleurs, liens, pictos, boutons, vidéo, carousel, grand, petit...)</i></small></li>
                        </ul>
                    </p>
                </div>

                <?php
                // Filter portfolio
                if(Configure::read('Portfolio.PortfolioFilter') === true && !empty(Configure::read('Portfolio.PortfolioFilterCat'))) {
                echo '<nav class="grid-filter gf-outline" data-layout="#portfolio">
                    <ul>';
                        foreach (Configure::read('Portfolio.PortfolioFilterCat') as $NameCat => $DataCat) {
                            echo '<li';
                            if($DataCat === '*') echo ' class="active"';
                            echo '><a href="#" data-category="' . $DataCat . '">' . $NameCat . '</a></li>';
                        }
                    echo '
                    </ul>';
                    foreach (Configure::read('Portfolio.PortfolioFilterCat') as $NameCat => $DataCat) {
                        if($DataCat === '*') echo '<div class="grid-active-title">' . $NameCat . '</div>';
                    }
                echo '</nav>';
                }
                ?>

                <!-- Portfolio -->
                <div id="portfolio" class="grid-layout portfolio-<?= Configure::read('Portfolio.PortfolioColumn') ?>-columns" data-margin="0">

                    <?php
                    // Affichage default
                    echo $this->element('Portfolio/portfolio-default.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
                        'PortfolioItemClass' => 'img-zoom',
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemClass3d' => true,
                            // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
                            // Ne fonctionnera pas si un lien est renseigné
                        'PortfolioItemPicture' => '60.jpg', // Possible sans image, laisser vide
                        'PortfolioItemTitle' => 'Paper Pouch !',
                        'PortfolioItemDescription' => true, // Affiche du pavé description : true | false
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page. Peut-être laissé vide // ex. : 'portfolio-default'
                        'PortfolioItemCategory' => 'Illustrations / Graphics',
                    ]);
                    
                    // Affichage picto
                    echo $this->element('Portfolio/portfolio-pictos.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
                        'PortfolioItemClass' => 'img-zoom overlay-light overlay-padding',
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemClass3d' => false, // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
                        'PortfolioItemPicture' => '71.jpg', // Possible sans image, laisser vide
                        'PortfolioItemTitle' => 'Paper Pouch !',
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page
                        'PortfolioItemVideo' => 'https://www.youtube.com/watch?v=k6Kly58LYzY',
                        
                        // Affichage Picto
                        'PortfolioItemAffichPictoImage' => true,
                        'PortfolioItemAffichPictoLink' => true,
                        'PortfolioItemAffichPictoVideo' => true,
                        // Type Picto
                        'PortfolioItemClassPictoImage' => 'fa-expand', // defaut : fa-expand
                        'PortfolioItemClassPictoLink' => 'fa-link', // defaut : fa-link
                        'PortfolioItemClassPictoVideo' => 'fa-play', // defaut : fa-play
                    ]);
                    
                    // Affichage boutons
                    echo $this->element('Portfolio/portfolio-boutons.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
                        'PortfolioItemClass' => 'img-zoom-out',
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemPicture' => '72.jpg', // Possible sans image, laisser vide
                        'PortfolioItemTitle' => 'Paper Pouch !',
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page
                        'PortfolioItemVideo' => 'https://www.youtube.com/watch?v=k6Kly58LYzY',
                        
                        // Affichage BTN
                        'PortfolioItemAffichBtnImage' => true,
                        'PortfolioItemAffichBtnLink' => true,
                        'PortfolioItemAffichBtnVideo' => true,
                        // Class BTN
                        // btn btn-xxs btn-outline btn-light
                        'PortfolioItemClassBtnImage' => 'btn',
                        'PortfolioItemClassBtnLink' => 'btn btn-xxs btn-outline btn-light',
                        'PortfolioItemClassBtnVideo' => 'btn btn-light btn-rounded',
                        // Text BTN
                        'PortfolioItemClassTxtBtnImage' => 'Zoom',
                        'PortfolioItemClassTxtBtnLink' => 'Voir',
                        'PortfolioItemClassTxtBtnVideo' => 'Vidéo',
                    ]);

                    // Affichage slider
                    echo $this->element('Portfolio/portfolio-slider.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-media', 'pf-icons', 'pf-Media', 'pf-graphics'),
                        'PortfolioItemClass' => '',
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemClassCarousel' => 'dots-inside dots-dark arrows-light',
                            // Style d'affichage carousel
                                // dots-inside
                                // dots-dark | dots-grey | dots-light | dots-primary | dots-secondary | dots-creative
                                // arrows-light | arrows-dark | arrows-grey | arrows-primary | arrows-secondary
                                // arrows-visibile
                        'PortfolioItemFade' => false, // Animation en fade du carousel. true = activé, false = translate par défaut
                        'PortfolioItemAutoplayTimeout' => '', // Animation en milliseconde. défaut : 2000. Peut-être laissé vide
                        'PortfolioItemAutoplay' => true, // Lecture automatique : true | false
                        'PortfolioItemPictures' => [
                            '65.jpg' => 'test slider 1',
                            '66.jpg' => 'test slider 2',
                            '67.jpg' => 'test slider 3',
                        ],
                        // 'PortfolioItemTitle' => 'Stockholm Fashion',
                        // 'PortfolioItemCategory' => 'Illustrations / Graphics',
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page
                        // 'PortfolioDescription' => false, // Choix de l'affichage au survol. Pictos liens (1) ou texte (2)
                    ]);

                    // Affichage default
                    echo $this->element('Portfolio/portfolio-default.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
                        'PortfolioItemClass' => 'text-bottom img-zoom',
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemClass3d' => false,
                            // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
                            // Ne fonctionnera pas si un lien est renseigné
                        'PortfolioItemPicture' => '60.jpg', // Possible sans image, laisser vide
                        'PortfolioItemTitle' => 'Paper Pouch !',
                        'PortfolioItemDescription' => true, // Affiche du pavé description : true | false
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page. Peut-être laissé vide // ex. : 'portfolio-default'
                        'PortfolioItemCategory' => 'Illustrations / Graphics',
                    ]);

                    // Affichage slider
                    echo $this->element('Portfolio/portfolio-slider.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-media', 'pf-icons', 'pf-Media', 'pf-graphics'),
                        'PortfolioItemClass' => 'large-width', 
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemClassCarousel' => 'dots-outside dots-creative arrows-secondary arrows-visibile', 
                            // Style d'affichage carousel
                                // dots-inside
                                // dots-dark | dots-grey | dots-light | dots-primary | dots-secondary | dots-creative
                                // arrows-light | arrows-dark | arrows-grey | arrows-primary | arrows-secondary
                                // arrows-visibile
                        'PortfolioItemFade' => true, // Animation en fade du carousel. true = activé, false = translate par défaut
                        'PortfolioItemAutoplayTimeout' => '', // Animation en milliseconde. défaut : 2000. Peut-être laissé vide
                        'PortfolioItemAutoplay' => true, // Lecture automatique : true | false
                        'PortfolioItemPictures' => [
                            '62.jpg' => 'test slider 1',
                            '63.jpg' => 'test slider 2',
                            '64.jpg' => 'test slider 3',
                        ],
                        // 'PortfolioItemTitle' => 'Stockholm Fashion',
                        // 'PortfolioItemCategory' => 'Illustrations / Graphics',
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page
                        // 'PortfolioDescription' => false, // Choix de l'affichage au survol. Pictos liens (1) ou texte (2)
                    ]);

                    // Affichage default
                    echo $this->element('Portfolio/portfolio-default.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
                        'PortfolioItemClass' => 'overlay-primary img-rotate overlay-padding',
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemClass3d' => false,
                            // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
                            // Ne fonctionnera pas si un lien est renseigné
                        'PortfolioItemPicture' => '23.jpg', // Possible sans image, laisser vide
                        'PortfolioItemTitle' => 'Paper Pouch !',
                        'PortfolioItemDescription' => true, // Affiche du pavé description : true | false
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page. Peut-être laissé vide // ex. : 'portfolio-default'
                        'PortfolioItemCategory' => 'Illustrations / Graphics',
                    ]);

                    // Affichage default
                    echo $this->element('Portfolio/portfolio-default.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
                        'PortfolioItemClass' => 'img-zoom-out overlay-secondary overlay-padding',
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemClass3d' => false,
                            // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
                            // Ne fonctionnera pas si un lien est renseigné
                        'PortfolioItemPicture' => '73.jpg', // Possible sans image, laisser vide
                        'PortfolioItemTitle' => 'Paper Pouch !',
                        'PortfolioItemDescription' => true, // Affiche du pavé description : true | false
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page. Peut-être laissé vide // ex. : 'portfolio-default'
                        'PortfolioItemCategory' => 'Illustrations / Graphics',
                    ]);

                    // Affichage default
                    echo $this->element('Portfolio/portfolio-default.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
                        'PortfolioItemClass' => 'overlay-primary img-zoom',
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemClass3d' => true,
                            // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
                            // Ne fonctionnera pas si un lien est renseigné
                        'PortfolioItemPicture' => '40.png', // Possible sans image, laisser vide
                        'PortfolioItemTitle' => 'Paper Pouch !',
                        'PortfolioItemDescription' => true, // Affiche du pavé description : true | false
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page. Peut-être laissé vide // ex. : 'portfolio-default'
                        'PortfolioItemCategory' => 'Illustrations / Graphics',
                    ]);

                    // Affichage slider
                    echo $this->element('Portfolio/portfolio-slider.php', [
                        'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-media', 'pf-icons', 'pf-Media', 'pf-graphics'),
                        'PortfolioItemClass' => 'large-width',
                            // Style d'affiche
                                // large-width
                                // img-zoom | img-zoom-out | img-rotate
                                // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
                                // text-bottom
                                // shadow
                                // outline
                        'PortfolioItemClassCarousel' => 'dots-inside dots-secondary arrows-primary',
                            // Style d'affichage carousel
                                // dots-inside
                                // dots-dark | dots-grey | dots-light | dots-primary | dots-secondary | dots-creative
                                // arrows-light | arrows-dark | arrows-grey | arrows-primary | arrows-secondary
                                // arrows-visibile
                        'PortfolioItemFade' => false, // Animation en fade du carousel. true = activé, false = translate par défaut
                        'PortfolioItemAutoplayTimeout' => '', // Animation en milliseconde. défaut : 2000. Peut-être laissé vide
                        'PortfolioItemAutoplay' => true, // Lecture automatique : true | false
                        'PortfolioItemPictures' => [
                            '80l.jpg' => 'test slider 1',
                            '81l.jpg' => 'test slider 2',
                            '82l.jpg' => 'test slider 3',
                        ],
                        // 'PortfolioItemTitle' => 'Stockholm Fashion',
                        // 'PortfolioItemCategory' => 'Illustrations / Graphics',
                        'PortfolioItemLink' => 'portfolio-default', // Lien de la page
                        // 'PortfolioDescription' => false, // Choix de l'affichage au survol. Pictos liens (1) ou texte (2)
                    ]);
                    ?>

                </div>
                <!-- end: Actualités - Blog -->

                <!-- Pagination -->
                <!-- <div class="pagination pagination-simple">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a>
                        </li>
                        <li class="active"><a href="#">1</a> </li>
                        <li><a href="#">2</a> </li>
                        <li><a href="#">3</a> </li>
                        <li><a href="#">4</a> </li>
                        <li><a href="#">5</a> </li>
                        <li>
                            <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a>
                        </li>
                    </ul>
                </div> -->
                <!-- end: Pagination -->
            
            </div>

            <?php
            // Sidebar
            echo $this->element('Sidebar/sidebar-portfolio.php');
            ?>
        </div>
    </div>
</section>