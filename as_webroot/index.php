<?php
/**
 * Paramétres par défaut
 */
require dirname(__DIR__) . '/as_config/config.php';


/**
 * Récupère les chemins
 */
require dirname(__DIR__) . '/as_config/paths.php';


/**
 * Router en fonction de l'URL
 */
require dirname(__DIR__) . '/as_config/routes.php';



/**
 * Fichier de paramètrage du site
 */
require CONFIG . 'data_website.php';
require CONFIG . 'data_dev.php';


/**
 * Appelle des fichiers de mise en page du site
 */
require dirname(__DIR__) . '/as_content/Layout/paramLayout.php';
