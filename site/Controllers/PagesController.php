<?php

use II\Utilities\Mailer;

class PagesController extends Controllers
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
        // $this->Breadcrumb->add('jeux à bulles');
        
        $this->set('NamePage', 'Accueil');
        $this->set('DescPage', 'Votre site vitrine professionnel, à partir de 39€ /mois seulement');
        $this->set('ClassesBody', 'accueil');
    }
    public function pageTitle()
    {
        $this->set('NamePage', 'Titre de page');
        $this->set('DescPage', 'Exemple d\'affichage de titre des pages');
        $this->set('ClassesBody', '');
        $this->set('ClassesBody', 'page-title');
    }

    public function contact()
    {
        $this->set('NamePage', 'Contactez-nous');
        $this->set('DescPage', 'Contactez-nous pour obtenir un site vitrine professionnel et de qualité !');
        $this->set('ClassesBody', 'contact');

        $form = new \II\Forms\ContactForm();
        
        if($form->isSubmitted())
        {
            $errors = $form->validate();
            if(!empty($errors))
            {   
                $this->set([
                    'success' => false,
                    'errors' => $errors,
                ]);
            }
            else
            {
                $this->set('success', true);
                var_dump($form->getData());

                $mailer = new Mailer();

                var_dump($mailer);

                die();
                // Gérer la soumission du formulaire ici
            }

        }

        $this->set([
            'form' => $form
        ]);
    }

    public function mentionsLegales()
    {
        $this->set('MetaRobot', 'noindex, nofollow');
        $this->set('NamePage', 'Mentions légales');
        $this->set('DescPage', 'Mentions légales');
        $this->set('ClassesBody', 'mentions-legales');
    }

    public function cookies()
    {
        $this->set('MetaRobot', 'noindex, nofollow');
        $this->set('NamePage', 'Cookies');
        $this->set('DescPage', 'Cookies');
        $this->set('ClassesBody', 'cookies');
    }
    public function politiqueDeProtectionDesDonnees()
    {
        $this->set('MetaRobot', 'noindex, nofollow');
        $this->set('NamePage', 'Politique de protection des données');
        $this->set('DescPage', 'Politique de protection des données');
        $this->set('ClassesBody', 'Politique de protection des données');
    }
}