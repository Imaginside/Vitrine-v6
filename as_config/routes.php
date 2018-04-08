<?php

function SecureVar($value)
{
    // If magic quotes not turned on add slashes.
    if(!get_magic_quotes_gpc())

    // Adds the slashes.
    { $value = addslashes($value); }

    // Strip any tags from the value.
    $value = strip_tags($value);

    // Return the value out of the function.
    return $value;
}




/**
 * Récupère le nom du fichier appelé
 */
if(isset($_GET['File']) && $_GET['File']!='')
{

    $File = SecureVar($_GET['File']);

    // Supprimer le dernier '/' si existant
    $File = rtrim($File,'/');
    

    // On fait un tableau avec les valeurs, séparés par un '/'
    $FileArrow = preg_split("/[\/]+/", $File);
    // On compte le nombre de résultat
    $NbFileArrow = count($FileArrow);
    
    // Si 1
    if($NbFileArrow===1) {
        $File = $FileArrow[0];
    }
    
    // Si superieur à 1
    else if($NbFileArrow>1) {
        $LastURL = ''; // Initialise
        for($i = 1; $i < $NbFileArrow; $i++){
            $LastURL .= 'variable'.$i.'='.$FileArrow[$i].'&'; // On crée la chaine
        }
        $File = $FileArrow[0];
        $LastURL = rtrim($LastURL, '&');
    }
    if($File == $FileHome)
        $File = 'home';
        include (CONTROLLER.'DefaultController.php');

}


// Pas de fichier appelé
else
{
    $File = 'home';
    include (CONTROLLER.'DefaultController.php');
}



