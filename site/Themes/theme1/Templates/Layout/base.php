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

        <?php /* -- Stylesheets & Fonts -- */ ?>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
        <link href="/site/Themes/<?php echo Configure::read('theme'); ?>/css/plugins.css" rel="stylesheet">
        <link href="/site/Themes/<?php echo Configure::read('theme'); ?>/css/style.css" rel="stylesheet">
        <link href="/site/Themes/<?php echo Configure::read('theme'); ?>/css/responsive.css" rel="stylesheet">
        <link href="/site/Themes/<?php echo Configure::read('theme'); ?>/css/custom.css" rel="stylesheet">

        <?php /* -- Favicon : https://www.favicon-generator.org/ -- */ ?>
        <?php
        if(Configure::read('Activate.Favicons') === true) {
        echo '
            <link rel="apple-touch-icon" sizes="57x57" href="' . BASE_URL . IMAGES . 'favicon/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="' . BASE_URL . IMAGES . 'favicon/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="' . BASE_URL . IMAGES . 'favicon/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="' . BASE_URL . IMAGES . 'favicon/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="' . BASE_URL . IMAGES . 'favicon/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="' . BASE_URL . IMAGES . 'favicon/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="' . BASE_URL . IMAGES . 'favicon/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="' . BASE_URL . IMAGES . 'favicon/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="' . BASE_URL . IMAGES . 'favicon/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192"  href="' . BASE_URL . IMAGES . 'favicon/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="' . BASE_URL . IMAGES . 'favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="' . BASE_URL . IMAGES . 'favicon/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="' . BASE_URL . IMAGES . 'favicon/favicon-16x16.png">
            <link rel="manifest" href="' . BASE_URL . IMAGES . 'favicon/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="' . BASE_URL . IMAGES . 'favicon/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">';
        }
        ?>
    </head>

    <body class="
        <?php
        if(isset($ClassesBody) && $ClassesBody != NULL) echo $ClassesBody . ' ';
        if(Configure::read('PageLoader') === false) echo 'no-page-loader ';
        ?>
    ">

        <?php
        if(Configure::read('Activate.Google-TagManager') !== '') {
            // echo '
            // <!-- Google Tag Manager (noscript) -->
            // <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . Configure::read('Activate.Google-TagManager') . '"
            // height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            // <!-- End Google Tag Manager (noscript) -->';
        }
        ?>
        
        <?php /* -- Wrapper -- */ ?>
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