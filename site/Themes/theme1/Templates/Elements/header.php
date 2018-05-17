<?php
use II\Utilities\Configure;
?>
<!-- Header -->

<header id="header" class="<?= $classesHeader; ?>">
    <div id="header-wrap">
        <div class="container">
        
            <!--Logo-->
            <div id="logo">
                <a href="/" class="logo" data-dark-logo="<?= Configure::read('logo-dark'); ?>">
                    <img src="<?= Configure::read('logo-default'); ?>" alt="Polo Logo">
                </a>
            </div>
            <!--End: Logo-->
<!--Top Search Form-->
<div id="top-search">
                <form action="search-results-page/" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                </form>
            </div>
            <!--end: Top Search Form-->

            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <!--top search-->
                    <!-- <li>
                        <a id="top-search-trigger" href="#" class="toggle-item">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-close"></i>
                        </a>
                    </li> -->
                    <!--end: top search-->

                    <!--shopping cart-->
                    <!-- <li class="hidden-xs">
                        <div id="shopping-cart">
                            <a href="/shop-cart/">
                                <span class="shopping-cart-items">8</span>
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>
                    </li> -->
                    <!--end: shopping cart-->
                    
                    <li>
                        <div class="topbar-dropdown">
                            <a class="title"><i class="fa fa-globe"></i></a>
                            <div class="dropdown-list">
                                <a class="list-entry" href="#">Français</a>
                                <a class="list-entry" href="#">English</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--end: Header Extras-->

            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->
            
            <?= $this->element('nav-primary.php'); ?>

        </div>
    </div>
</header>
<!-- end: Header -->