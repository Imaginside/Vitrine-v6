<?php
use II\Utilities\Configure;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Un site vitrine professionnel pour artisans, TPE et PME, à 39€/mois, tout inclus !">
    <title><?php echo Configure::read('Society.Name'); ?> | Accueil</title>

    
    <meta name="author" content="Imag'Inside" />
    <meta name="Publisher" content="Imag'Inside" />
    <meta name="Copyright" content="Imag'Inside" />
    <meta name="Identifier-URL" content="www.ma-vitrine.fr" />
    <meta name="Reply-to" content="hello@imaginside.com" />

    <meta property="og:title" content="<?php echo Configure::read('Society.Name'); ?> | Accueil" />
    <meta property="og:description" content="Un site vitrine professionnel pour artisans, TPE et PME, à 39€/mois, tout inclus !" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.ma-vitrine.fr" />
    <meta property="og:image" content="img/image-rs2.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="/site/Themes/theme1/css/plugins.css" rel="stylesheet">
    <link href="/site/Themes/theme1/css/style.css" rel="stylesheet">
    <link href="/site/Themes/theme1/css/responsive.css" rel="stylesheet">
    <link href="/site/Themes/theme1/css/custom.css" rel="stylesheet">
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <?php
        echo $this->element('Topbar/topbar-1.php');
        echo $this->element('Header/header-1.php');
        ?>

        <!-- <?= 'NamePage base.php : ' . $NamePage . '<br>' ?> -->
        
        <?php
        // print '<img src="'.Configure::read('logo-default').'">';
        ?>
        <?php print $content; ?>



        <?php
        echo $this->element('Footer/footer-1.php');
        ?>

    
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

</body>

</html>


</body>

</html>