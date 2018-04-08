<?php
/**
 * Vérifie l'existance du fichier de paramètre de la page.
 * Si le fichier existe, on l'appelle.
 */
if (file_exists(PARAM.$File.'Param.ctp')) {
    $ContentParam = PARAM.$File.'Param.ctp';
}
/**
 * Fichier d'erreur
 */
else if (!file_exists(PARAM.$File.'Param.ctp')) {
    $AffichError .= 'Erreur : La fichier de paramètre de la page "'.ucfirst($File).'" n\'existe pas.<br>';
}



/**
* Vérifie l'existance du contenu de la page.
* Si le fichier existe, on l'appelle.
*/
if (file_exists(CONTENT.'Pages' . DS . $File.'Content.ctp')) {
    $ContentPage = CONTENT.'Pages' . DS . $File.'Content.ctp';
}
/**
 * Fichier d'erreur
 */
else if (!file_exists(CONTENT.'Pages' . DS . $File.'Content.ctp')) {
    $AffichError .= 'Erreur : La page "'.ucfirst($File).'" n\'existe pas.<br>';
}


/**
 * On appelle la page d'erreur si une erreur existe
 */
if($AffichError != '') {
    $ContentPage = CONTENT.'Error' . DS . 'error400.ctp';
}











/**
 * On appelle la page d'erreur si une erreur existe
 */
if($AffichError != '') {
    $ContentPage = CONTENT.'Error' . DS . 'error400.ctp';
}







