<?php
use II\Utilities\Configure;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php
        if(Configure::read('Activate.Google-TagManager') !== '') {
            ?>
            <script type="text/javascript" src="/site/Medias/js/tag_google_analytics.js"></script>
            <!-- Google Tag Manager -->
            <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','" . Configure::read('Activate.Google-TagManager') . "');</script> -->
            <!-- End Google Tag Manager -->
            <?php
        }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?= $DescPage ?>">
        <title><?= Configure::read('Society.Name') . ' | ' . $NamePage ?></title>

        <meta name="author" content="Imag'Inside" />
        <meta name="Publisher" content="Imag'Inside" />
        <meta name="Copyright" content="Imag'Inside" />
        <meta name="Identifier-URL" content="www.ma-vitrine.fr" />
        <meta name="Reply-to" content="<?= Configure::read('Society.Mail'); ?>" />
        <meta name="robots" content="<?= $MetaRobot ?>">

        <meta property="og:title" content="<?= Configure::read('Society.Name') . ' | ' . $NamePage ?>" />
        <meta property="og:description" content="<?= $DescPage ?>" />
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

    <body class="<?php if(Configure::read('PageLoader') === false) echo 'no-page-loader'; ?>">

        <?php
        if(Configure::read('Activate.Google-TagManager') !== '') {
            // echo '
            // <!-- Google Tag Manager (noscript) -->
            // <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . Configure::read('Activate.Google-TagManager') . '"
            // height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            // <!-- End Google Tag Manager (noscript) -->';
        }
        ?>
        
        <!-- Wrapper -->
        <div id="wrapper">

            <?php
            echo $this->element('topbar.php', ['classesTopbar' => $ClassesTopBar]);
            echo $this->element('header.php', ['classesHeader' => $ClassesHeader]);
            ?>

            <?= $content; ?>

            <?php
            echo $this->element('footer.php');
            ?>
    </body>
</html>