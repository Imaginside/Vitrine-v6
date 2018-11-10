<?php
use II\Utilities\Configure;
/**
 * Affichage standard
 * Une seule image
 * Une description (titre + description)
 */

// echo $this->element('Portfolio/portfolio-default.php', [
//     'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
//     'PortfolioItemClass' => 'img-zoom',
//         // Style d'affiche
//             // large-width
//             // img-zoom | img-zoom-out | img-rotate
//             // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
//             // text-bottom
//             // shadow
//             // outline
//     'PortfolioItemClass3d' => true,
//         // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
//         // Ne fonctionnera pas si un lien est renseigné
//     'PortfolioItemPicture' => '60.jpg', // Possible sans image, laisser vide
//     'PortfolioItemTitle' => 'Paper Pouch !',
//     'PortfolioItemDescription' => true, // Affiche du pavé description : true | false
//     'PortfolioItemLink' => 'portfolio-page-grid-gallery.html', // Lien de la page. Peut-être laissé vide // ex. : 'portfolio-page-grid-gallery.html'
//     'PortfolioItemCategory' => 'Illustrations / Graphics',
// ]);

echo '
<div class="portfolio-item ';
    if($PortfolioItemLink === '' && $PortfolioDescription !== 1 && $PortfolioItemClass3d === true) { echo ' hover-3d '; }
    echo ' ' .$PortfolioItemClass . ' ' . implode(' ',$PortfolioItemCategoriesFilter) . '">
    <div class="portfolio-item-wrap">
        <div class="portfolio-image">';
            if($PortfolioItemLink !== '')
            echo '<a href="/portfolio/' . $PortfolioItemLink . '"><img src="/site/Medias/img/portfolio/' . $PortfolioItemPicture . '" alt="' . $PortfolioItemTitle . ' ' . $PortfolioItemCategory . '"></a>';
            else 
            echo '<img src="/site/Medias/img/portfolio/' . $PortfolioItemPicture . '"  alt="' . $PortfolioItemTitle . ' ' . $PortfolioItemCategory . '">';
        echo '
        </div>';
        
        if($PortfolioItemDescription === true) {
        echo '
        <div class="portfolio-description">';
            if($PortfolioItemLink !== '') {
            echo '<a href="/portfolio/' . $PortfolioItemLink . '">';
                if($PortfolioItemTitle !== '') 
                    echo '<h3>' . $PortfolioItemTitle . '</h3>';
                if($PortfolioItemCategory !== '') 
                    echo '<span>' . $PortfolioItemCategory . '</span>';
            echo '
            </a>';
            }
            else {
                if($PortfolioItemTitle !== '') 
                echo '<h3>' . $PortfolioItemTitle . '</h3>';
                if($PortfolioItemCategory !== '') 
                echo '<span>' . $PortfolioItemCategory . '</span>';
            }
        echo '
        </div>';
        }
        
    echo '
    </div>
</div>';