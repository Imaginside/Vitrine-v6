<?php
class PagesController extends Controllers
{
    public function index()
    {
        $this->set('NamePage', 'Accueil');
    }
    public function page_title()
    {
        $this->set('NamePage', 'Accueil');
    }

    public function contact()
    {
    }

    public function mentions_legales()
    {
    }
}