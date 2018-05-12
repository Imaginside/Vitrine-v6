<?php
use II\Utilities\Configure;
?>
<!-- Page title -->
<section id="page-title" style="background-color:#DF0A40;">
<!--
    Possibilité d'ajouter des classes à la section :
    - Alignement : page-title-center | page-title-right | page-title-left
    - Color : dark | light | color
-->
    <div class="container">
        
        <!-- Breadcrumb -->
        <?php
        if(Configure::read('Activate.Breadcrumb') == 1) {
            echo $this->element('Breadcrumb/breadcrumb.php');
        }
        ?>

        <div class="page-title">
            <h1>Titre de la page - Couleur de fond</h1>
            <span>Titre de la page simple avec couleur de fond</span>
        </div>
    </div>
</section>
<!-- end: Page title -->