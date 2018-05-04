<?php

// require dirname(__DIR__).'/Classes/router.classe.php';

$this->setBasePath('/Vitrine-v6');

$this->map('GET', '/', ['controller' => 'Default', 'action' => 'home'], 'accueil');
$this->map('GET', '/demo', 'demo', 'demo');
$this->map('GET', '/blog', 'blog', 'blog');
$this->map('GET', '/blog/[i:identifiant]/[a:action]', 'article', 'article'); // http://localhost/Vitrine-v6/demo/wololo/12



/*
$router->map('GET|POST','/', 'home#demo', 'home');
$router->map('GET','/contact/', 'contact', 'contact');
$router->map('GET','/users/', array('c' => 'UserController', 'a' => 'ListAction'));
$router->map('GET','/users/[i:id]', 'users#show', 'users_show');
$router->map('POST','/users/[i:id]/[delete|update:action]', 'usersController#doAction', 'users_do');
$router->map('GET','/actualites/', array('c' => 'UserController', 'a' => 'ListAction'));
$router->map('GET','/actualites/[i:id]', 'actualites#show', 'actualites_show');
*/

// match current request
// $match = $router->match();


// require CONTROLLER . 'DefaultController.php';

// if($match) {
//     $controller = new Controller();
//     include $controller->pageParam($match['target']);
//     include $controller->pageContent($match['target']);
// }
// else {
// 	echo '<h1 style="color:red">La page n\'existe pas.</h1>';
// }


 /**
 * Récupère le nom du fichier appelé
 */
// if(isset($_GET['File']) && $_GET['File']!='') {

//     $File = Outils::SecureVar($_GET['File']);

//     // Supprimer le dernier '/' si existant
//     $File = rtrim($File,'/');
    
//     // On fait un tableau avec les valeurs, séparés par un '/'
//     $FileArrow = preg_split("/[\/]+/", $File);
//     // On compte le nombre de résultat
//     $NbFileArrow = count($FileArrow);
    
//     // Si 1
//     if($NbFileArrow===1) {
//         $File = $FileArrow[0];
//     } else {
//         $LastURL = ''; // Initialise
//         for($i = 1; $i < $NbFileArrow; $i++){
//             $LastURL .= 'variable'.$i.'='.$FileArrow[$i].'&'; // On crée la chaine
//         }
//         $File = $FileArrow[0];
//         $LastURL = rtrim($LastURL, '&');
//     }

//     if($File == $FileHome) {
//         $File = 'home';
//         include (CONTROLLER.'DefaultController.php');
//     }
// } else {
//     $File = 'home';
//     include (CONTROLLER.'DefaultController.php');
// }


// echo $File;

