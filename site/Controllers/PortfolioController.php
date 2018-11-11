<?php

use II\Utilities\Mailer;
use II\Utilities\Configure;
use II\Utilities\Session;

class PortfolioController extends Controllers
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
        $this->set('NamePage', 'Portfolio');
        $this->set('DescPage', 'Exemple d\'affichage du portfolio');
        $this->set('ClassesBody', 'portfolio');
    }
    public function portfolioDefault()
    {
        // $this->Breadcrumb->add('Portfolio');
        $this->set('NamePage', 'Portfolio defaut');
        $this->set('DescPage', 'Exemple d\'affichage portfolio');
        $this->set('ClassesBody', 'portfolio-default');
    }
    public function portfolioSlider()
    {
        $this->set('NamePage', 'Portfolio slider');
        $this->set('DescPage', 'Exemple d\'affichage portfolio slider');
        $this->set('ClassesBody', 'portfolio-slider');
    }
}