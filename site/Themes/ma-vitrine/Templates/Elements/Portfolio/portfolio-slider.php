<?php
use II\Utilities\Configure;
/**
 * Affichage slider
 */

// echo $this->element('Portfolio/portfolio-slider.php', [
//     'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-media', 'pf-icons', 'pf-Media', 'pf-graphics'),
//     'PortfolioItemClass' => '',
//         // Style d'affiche
//             // large-width
//             // img-zoom | img-zoom-out | img-rotate
//             // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
//             // text-bottom
//             // shadow
//             // outline
//     'PortfolioItemClassCarousel' => 'dots-inside dots-dark arrows-light',
//         // Style d'affichage carousel
//             // dots-inside
//             // dots-dark | dots-grey | dots-light | dots-primary | dots-secondary | dots-creative
//             // arrows-light | arrows-dark | arrows-grey | arrows-primary | arrows-secondary
//             // arrows-visibile
//     'PortfolioItemFade' => false, // Animation en fade du carousel. true = activé, false = translate par défaut
//     'PortfolioItemAutoplayTimeout' => '', // Animation en milliseconde. défaut : 2000. Peut-être laissé vide
//     'PortfolioItemAutoplay' => true, // Lecture automatique : true | false
//     'PortfolioItemPictures' => [
//         '65.jpg' => 'test slider 1',
//         '66.jpg' => 'test slider 2',
//         '67.jpg' => 'test slider 3',
//     ],
//     // 'PortfolioItemTitle' => 'Stockholm Fashion',
//     // 'PortfolioItemCategory' => 'Illustrations / Graphics',
//     'PortfolioItemLink' => 'portfolio-page-grid-gallery.html', // Lien de la page
//     // 'PortfolioDescription' => false, // Choix de l'affichage au survol. Pictos liens (1) ou texte (2)
// ]);

if(isset($PortfolioItemClass) && $PortfolioItemClass !== '') $PortfolioItemClass = $PortfolioItemClass;
else $PortfolioItemClass = Configure::read('Portfolio.PortfolioElemSlider.PortfolioItemClass');

if(isset($PortfolioItemClassCarousel) && $PortfolioItemClassCarousel !== '') $PortfolioItemClassCarousel = $PortfolioItemClassCarousel;
else $PortfolioItemClassCarousel = Configure::read('Portfolio.PortfolioElemSlider.PortfolioItemClassCarousel');

if(isset($PortfolioItemFade) && $PortfolioItemFade !== '') $PortfolioItemFade = $PortfolioItemFade;
else $PortfolioItemFade = Configure::read('Portfolio.PortfolioElemSlider.PortfolioItemFade');

if(isset($PortfolioItemAutoplayTimeout) && $PortfolioItemAutoplayTimeout !== '') $PortfolioItemAutoplayTimeout = $PortfolioItemAutoplayTimeout;
else $PortfolioItemAutoplayTimeout = Configure::read('Portfolio.PortfolioElemSlider.PortfolioItemAutoplayTimeout');

if(isset($PortfolioItemAutoplay) && $PortfolioItemAutoplay !== '') $PortfolioItemAutoplay = $PortfolioItemAutoplay;
else $PortfolioItemAutoplay = Configure::read('Portfolio.PortfolioElemSlider.PortfolioItemAutoplay');
?>


<div class="portfolio-item no-overlay 
    <?php
    if(isset($PortfolioItemLarge) && $PortfolioItemLarge === true) echo ' large-width ';
    echo ' ' .$PortfolioItemClass . ' ' . implode(' ',$PortfolioItemCategoriesFilter) ?>
    ">
    <div class="portfolio-item-wrap">
        <div class="portfolio-slider">
            <div class="carousel <?= $PortfolioItemClassCarousel ?>" data-items="1" data-loop="true" data-autoplay="<?= $PortfolioItemAutoplay ?>" data-autoplay-timeout="<?= $PortfolioItemAutoplayTimeout ?>" data-lightbox="gallery"
                <?php
                if($PortfolioItemFade === true) echo ' data-animate-in="fadeIn" data-animate-out="fadeOut"';
                ?>
                >
                <?php
                foreach ($PortfolioItemPictures as $picture => $titlePicture) {
                echo '
                <a title="'. $titlePicture . '" data-lightbox="gallery-item" href="/site/Medias/img/portfolio/' . $picture . '"><img src="/site/Medias/img/portfolio/' . $picture . '" alt="' . $titlePicture . '"></a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
