<?php
use II\Utilities\Configure;
?>
    <!-- Footer -->
    <footer id="footer" class="footer-light">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Footer widget area 1 -->
                        <div class="widget clearfix widget-contact-us" style="background-image: url('/site/Themes/theme1/img/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                            <h4>Contact</h4>
                            <ul class="list-icon">
                                <li><i class="fa fa-map-marker"></i>
                                <?php
                                echo Configure::read('Society.Name');
                                echo Configure::read('Society.Adress') . '<br>' . Configure::read('Society.Zipcode') . ' ' . Configure::read('Society.Town');
                                ?>
                                </li>

                                <?php
                                if(Configure::read('Society.Phone1') != '') {
                                    echo '<li><i class="fa fa-phone"></i> <a href="tel:' . Configure::read('Society.Phone1Link') . '">' . Configure::read('Society.Phone1') . '</a></li>';
                                }
                                if(Configure::read('Society.Phone2') != '') {
                                    echo '<li><i class="fa fa-phone"></i> <a href="tel:' . Configure::read('Society.Phone2Link') . '">' . Configure::read('Society.Phone2') . '</a></li>';
                                }
                                if(Configure::read('Society.Mail') != '') {
                                    echo '<li><i class="fa fa-envelope"></i> <a href="mailto:' . Configure::read('Society.Mail') . '">' . Configure::read('Society.Mail') . '</a></li>';
                                }
                                ?>
                                <li>
                                    <br><i class="fa fa-clock-o"></i>Lundi - Vendredi : <strong>08h - 19h</strong>
                                    <br>Samedi : <strong>08h - 20h</strong>
                                    <br>Dimanche: <strong>Fermé</strong>
                                </li>
                            </ul>
                            
                            <?php
                            if(Configure::read('Activate.SocialNetwork.Footer') === true) {
                            // Social icons
                            echo '<div class="social-icons social-icons-border float-left m-t-20">
                                ' . $this->element('Blocs/SocialNetwork.php') . '
                            </div>';
                            }
                            ?>
                            <!-- end: Social icons -->
                        </div>
                        <!-- end: Footer widget area 1 -->
                    </div>
                    <div class="col-md-2">
                        <!-- Footer widget area 2 -->
                        <div class="widget">
                            <h4>Liens rapides</h4>
                            <?php 
                            echo $this->element('nav-footer.php');
                            ?>
                        </div>
                        <!-- end: Footer widget area 2 -->
                    </div>
                    <div class="col-md-3">
                        <!-- Footer widget area 3 -->
                        <div class="widget">
                            <h4>Dernières informations</h4>
                            <div class="post-thumbnail-list">
                                <div class="post-thumbnail-entry">

                                    <div class="post-thumbnail-content">
                                        <a href="#">Suspendisse consectetur fringilla luctus</a>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">

                                    <div class="post-thumbnail-content">
                                        <a href="#">Consectetur adipiscing elit</a>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">

                                    <div class="post-thumbnail-content">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Footer widget area 3 -->
                    </div>
                    <div class="col-md-3">
                        <!-- Footer widget area 4 -->
                        <div class="widget widget-tweeter" data-username="ardianmusliu" data-limit="2">
                            <h4>Derniers tweets</h4>
                        </div>
                        <!-- end: Footer widget area 4 -->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-content">
            <div class="container">
                <div class="copyright-text text-center">
                <?php
                echo ' &copy; ' . Configure::read('Site.date_mise_en_ligne');
                if (Configure::read('Site.date_mise_en_ligne') < date('Y')) {
                    echo ' - ' . date('Y');
                }
                echo ' | ';
                echo Configure::read('Society.Name');
                if (Configure::read('Society.Baseline') != '' ) {
                    echo ' - ' . Configure::read('Society.Baseline') . ' | ';
                }
                echo 'Tous droits réservés | <a href="/mentions-legales/">Mentions légales</a> | <a href="/cookies/">Cookies</a> | <a href="/politique-de-confidentialite/">Politique de confidentialité</a>';
                ?>
                </div>
                <div class="copyright-text text-center">
                Un site vitrine créé avec <i class="text-primary fa fa-heart-o" title="amour et passion"></i> par <a href="https://www.imaginside.com/" title="Imag'Inside, Création de sites internet à Reims" target="_blank">Imag’Inside</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->




</div>
<!-- end: Wrapper -->
<!-- Go to top button -->
<a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

<!--Plugins-->
<script src="/site/Themes/theme1/js/jquery.js"></script>
<script src="/site/Themes/theme1/js/plugins.js"></script>

<!--Template functions-->
<script src="/site/Themes/theme1/js/functions.js"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<link rel="stylesheet" type="text/css" href="/site/Themes/theme1/js/plugins/revolution/css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/site/Themes/theme1/js/plugins/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="/site/Themes/theme1/js/plugins/revolution/css/navigation.css">

<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/site/Themes/theme1/js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript">
    var tpj = jQuery;

    var revapi30;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_30_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_30_1");
        } else {
            revapi30 = tpj("#rev_slider_30_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "/site/Themes/theme1/js/plugins/revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [868, 768, 960, 720],
                lazyType: "smart",
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/

</script>
