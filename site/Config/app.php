<?php
return [
    'theme' => 'theme1', // default

    // Gestion de l'affichage // 1 = activé | 0 = désactivé
    'Activate' => [
        'Maintenance' => true, // "true" => mode maintenance activé
        'Google-TagManager' => 'GTM-KJ7MDZ3', // GTM-XXXXXXX
        'Google-reCaptcha-sitekey' => '',
        'Google-reCaptcha-secretkey' => '',
        'Cookies' => true, // 'true' affichera le bandeau sur le site

        'SocialNetwork' => [ // Icônes des réseaux sociaux
            'TopBar' => true,
            'Footer' => true,
        ],
        'Breadcrumb' => true, // Fil d'ariane
    ],

    'logo-default' => BASE_URL . IMAGES . 'logo-imaginside.png',
    'logo-dark' => BASE_URL . IMAGES . 'logo-imaginside-dark.png',
    'logo-light' => BASE_URL . IMAGES . 'logo-imaginside.png',

    'Site' => [
        'date_mise_en_ligne' => '2018',
    ],

    'Society' => [
        'Name'      => 'Imag\'Inside',
        'Baseline'  => 'Location de site vitrine à 39€ /mois',
        'Adress'    => '52, Rue Cérès',
        'Zipcode'   => '51100',
        'Town'      => 'Reims',
        'Phone1'    => '06 30 56 18 46',
            'Phone1Link'    => '+33630561846',
        'Phone2'    => '03 00 00 00 00',
            'Phone2Link'    => '+33300000000',
        'Mail'      => 'hello@imaginside.com',
    ],

    'SocialNetwork' => [ // Ici les URLs
        'Facebook'  => '#',
        'Twitter'   => '#',
        'GooglePlus'=> '#',
        'Pinterest' => '#',
        'Vimeo'     => '#',
        'Linkedin'  => '#',
        'Dribbble'  => '#',
        'YouTube'   => '#',
        'RSS'       => '#',
    ],

];