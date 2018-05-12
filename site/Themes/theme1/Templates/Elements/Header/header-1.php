<?php
use II\Utilities\Configure;
?>
<!-- Header -->
<header id="header" class="header-transparent dark">
<!--
    Possibilité d'ajouter des classes à la section :
    - BackgroundColor : dark | light
    - Coloré : header-colored dark | header-colored light
    - Style : 
        Large : header-fullwidth
        Modern : header-modern | header-modern dark | header-modern header-transparent dark | header-modern header-colored dark
        Mini : header-mini dark
        Static : header-static
        No sticky : header-no-sticky
        Sticky responsive : header-sticky-resposnive
    - Position logo : header-logo-right |  header-logo-center
    - Transparent : header-transparent light | header-transparent dark | header-light-transparent | header-dark-transparent dark | header-colored-transparent dark
-->
    <div id="header-wrap">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="/index/" class="logo" data-dark-logo="<?php echo Configure::read('logo-dark'); ?>">
                    <img src="<?php echo Configure::read('logo-default'); ?>" alt="Polo Logo">
                </a>
            </div>
            <!--End: Logo-->

            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->
            
            <?php 
            echo $this->element('Nav/nav-primary-1.php');
            ?>

        </div>
    </div>
</header>
<!-- end: Header -->