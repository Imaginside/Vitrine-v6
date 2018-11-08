<?php
use II\Utilities\Configure;
/**
 * Affichage pictos
 * Une seule image
 * un ou plusieurs pictos avec lien (ouverture d'image, URL)
 */

// echo $this->element('Portfolio/portfolio-pictos.php', [
//     'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
//     'PortfolioItemClass' => 'img-zoom overlay-light overlay-padding',
//         // Style d'affiche
//             // large-width
//             // img-zoom | img-zoom-out | img-rotate
//             // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
//             // text-bottom
//             // shadow
//             // outline
//     'PortfolioItemClass3d' => false, // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
//     'PortfolioItemPicture' => '71.jpg', // Possible sans image, laisser vide
//     'PortfolioItemTitle' => 'Paper Pouch !',
//     'PortfolioItemLink' => 'portfolio-page-grid-gallery.html', // Lien de la page
//     'PortfolioItemVideo' => 'https://www.youtube.com/watch?v=k6Kly58LYzY',
    
//     // Affichage Picto
//     'PortfolioItemAffichPictoImage' => true,
//     'PortfolioItemAffichPictoLink' => true,
//     'PortfolioItemAffichPictoVideo' => true,
//     // Type Picto
//     'PortfolioItemClassPictoImage' => 'fa-expand', // defaut : fa-expand
//     'PortfolioItemClassPictoLink' => 'fa-link', // defaut : fa-link
//     'PortfolioItemClassPictoVideo' => 'fa-play', // defaut : fa-play
// ]);

echo '
<div class="portfolio-item ';
    echo ' ' .$PortfolioItemClass . ' ' . implode(' ',$PortfolioItemCategoriesFilter) . '">
    <div class="portfolio-item-wrap">
        <div class="portfolio-image">
            <a href="/portfolio/' . $PortfolioItemLink . '"><img src="/site/Medias/img/portfolio/' . $PortfolioItemPicture . '" alt=""></a>
        </div>';

        // Affichage des pictos
        echo '
        <div class="portfolio-description">';
            
            if($PortfolioItemAffichPictoImage === true)
            echo '
            <a title="' . $PortfolioItemTitle . '" data-lightbox="image" href="/site/Medias/img/portfolio/' . $PortfolioItemPicture . '"><i class="fa ' . $PortfolioItemClassPictoImage . '"></i></a>';
            
            if($PortfolioItemAffichPictoLink === true && $PortfolioItemLink !== '')
            echo '
            <a href="/portfolio/' . $PortfolioItemLink . '"><i class="fa ' . $PortfolioItemClassPictoLink . '"></i></a>';

            if($PortfolioItemAffichPictoVideo === true && $PortfolioItemVideo !== '') {
            echo '<a data-lightbox="iframe" href="' . $PortfolioItemVideo . '" class="' . $PortfolioItemClassBtnVideo . '"><i class="fa ' . $PortfolioItemClassPictoVideo . '"></i></a>';
            }

        echo '
        </div>
    </div>
</div>';