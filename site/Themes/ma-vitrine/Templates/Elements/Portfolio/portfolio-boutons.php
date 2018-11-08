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

echo '
<div class="portfolio-item ';
    echo ' ' .$PortfolioItemClass . ' ' . implode(' ',$PortfolioItemCategoriesFilter) . '">
    <div class="portfolio-item-wrap">
        <div class="portfolio-image">
            <a href="/portfolio/' . $PortfolioItemLink . '"><img src="/site/Medias/img/portfolio/' . $PortfolioItemPicture . '" alt=""></a>
        </div>';

        // Affichage des boutons
        echo '
        <div class="portfolio-description">';

            if($PortfolioItemAffichBtnImage === true)
            echo '
            <a title="' . $PortfolioItemTitle . '" data-lightbox="image" href="/site/Medias/img/portfolio/' . $PortfolioItemPicture . '" class="' . $PortfolioItemClassBtnImage . '">' . $PortfolioItemClassTxtBtnImage . '</a>';

            if($PortfolioItemAffichBtnLink === true && $PortfolioItemLink !== '')
            echo '
            <a href="/portfolio/' . $PortfolioItemLink . '" class="' . $PortfolioItemClassBtnLink . '">' . $PortfolioItemClassTxtBtnLink . '</a>';

            if($PortfolioItemAffichBtnVideo === true && $PortfolioItemVideo !== '') {
            echo '<a data-lightbox="iframe" href="' . $PortfolioItemVideo . '" class="' . $PortfolioItemClassBtnVideo . '">' . $PortfolioItemClassTxtBtnVideo . '</a>';
            }
        echo '
        </div>

    </div>
</div>';