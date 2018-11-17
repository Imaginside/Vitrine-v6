<?php
use II\Utilities\Configure;
/**
 * Affichage standard
 * Une seule image
 * Une description (titre + description)
 */

// echo $this->element('Portfolio/portfolio-default.php', [
//     'PortfolioItemCategoriesFilter' => array('pf-illustrations', 'pf-uielements', 'pf-media'),
//      'PortfolioItemPicture' => '60.jpg', // Possible sans image, laisser vide
//      'PortfolioItemTitle' => 'Paper Pouch !',
//      'PortfolioItemLink' => 'portfolio-default', // Lien de la page. Peut-être laissé vide // ex. : 'portfolio-default'
//      'PortfolioItemCategory' => 'Illustrations / Graphics',

//      /* Ci-dessous, les variables par défault sont définies dans app.php */
//      // 'PortfolioItemClass' => 'img-zoom',
//          // Style d'affiche
//              // large-width
//              // img-zoom | img-zoom-out | img-rotate
//              // no-overlay | overlay-[light|dark|grey|white|primary|secondary] | overlay-padding
//              // text-bottom
//              // shadow
//              // outline
//      // 'PortfolioItemClass3d' => true,
//          // Ajoute la class "hover-3d". true | false. NON COMPATIBLE AVEC AFFICHE LIENS AU SURVOLE
//          // Ne fonctionnera pas si un lien est renseigné
//      // 'PortfolioItemDescription' => true, // Affiche du pavé description : true | false
// ]);

if(isset($PortfolioItemClass) && $PortfolioItemClass !== '') $PortfolioItemClass = $PortfolioItemClass;
else $PortfolioItemClass = Configure::read('Portfolio.PortfolioElemDefault.PortfolioItemClass');

if(isset($PortfolioItemClass3d) && $PortfolioItemClass3d !== '') $PortfolioItemClass3d = $PortfolioItemClass3d;
else $PortfolioItemClass3d = Configure::read('Portfolio.PortfolioElemDefault.PortfolioItemClass3d');

if(isset($PortfolioItemDescription) && $PortfolioItemDescription !== '') $PortfolioItemDescription = $PortfolioItemDescription;
else $PortfolioItemDescription = Configure::read('Portfolio.PortfolioElemDefault.PortfolioItemDescription');


echo '
<div class="portfolio-item ';
    if($PortfolioItemLink === '' && $PortfolioDescription !== 1 && $PortfolioItemClass3d === true) { echo ' hover-3d '; }
    if(isset($PortfolioItemLarge) && $PortfolioItemLarge === true) echo ' large-width ';
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