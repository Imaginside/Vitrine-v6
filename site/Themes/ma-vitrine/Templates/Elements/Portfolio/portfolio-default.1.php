<?php
use II\Utilities\Configure;
/**
 * Affichage standard
 */

// 'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
// 'PortfolioItemClass' => 'img-zoom', // Style d'affiche : img-zoom | no-overlay
// 'PortfolioItemClass3d' => false, // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
// 'PortfolioItemPicture' => '60.jpg', // Possible sans image, laisser vide
// 'PortfolioItemTitle' => 'Paper Pouch !',
// 'PortfolioItemCategory' => 'Illustrations / Graphics',
// 'PortfolioItemLink' => 'portfolio-page-grid-gallery.html', // Lien de la page
// 'PortfolioDescription' => 1, // Choix de l'affichage au survol. Pictos liens (1) ou texte (2)
//     // Si '1', le lien d'au moins 1 image doit être renseigné
//     'PortfolioItemDescriptionPictureBig' => [
//         '60l.jpg' => 'titre 1',
//         '60l-2.jpg' => 'titre 2',
//     ], // Image(s) du lien

$NbPhotoLarge = count($PortfolioItemDescriptionPictureBig);

echo '
<div class="portfolio-item ';
    if($PortfolioDescription !== 1 && $PortfolioItemClass3d === true) { echo ' hover-3d '; }
    echo ' ' .$PortfolioItemClass . ' ' . implode(' ',$PortfolioItemCategoriesFilter) . '">
    <div class="portfolio-item-wrap">
        <div class="portfolio-image">
            <a href="/portfolio/' . $PortfolioItemLink . '"><img src="/site/Medias/img/portfolio/' . $PortfolioItemPicture . '" alt=""></a>
        </div>';

        // Affiche des liens
        if($PortfolioDescription === 1) {
        echo '
        <div class="portfolio-description"';
        if($NbPhotoLarge>=2) {
            echo ' data-lightbox="gallery"';
        }
        echo '
        >';
            if($NbPhotoLarge === 1) {
                foreach ($PortfolioItemDescriptionPictureBig as $picture => $titlePicture) {
                echo '
                <a title="' . $titlePicture . '" data-lightbox="image" href="/site/Medias/img/portfolio/' . $picture . '"><i class="fa fa-expand"></i></a>';
                }
            }
            else if ($NbPhotoLarge > 1) {
                $NbLigne = 0;
                foreach ($PortfolioItemDescriptionPictureBig as $picture => $titlePicture) {
                    echo '<a title="' . $titlePicture . '" data-lightbox="gallery-item" href="/site/Medias/img/portfolio/' . $picture . '"';
                    if($NbLigne === 0) {
                        echo '><i class="fa fa-clone"></i>';
                    }
                    else {
                        echo ' class="hidden">';
                    }
                    echo '</a>';
                    $NbLigne++;
                }
            }
            if($PortfolioItemVideo !== '') {
                echo '<a title="' . $PortfolioItemTitle . '" data-lightbox="iframe" href="' . $PortfolioItemVideo . '"><i class="fa fa-play"></i></a>';
            }
            echo '<a href="/portfolio/' . $PortfolioItemLink . '"><i class="fa fa-link"></i></a>
            
        </div>';
        }

        // Affiche des textes
        if($PortfolioDescription === 2) {
        echo '
        <div class="portfolio-description">
            <a href="/portfolio/' . $PortfolioItemLink . '">
                <h3>' . $PortfolioItemTitle . '</h3>
                <span>' . $PortfolioItemCategory . '</span>
            </a>
        </div>';
        }
        
        echo '
        </div>
</div>';