<?php
use II\Utilities\Configure;

// Affichage pattern
echo $this->element('Page-title/page-title.php', [
    'PageTitleClassesSection' => 'page-title-classic page-title-left dark', 
    // - Style : EMPTY | page-title-classic
    // - Alignement : EMPTY => page-title-left | page-title-center | page-title-right |
    // - Color : dark | light | color

    'PageTitleH1' => $NamePage, // Titre de la page
        'PageTitleH1Classes' => '', // text-muted | text-dark | text-light | text-primary | ... css bootstrap
    'PageTitleSubTitle' => 'Sous titre de la galerie photo', // Sous titre

    // Choix du background du page-title
    'PageTitleImg' => '', // Lien vers l'image.  Vide si pas d'image. Ex. : /site/Medias/img/header.jpg
    'PageTitleImgSpeedParallax' => '-.170', // Vitesse du paralax -.170
    'PageTitlePattern' => '/site/Medias/pattern/pattern-exemple.png', // Lien vers l'image du pattern. Vide si pas de pattern. Ex. : /site/Medias/pattern/pattern-exemple.png
    'PageTitleBgColor' => '', // Couleur de fond - Vide si pas de couleur. Ex. : #DF0A40
    'PageTitleVideo' => '', // Lien vers la vidéo SANS EXTENSION. Ex. : /site/Medias/video/presentation

    'PageTitleBreadcrumb' => true, // Affiche ou non du fil d'ariane => true | false | '' => '' vide pour laisser la configuration par défault via app.php
    'PageTitleScroller' => false, // Activer le bouton scroller
        'PageTitleScrollerClasses' => 'dark circle-color', // Style du scroller : [light | dark | color] && [circle-light | circle-dark | circle-color]
        'PageTitleScrollerLink' => '#portfolio', // Lien du scroller. Ex. : #portfolio
]);

?>

<section id="page-content">
    <div class="<?= Configure::read('Gallery.GalleryWidthContainer') ?>">
        
        <div>
            <p>Les possibilités d'affichage de la galerie :
                <ul>
                    <li>Affichage de 1 à 6 colonnes</li>
                    <li>Affichage en 100% ou non</li>
                    <li>Espacement entre les photos</li>
                </ul>
            </p>
        </div>
        
        <div class="grid-layout grid-<?= Configure::read('Gallery.GalleryColumn') ?>-columns" data-margin="<?= Configure::read('Gallery.GalleryBorder') ?>" data-item="grid-item" data-lightbox="gallery">


            <?php
            // Affichage gallery
            echo $this->element('Gallery/gallery.php', [
                'GalleryPictures' => [
                    // 'photo' => 'titre (optionnel)' 
                    // Photo au format jpg - Ne pas mettre l'extension
                    // Ex.: Petite image '1'.jpg - Grande image '1'l.jpg
                    '1' => '',
                    '2' => 'Titre',
                    '3' => 'Titre',
                    '4' => 'Titre',
                    '5' => 'Titre',
                    '6' => 'Titre',
                    '7' => 'Titre',
                    '8' => 'Titre',
                    '9' => 'Titre',
                    '10' => 'Titre',
                    '11' => 'Titre',
                    '12' => 'Titre',
                ],
            ]);
            ?>
        </div>
        
    </div>
</section>