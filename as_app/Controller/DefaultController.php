<?php
class DefaultController extends AppController
{

    protected $models = [
        
    ];

    public function __construct(){
        parent::__construct();
    }

    public function home(){
        
        $articles = $this->Articles->getAll();
        $this->set('Articles', $articles);

    }

    public function blog(){
    }

    public function article($id, $action){
        $article = $this->Articles->get($id);
    }

    // public function pageParam($filePageParam) {

    //     $pageParam = PARAM . $filePageParam . 'Param.ctp';

    //     /**
    //      * Vérifie l'existance du fichier de paramètre de la page.
    //      */
    //     if (!file_exists($pageParam)) {
    //         MyError::addError('Erreur #1 | DefaultController | La fichier de paramètre de la page "'.ucfirst($filePageParam).'" n\'existe pas.');
    //     } else {
    //         return $pageParam;
    //     }
    // }

    // public function pageContent($filePageContent) {
        
    //     $pageContent = CONTENT . 'Pages' . DS . $filePageContent . 'Content.ctp';

    //     /**
    //      * Vérifie l'existance du contenu de la page.
    //      */
    //     if (!file_exists($pageContent)) {
    //         MyError::addError('Erreur #2 | DefaultController | La page "' . ucfirst($filePageContent) . '" n\'existe pas.');
    //     } else {
    //         return $pageContent;
    //     }
    // }

}
