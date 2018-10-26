<?php
return [
    'theme' => 'theme1', // default

    // Gestion de l'affichage // 1 = activé | 0 = désactivé
    'Activate' => [
        'Maintenance' => true, // "true" => mode maintenance activé
        'Google-TagManager' => 'GTM-KJ7MDZ3', // GTM-XXXXXXX
        'Google-reCaptcha-sitekey' => '6LdTrgoUAAAAAE678H7ePfgugHDFREJXeZQm-rge',
        'Google-reCaptcha-secretkey' => '6LdTrgoUAAAAADxGqBhK9ASX-V8Cs2MrRBbsHDsm',
        'Cookies' => true, // 'true' affichera le bandeau sur le site
        'Favicons' => true, // 'true' affichera les favicons -> /site/Medias/img/favicon/ -> https://www.favicon-generator.org/

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
        'Name'              => 'Imag\'Inside',
        'Baseline'          => 'Location de site vitrine à 39€ /mois',
        'Adress'            => '52 Rue Cérès',
        'Zipcode'           => '51100',
        'Town'              => 'Reims',
        'Country'           => 'France',
        'Phone1'            => '06 30 56 18 46',
            'Phone1Link'    => '+33630561846',
        'Phone2'            => '03 00 00 00 00',
            'Phone2Link'    => '+33300000000',
        'Mail'              => 'hello@imaginside.com',
        'Website'           => 'www.ma-vitrine.pro',
            'WebsiteURL'    => 'https://www.ma-vitrine.pro/',

        'Gerant' => [
            'Nom'           => 'ADAM',
            'Prenom'        => 'David',
        ],
    ],


    'Juridique' => [
        'Name'              => 'Imag\'Inside',
        'Adress'            => '52 Rue Cérès',
        'Zipcode'           => '51100',
        'Town'              => 'Reims',
        'Country'           => 'France',
        'StatutJuridique'   => 'SASU (Société par Actions Simplifiée Unipersonnelle)',
        'Capital'           => '5 500',
        'NSiren'            => '802 341 354',
        'TVA'               => 'FR17802341354',
        'IRCS'              => 'Reims',
        'Publication' => [
            'Dir'           => 'M. David ADAM',
            'Mail'          => 'hello@imaginside.com',
        ],
    ],


    'GDPR' => [
        'DPO'               => 'M. David ADAM',
        'Mail'              => 'hello@imaginside.com',
    ],


    'SocialNetwork' => [ // Ici les URLs
        'Facebook'  => '#',
        'Twitter'   => '#',
        'GooglePlus'=> '#',
        'Pinterest' => '#',
        'Vimeo'     => '#',
        'Linkedin'  => '#',
        'Viadeo'    => '#',
        'Dribbble'  => '#',
        'YouTube'   => '#',
        'RSS'       => '#',
        'Instagram' => '#',
    ],

    'Developer' => [
        'Name'              => 'Imag\'Inside',
        'Baseline'          => 'Création de sites internet à Reims',
        'Adress'            => '52 Rue Cérès - 51100 Reims - France',
        'Dev'               => 'Développement - Design Web - Intégration : Axel FARKAS & David ADAM<br>',
        'Phone'             => '06 30 56 18 46',
            'PhoneLink'     => '+33630561846',
        'Mail'              => 'hello@imaginside.com',
        'Website'           => 'www.imaginside.com',
            'WebsiteURL'    => 'https://www.imaginside.com/',
        'Hebergement'       => 'OVH SAS<br>140 Quai du Sartel<br>59100 Roubaix - France<br>RCS Roubaix - Tourcoing 424 761 419',
    ],

    'Mails' => [
        'default' => [
            'From'          => 'hello@imaginside.com', // Envoyé depuis MAIL
            'FromName'      => 'Imag\'Inside',  // Envoyé de NOM
            'ReplyTo'       => 'hello@imaginside.com', // Répondre à MAIL
            'ReplyToName'   => 'Coucou', // Répondre à NOM
            
            'template'      => 'default.php', // Template mail pour internaute
        ],
        'gestionnaire' => [
            'template'  => 'gestionnaire.php',
            'to'        => 'dvd.chester@gmail.com' // Mail pour le gestionnaire
        ],
        'internaute' => [
            'template'  => 'internaute.php',
            'to'        => 'dvd.chester@gmail.com' // Mail pour le gestionnaire
        ],
    ]

];