<?php
//MyError::addError('Erreur #3 | ParamLayout | Le fichier "' . $file . '" du thème "' . $nametheme . '" n\'est pas appelé correctement.');
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?=$Title?></title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>

    <?= $this->element('breadcrumb') ?>

    <h1>Test</h1>


    <h2>Wololo</h2>

    <?= $content ?>
    <?php
    // MyError::showError();
    ?>
    
    <footer>Test</footer>

    </body>
</html>