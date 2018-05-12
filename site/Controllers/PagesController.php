<?php
class PagesController extends Controllers
{
    public function index()
    {
        $this->set('NamePage', 'Accueil');
        $this->set('DescPage', 'Site vitrine professionnel d\'exemple, à partir de 39€ /mois seulement');
    }
    public function page_title()
    {
        $this->set('NamePage', 'Titre de page');
        $this->set('DescPage', 'Exemple d\'affichage de titre des pages');
    }

    public function contact()
    {
        $this->set('NamePage', 'Contactez-nous');
        $this->set('DescPage', 'Contactez-nous pour obtenir un site vitrine professionnel et de qualité !');
    }

    public function mentions_legales()
    {
        $this->set('NamePage', 'Mentions légales');
        $this->set('DescPage', 'Mentions légales');
    }
}