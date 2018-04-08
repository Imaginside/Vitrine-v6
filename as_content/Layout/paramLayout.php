<?php
/**
 * HEADER
 * Vérifie l'existance du fichier entete.inc.php dans le theme
 */
if (file_exists(WWW_ROOT_INC.'entete.inc.php')) {
    $LayoutEntete = WWW_ROOT_INC.'entete.inc.php';
}
else if (!file_exists(WWW_ROOT_INC.'entete.inc.php')) {
    $LayoutEntete = LAYOUT.'/entete.inc.php';
}


/**
 * FOOTER
 * Vérifie l'existance du fichier footer.inc.php dans le theme
 */
if (file_exists(WWW_ROOT_INC.'footer.inc.php')) {
    $LayoutFooter = WWW_ROOT_INC.'footer.inc.php';
}
else if (!file_exists(WWW_ROOT_INC.'footer.inc.php')) {
    $LayoutFooter = LAYOUT.'/footer.inc.php';
}





if(isset($ContentParam))
    include ($ContentParam);

include (LAYOUT.'/base.inc.php');