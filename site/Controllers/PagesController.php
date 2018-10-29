<?php

use II\Utilities\Mailer;
use II\Utilities\Configure;
use II\Utilities\Session;

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
            // var_dump($errors);
            if(!empty($errors))
            {
                Session::addError('<strong>Attention !</strong> Un ou plusieurs champs ci-dessous sont mal renseignés.');
            }
            else
            {
                $submitted = $form->getData();

                $mailer = new Mailer('gestionnaire');
                $mailer->Subject = Configure::read('Society.Name') . ' - Ma Vitrine - Nouveau message';
                // $mailer->addAddress('dvd.chester@gmail.com'); // Envoyé à
                // var_dump($submitted);
                try {
                    $html = $mailer->send([
                        // Passer des variables au template (element) Html

                        'data' => $submitted, // Récupére toutes les données du formulaire

                        // '_DateEnvoi' => strftime('%A %d %B, %Hh%M'),
                        '_DayEnvoi' => strftime('%A %d %B'),
                        '_HourEnvoi' => strftime('%Hh%M'),
                        '_NomSite' => Configure::read('Society.Name'),
                        '_URLSite' => Configure::read('Society.WebsiteURL'),
                        '_WebSite' => Configure::read('Society.Website'),
                        '_LogoSite' => Configure::read('logo-default'),
                    ], $debug = false); // $debug = true permet de renvoyer le contenu HTML plutot que d'envoyer le mail. En local l'envoi de mails ne fonctionne pas.
                    
                    // print $html;

                    Session::addSuccessMessage('<strong>Félicitations !</strong><br>Votre message a été envoyé avec succés.<br>
                    Nous vous recontacterons dans les meilleurs délais.');

                } catch(Exception $e) {
                    Session::addError('<strong>Attention !</strong><br>Une erreur est survenue, votre message n\'a pas pus etre transmis correctement.<br>
                    Merci de nous contacter par téléphone au <a href="tel:' . Configure::read('Society.Phone1Link') . '">' . Configure::read('Society.Phone1') . ',</a> ou par mail à <a href="mailto:' . Configure::read('Society.Mail') . '">' . Configure::read('Society.Mail') . '</a>.<br>
                    Nous nous excusons pour la gêne occasionnée.');
                }
                // die();
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