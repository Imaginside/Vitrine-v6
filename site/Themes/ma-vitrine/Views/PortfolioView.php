<?php
class PortfolioView extends Views
{
    // processors:
    // 1 - __constructor => nouvelle instance pour générer le contenu à partir du template
    // 2 - preprocess // "execution" sur l'instance créé en "1"
    // 3 - (facultatif) execution d'une métode définie par l'URL (ex: index)
    // 4 - rendu du template php
    // 5 - postprocess // "execution" sur l'instance créé en "1"
    // 6 - __constructor => nouvelle instance pour générer le layout à partir du template et du contenu créé en "1"
    // 7 - prelayout // execution du l'instance créé en "5"
    // 8 - rendu du template du layout
    // 9 - postlayout // execution du l'instance créé en "5"
    public function preprocess(){}
    public function postprocess(){}

    public function prelayout(){}
    public function postlayout(){}

    // public function index($arg1, $arg2, ..., $argn)
    // {
    //     $this->set('name', 'value');
    //     $this->set(['name' => 'value']);
    //     return ['name' => 'value'];
    // }
}