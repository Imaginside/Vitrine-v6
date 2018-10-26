<?php
use II\Utilities\Configure;
?>

<?= 
$this->element('Page-title/page-title.php', [
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


<!-- CONTENT -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-uppercase">Contactez-nous !</h3>
                <p>Vous souhaitez profiter d'un site de qualité, réalisé par des professionnels proche de vous ? Téléphonez-nous ou envoyez-nous un email, nous reviendrons vers vous dans les meilleurs délais !</p>
                <div class="m-t-30">
                    
                    <?php
                    if(isset($formSuccess) && $formSuccess === true) {
                        echo '<div role="alert" class="alert alert-success">
                        <i class="fa fa-check-circle"></i> <strong>Félicitations !</strong> Votre message a été envoyé avec succés.</div>';
                    }
                    if(isset($formSuccess) && $formSuccess === false) {
                        echo '<div role="alert" class="alert alert-warning alert-dismissible animated visible" data-animation="pulse" data-animation-delay="1500">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
                        <i class="fa fa-warning"></i> <strong>Attention !</strong> Un ou plusieurs champs ci-dessous sont mal renseignés.</div>';
                    }
                    print $form;
                    ?>
                    
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="text-uppercase">Adresse & Carte</h3>
                <div class="row">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <address>
                            <?php
                            echo '<strong>' . Configure::read('Society.Name') . ' - Agence</strong><br>';
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

                <!-- Google map sensor -->
                <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
                <div class="map m-t-30" data-map-address="52 Rue Cérès, 51100 Reims, FRANCE" data-map-zoom="13" data-map-icon="/site/Themes/theme1/img/markers/marker3.png" data-map-type="ROADMAP"></div>
                <!-- Google map sensor -->

            </div>
        </div>
    </div>
</section>
<!-- end: CONTENT -->