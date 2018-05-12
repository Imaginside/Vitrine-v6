<?php
use II\Utilities\Configure;
?>
<!-- Page title -->
<section id="page-title" data-parallax-image="/site/Themes/theme1/img/parallax/5.jpg">
<!--
    Possibilité d'ajouter des classes à la section :
    - Alignement : page-title-center | page-title-right | page-title-left
    - Color : dark | light | color
-->
    <div class="parallax-container" data-velocity="-.090" style="background: url(/site/Themes/theme1/img/parallax/5.jpg)"></div>
    <div class="container">
        
        <!-- Breadcrumb -->
        <?php
        if(Configure::read('Activate.Breadcrumb') == 1) {
            echo $this->element('Breadcrumb/breadcrumb.php');
        }
        ?>

        <div class="page-title animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="1300">
            <h1>Titre de la page animé</h1>
            <span>Titre de la page simple avec image en background parallax et animation</span>
        </div>
    </div>
</section>
<!-- end: Page title -->