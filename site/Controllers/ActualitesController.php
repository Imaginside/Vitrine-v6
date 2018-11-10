<?php

use II\Utilities\Mailer;
use II\Utilities\Configure;
use II\Utilities\Session;

class ActualitesController extends Controllers
{
    
    public function preprocess()
    {
        $this->set('MetaRobot', 'index, follow');
        
        $this->set('ClassesTopBar' , 'topbar-colored topbar-fullwidth dark visible-md visible-lg'); // topbar-colored topbar-fullwidth dark visible-md visible-lg
        // Possiblité d'ajouter des classes à la div topbar :
        // - dark | light 
        // - Transparent : topbar-transparent dark | topbar-transparent
        // - Coloré : topbar-colored
        // - Largeur : topbar-fullwidth

        $this->set('ClassesHeader' , 'header-sticky-resposnive header-light-transparent'); // header-sticky-resposnive header-light-transparent
        // - BackgroundColor : dark | light
        // - Coloré : header-colored dark | header-colored light
        // - Style : 
        //     Large : header-fullwidth
        //     Modern : header-modern | header-modern dark | header-modern header-transparent dark | header-modern header-colored dark
        //     Mini : header-mini dark
        //     Static : header-static
        //     No sticky : header-no-sticky
        //     Sticky responsive : header-sticky-resposnive
        // - Position logo : header-logo-right |  header-logo-center
        // - Transparent : header-transparent light | header-transparent dark | header-light-transparent | header-dark-transparent dark | header-colored-transparent dark
        
        // $this->Breadcrumb->add('Jeux');
    }

    public function postprocess()
    {
    }
    
    public function index()
    {
        $this->set('NamePage', 'Actualités');
        $this->set('DescPage', 'Exemple d\'affichage du blog');
        $this->set('ClassesBody', 'actualites');
    }
    public function articleSimple()
    {
        $this->set('NamePage', 'Article Simple');
        $this->set('DescPage', 'Exemple d\'affichage d\'un article simple');
        $this->set('ClassesBody', 'article-simple');
    }
    public function articleGallery()
    {
        $this->set('NamePage', 'Article Galerie');
        $this->set('DescPage', 'Exemple d\'affichage d\'un article galerie');
        $this->set('ClassesBody', 'article-gallery');
    }
    public function articleVideo()
    {
        $this->set('NamePage', 'Article Vidéo');
        $this->set('DescPage', 'Exemple d\'affichage d\'un article video');
        $this->set('ClassesBody', 'article-video');
    }
    public function articleAudio()
    {
        $this->set('NamePage', 'Article Audio');
        $this->set('DescPage', 'Exemple d\'affichage d\'un article audio');
        $this->set('ClassesBody', 'article-audio');
    }
}