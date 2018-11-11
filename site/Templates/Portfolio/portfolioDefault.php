<?php
use II\Utilities\Configure;

// Affichage gallery
echo $this->element('Portfolio/portfolio-default-single.php', [
    'PortfolioNameProjet' => 'Ma Vitrine', 
    'PortfolioBgheader' => 'header-project.jpg', 
    'Portfolio_PageTitleClassesSection' => '',
    'Portfolio_PageTitleH1Classes' => 'text-light ',  // text-muted | text-dark | text-light | text-primary | ... css bootstrap

    'PortfolioClient' => 'Ma Vitrine',
    'PortfolioWebsite' => 'ma-vitrine.pro', // mon-site.fr
    'PortfolioWebsiteTitle' => 'Création de site internet', // title de l'url
    'PortfolioWebsiteURL' => 'https://www.ma-vitrine.pro/', // https://www.mon-site.fr/
    'PortfolioDate' => '10/11/2018', // XX/XX/XXXX
    'PortfolioServices' => 'Création d\'un site internet', // Les réalisations. Ex.: Création de site internet, logo
    'PortfolioProjectDescriptionCol1' => '<h3>Guide to the World has the guts to design and develop the impossible. With passion and a lot of expertise we create a surprisingly timeless collection of beautiful functional furniture, made with innovative and sustainable materials. Our brand    represents connection.</h3>',
    'PortfolioProjectDescriptionCol2' => '<h3>Guide to the World has the guts to design and develop the impossible. With passion and a lot of expertise we create a surprisingly timeless collection of beautiful functional furniture, made with innovative and sustainable materials. Our brand    represents connection.</h3>',
    
    'PortfolioIcons' => true, // Activer ou non l'affichage 3 icones. 'true' | 'false'
    
    'PortfolioIcon' => [
        // Entre 2 et 4 icons pour un affichage optimal
        // 'Exemple' => ['icone fontawesome', 'Titre', 'Description'],
        'Icon 1' => ['fa-paper-plane', 'Tags & Models', 'Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.'],
        'Icon 2' => ['fa-pie-chart', 'Our charts', 'Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.'],
        'Icon 3' => ['fa-lightbulb-o', 'Light & Dark', 'Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.'],
    ],

    'PortfolioPictures' => [
        // 'Exemple' => ['Titre', 'image (XX.jpg)', 'Text btn'],
        'Picto 1' => ['Title projet', '31.jpg', 'Zoom'],
        'Picto 2' => ['Title projet', '32.jpg', 'Zoom'],
        'Picto 3' => ['Title projet', '33.jpg', 'Zoom'],
        'Picto 4' => ['Title projet', '34.jpg', 'Zoom'],
    ],

    'PortfolioProjetInfo' => true,
    'PortfolioProjetInfoTitle' => 'Infos sur le projet',
    'PortfolioProjetInfoDescription' => 'Guide to the World has the guts to design and develop the impossible. With passion and a lot of expertise we create a surprisingly timeless collection of beautiful functional furniture, made with innovative and sustainable materials. Our brand represents connection.',

    'PortfolioShare' => true,

    'PortfolioPostNav' => true,
]);