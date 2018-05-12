<?php
use II\Utilities\Configure;
?>
<!-- Page title -->
<section id="page-title" class="dark" style="background: url(/site/Themes/theme1/img/pattern/pattern10.png)">
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
            <h1>Titre de la page - Pattern background</h1>
            <span>Titre de la page simple avec background pattern</span>
        </div>
    </div>
</section>
<!-- end: Page title -->