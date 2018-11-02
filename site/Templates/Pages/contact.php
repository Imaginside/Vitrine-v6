<?php
use II\Utilities\Configure;


$this->set('page_title', [
    'PageTitleClassesSection' => 'dark', 
    // - Style : EMPTY | page-title-classic
    // - Alignement : EMPTY => page-title-left | page-title-center | page-title-right |
    // - Color : dark | light | color

    'PageTitleH1' => $NamePage, // Titre de la page
        'PageTitleH1Classes' => 'text-primary', // text-muted | text-dark | text-light | text-primary | ... css bootstrap
    'PageTitleSubTitle' => 'Rentrons en contact !', // Sous titre

    // Choix du background du page-title
    'PageTitleImg' => '', // Lien vers l'image.  Vide si pas d'image. Ex. : /site/Medias/img/header.jpg
    'PageTitleImgSpeedParallax' => '-.170', // Vitesse du paralax -.170
    'PageTitlePattern' => '/site/Medias/pattern/pattern-exemple.png', // Lien vers l'image du pattern. Vide si pas de pattern. Ex. : /site/Medias/pattern/pattern-exemple.png
    'PageTitleBgColor' => '', // Couleur de fond - Vide si pas de couleur. Ex. : #DF0A40
    'PageTitleVideo' => '', // Lien vers la vidéo SANS EXTENSION. Ex. : /site/Medias/video/presentation

    'PageTitleBreadcrumb' => true, // Affiche ou non du fil d'ariane => true | false | '' => '' vide pour laisser la configuration par défault via app.php
    'PageTitleScroller' => false, // Activer le bouton scroller
        'PageTitleScrollerClasses' => 'light circle-color', // Style du scroller : [light | dark | color] && [circle-light | circle-dark | circle-color]
        'PageTitleScrollerLink' => '#portfolio', // Lien du scroller. Ex. : #portfolio
]);
?>



<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-uppercase">Contactez-nous !</h3>
                <p>Vous souhaitez profiter d'un site de qualité, réalisé par des professionnels proche de vous ? Téléphonez-nous ou envoyez-nous un email, nous reviendrons vers vous dans les meilleurs délais !</p>
                <div class="m-t-30">
                    <?php
                    print $form;
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="text-uppercase">Adresse & Carte</h3>
                <div class="row">
                    <div class="col-md-offset-1 col-md-6">
                        <address>
                            <?php
                            echo '<strong>' . Configure::read('Society.Name') . ' - Siège</strong><br>';
                            echo Configure::read('Society.Adress') . '<br>' . Configure::read('Society.Zipcode') . ' ' . Configure::read('Society.Town') . '<br>';
                            if(Configure::read('Society.Phone1') != '') {
                                echo '<i class="fa fa-phone"></i> <a href="tel:' . Configure::read('Society.Phone1Link') . '">' . Configure::read('Society.Phone1') . '</a><br>';
                            }
                            if(Configure::read('Society.Phone2') != '') {
                                echo '<i class="fa fa-phone"></i> <a href="tel:' . Configure::read('Society.Phone2Link') . '">' . Configure::read('Society.Phone2') . '</a><br>';
                            }
                            if(Configure::read('Society.Mail') != '') {
                                echo '<i class="fa fa-envelope"></i> <a href="mailto:' . Configure::read('Society.Mail') . '">' . Configure::read('Society.Mail') . '</a>';
                            }
                            ?>
                        </address>
                    </div>
                </div>

                <?php /* -- Google Maps API : https://console.cloud.google.com -- */
                if(Configure::read('Google-Map.Activate') === true) {
                    echo '
                    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=' . Configure::read('Google-Map.Key') . '"></script>
                    <div class="map m-t-30" data-map-address="' . Configure::read('Google-Map.data-map-address') . '" data-map-zoom="' . Configure::read('Google-Map.data-map-zoom') . '" data-map-icon="' . Configure::read('Google-Map.data-map-icon') . '" data-map-type="ROADMAP"></div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>