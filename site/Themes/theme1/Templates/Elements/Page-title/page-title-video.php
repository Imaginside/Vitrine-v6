<?php
use II\Utilities\Configure;
?>
<!-- Page title -->
<section id="page-title" data-vide-bg="/site/Themes/theme1/video/explore/explore" data-vide-options="position: 0% 50%">
<?php
// Possibilité d'ajouter des classes à la section :
// - Alignement : page-title-center | page-title-right | page-title-left
// - Color : dark | light | color
?>
    <div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 0% 50%; background-image: none;"><video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 0%; transform: translate(0%, -50%); visibility: visible; opacity: 1; width: 1440px; height: auto;"><source src="/site/Themes/theme1/video/explore/explore.mp4" type="video/mp4"><source src="/site/Themes/theme1/video/explore/explore.webm" type="video/webm"><source src="/site/Themes/theme1/video/explore/explore.ogv" type="video/ogg"></video></div>
    <div class="container">
        
        <!-- Breadcrumb -->
        <?php
        if(Configure::read('Activate.Breadcrumb') == 1) {
            echo $this->element('Breadcrumb/breadcrumb.php');
        }
        ?>

        <div class="page-title">
            <h1>Titre de la page - Video background</h1>
            <span>Titre de la page simple avec vidéo en background</span>
        </div>
    </div>
</section>
<!-- end: Page title -->