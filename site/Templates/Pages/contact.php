<?php
use II\Utilities\Configure;
use II\Forms\ContactForm;
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
                <p>Téléphonez-nous ou envoyez-nous un email, nous reviendrons vers vous dès que possible !</p>
                <div class="m-t-30">
                    <?php
                    $form = new ContactForm();
                    print $form->mainForm();
                    die('---');
                    ?>

                    <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="name">Nom</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Entrez votre nom">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Entrez votre adresse mail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="subject">Sujet de votre message</label>
                                <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Sujet...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Entrez votre message"></textarea>
                        </div>

                        <?php
                        if(Configure::read('Activate.Google-reCaptcha-sitekey') !== '' && Configure::read('Activate.Google-reCaptcha-secretkey') !== '') {
                            echo '
                            <div class="form-group">
                                <script src="https://www.google.com/recaptcha/api.js"></script>
                                <div class="g-recaptcha" data-sitekey="' . Configure::read('Activate.Google-reCaptcha-sitekey') . '"></div>
                            </div>
                            ';
                        }
                        ?>

                        <button class="btn btn-icon-holder btn-shadow btn-light-hover btn-light-hover" type="submit" id="form-submit">Envoyer le message<i class="fa fa-paper-plane"></i></button>

                    </form>
                    
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