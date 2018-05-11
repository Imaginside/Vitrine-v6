<?php
use II\Utilities\Configure;
?>
<!-- Header -->
<header id="header" class="header-transparent dark">
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