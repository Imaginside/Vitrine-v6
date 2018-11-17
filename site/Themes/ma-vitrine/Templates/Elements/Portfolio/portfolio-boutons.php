<?php
use II\Utilities\Configure;
/**
 * Affichage boutons
 * Une seule image
 * Un ou plusieurs bouton avec lien (ouverture d'image, URL, vidéo)
 */

// echo $this->element('Portfolio/portfolio-boutons.php', [
//     'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
//     'PortfolioItemClass' => 'img-zoom-out',
//         // Style d'affiche
//             // large-width
//             // img-zoom | img-zoom-out | img-rotate
//             // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
//             // text-bottom
//             // shadow
//             // outline
//     'PortfolioItemPicture' => '72.jpg', // Possible sans image, laisser vide
//     'PortfolioItemTitle' => 'Paper Pouch !',
//     'PortfolioItemLink' => 'portfolio-page-grid-gallery.html', // Lien de la page
//     'PortfolioItemVideo' => 'https://www.youtube.com/watch?v=k6Kly58LYzY',
    
//     // Affichage BTN
//     'PortfolioItemAffichBtnImage' => true,
//     'PortfolioItemAffichBtnLink' => true,
//     'PortfolioItemAffichBtnVideo' => true,
//     // Class BTN
//     // btn btn-xxs btn-outline btn-light
//     'PortfolioItemClassBtnImage' => 'btn',
//     'PortfolioItemClassBtnLink' => 'btn btn-xxs btn-outline btn-light',
//     'PortfolioItemClassBtnVideo' => 'btn btn-light btn-rounded',
//     // Text BTN
//     'PortfolioItemClassTxtBtnImage' => 'Zoom',
//     'PortfolioItemClassTxtBtnLink' => 'Voir',
//     'PortfolioItemClassTxtBtnVideo' => 'Vidéo',
// ]);

if(isset($PortfolioItemClass) && $PortfolioItemClass !== '') $PortfolioItemClass = $PortfolioItemClass;
else $PortfolioItemClass = Configure::read('Portfolio.PortfolioElemBoutons.PortfolioItemClass');

if(isset($PortfolioItemClassBtnImage) && $PortfolioItemClassBtnImage !== '') $PortfolioItemClassBtnImage = $PortfolioItemClassBtnImage;
else $PortfolioItemClassBtnImage = Configure::read('Portfolio.PortfolioElemBoutons.PortfolioItemClassBtnImage');

if(isset($PortfolioItemClassBtnLink) && $PortfolioItemClassBtnLink !== '') $PortfolioItemClassBtnLink = $PortfolioItemClassBtnLink;
else $PortfolioItemClassBtnLink = Configure::read('Portfolio.PortfolioElemBoutons.PortfolioItemClassBtnLink');

if(isset($PortfolioItemClassBtnVideo) && $PortfolioItemClassBtnVideo !== '') $PortfolioItemClassBtnVideo = $PortfolioItemClassBtnVideo;
else $PortfolioItemClassBtnVideo = Configure::read('Portfolio.PortfolioElemBoutons.PortfolioItemClassBtnVideo');

if(isset($PortfolioItemClassTxtBtnImage) && $PortfolioItemClassTxtBtnImage !== '') $PortfolioItemClassTxtBtnImage = $PortfolioItemClassTxtBtnImage;
else $PortfolioItemClassTxtBtnImage = Configure::read('Portfolio.PortfolioElemBoutons.PortfolioItemClassTxtBtnImage');

if(isset($PortfolioItemClassTxtBtnLink) && $PortfolioItemClassTxtBtnLink !== '') $PortfolioItemClassTxtBtnLink = $PortfolioItemClassTxtBtnLink;
else $PortfolioItemClassTxtBtnLink = Configure::read('Portfolio.PortfolioElemBoutons.PortfolioItemClassTxtBtnLink');

if(isset($PortfolioItemClassTxtBtnVideo) && $PortfolioItemClassTxtBtnVideo !== '') $PortfolioItemClassTxtBtnVideo = $PortfolioItemClassTxtBtnVideo;
else $PortfolioItemClassTxtBtnVideo = Configure::read('Portfolio.PortfolioElemBoutons.PortfolioItemClassTxtBtnVideo');


echo '
<div class="portfolio-item ';
    echo ' ' .$PortfolioItemClass . ' ' . implode(' ',$PortfolioItemCategoriesFilter) . '">
    <div class="portfolio-item-wrap">
        <div class="portfolio-image">
            <a href="/portfolio/' . $PortfolioItemLink . '"><img src="/site/Medias/img/portfolio/' . $PortfolioItemPicture . '" alt=""></a>
        </div>';

        // Affichage des boutons
        echo '
        <div class="portfolio-description">
            <a title="' . $PortfolioItemTitle . '" data-lightbox="image" href="/site/Medias/img/portfolio/' . $PortfolioItemPicture . '" class="' . $PortfolioItemClassBtnImage . '">' . $PortfolioItemClassTxtBtnImage . '</a>';

            if($PortfolioItemLink !== '')
            echo '
            <a href="/portfolio/' . $PortfolioItemLink . '" class="' . $PortfolioItemClassBtnLink . '">' . $PortfolioItemClassTxtBtnLink . '</a>';

            if($PortfolioItemVideo !== '') {
            echo '<a data-lightbox="iframe" href="' . $PortfolioItemVideo . '" class="' . $PortfolioItemClassBtnVideo . '">' . $PortfolioItemClassTxtBtnVideo . '</a>';
            }
        echo '
        </div>

    </div>
</div>';