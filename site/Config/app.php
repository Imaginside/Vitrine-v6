<?php
return [
    /**
     * Thème graphique du site
     */
    'theme' => 'ma-vitrine', // Dossier dans : site/Themes/_DIR_


    /**
     * Gestion de l'affichage
     */
    'Activate' => [
        'Maintenance' => true, // "true" => mode maintenance activé
        'Google-TagManager' => 'GTM-KJ7MDZ3', // GTM-XXXXXXX
        'Google-reCaptcha-sitekey' => '6LdTrgoUAAAAAE678H7ePfgugHDFREJXeZQm-rge', // 6LdTrgoUAAAAAE678H7ePfgugHDFREJXeZQm-rge
        'Google-reCaptcha-secretkey' => '6LdTrgoUAAAAADxGqBhK9ASX-V8Cs2MrRBbsHDsm', // 6LdTrgoUAAAAADxGqBhK9ASX-V8Cs2MrRBbsHDsm
        'Cookies' => true, // 'true' affichera le bandeau sur le site
        'Favicons' => true, // 'true' affichera les favicons -> /site/Medias/img/favicon/ -> https://www.favicon-generator.org/

        'SocialNetwork' => [ // Icônes des réseaux sociaux
            'TopBar' => true,
            'Footer' => true,
        ],
        'Breadcrumb' => true, // Fil d'ariane
    ],


    /**
     * Carte Google Maps
     * Google Cloud Plateform -> A activer :
     *      - Maps Javascript API
     *      - Geocoding API
     */
    'Google-Map' => [
        'Activate' => true,
        'Key' => 'AIzaSyDtzu36FA7o17RfSYCTWdzgBtp0yaSXNN8', // Si vide, non activé
        'data-map-address' => '52 Rue Cérès, 51100 Reims, FRANCE', // Adresse
        'data-map-icon' => '/site/Themes/ma-vitrine/img/markers/marker3.png', // lien icon
        'data-map-zoom' => '13', // Zoom
    ],


    /**
     * Logos
     */
    'logo-default' => BASE_URL . IMAGES . 'logo-imaginside.png',
    'logo-dark'     => BASE_URL . IMAGES . 'logo-imaginside-dark.png',
    'logo-light'    => BASE_URL . IMAGES . 'logo-imaginside.png',
    'logo-mail'     => BASE_URL . IMAGES . 'logo-imaginside.png',


    /**
     * Divers
     */
    'Site' => [
        'date_mise_en_ligne' => '2018', // Année de mise en ligne du site -> Affiché dans le footer
    ],


    /**
     * Informations sur la société
     */
    'Society' => [
        'Name'              => 'Imag\'Inside',
        'Baseline'          => 'Location de site vitrine à 39€ /mois',
        'Adress'            => '52 Rue Cérès',
        'Zipcode'           => '51100',
        'Town'              => 'Reims',
        'Country'           => 'France',
        'Phone1'            => '06 30 56 18 46', // 06 00 00 00 00
            'Phone1Link'    => '+33630561846', // +33600000000
        'Phone2'            => '03 00 00 00 00', // 06 00 00 00 00
            'Phone2Link'    => '+33300000000', // +33600000000
        'Mail'              => 'contact@ma-vitrine.pro', // contact@monsite.fr
        'Website'           => 'www.ma-vitrine.pro', // www.monsite.fr
            'WebsiteURL'    => 'https://www.ma-vitrine.pro/', // https://www.monsite.fr/
        'Gerant' => [
            'Nom'           => 'ADAM',
            'Prenom'        => 'David',
        ],
    ],


    /**
     * La partie juridique est reprise dans les mentions légales et Politique de protection des données
     */
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


    /**
     * Réglementation Générale sur le Protection des Données
     * General Data Protection Regulation
     */
    'GDPR' => [
        'DPO'               => 'M. David ADAM',
        'Mail'              => 'hello@imaginside.com', // Mail du DPO
    ],

    
    /**
     * Liens des réseaux sociaux
     */
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


    /**
     * Les développeurs, repris dans les mentions légales.
     */
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


    /**
     * Paramètres de l'envoi des mails
     */
    'Mails' => [
        
        // -> gestionnaire
        // sender no-reply@ma-vitrine.pro
        // from internaute@gmail.com
        // replyTo internaute@gmail.com

        // -> internaute
        // sender no-reply@ma-vitrine.com
        // from perso@gmail.com
        // replyTo perso@gmail.com

        'default' => [
            'Sender'        => 'no-reply@ma-vitrine.pro', // Envoyé depuis MAIL
            'SenderName'    => 'Imag\'Inside - Ma Vitrine',  // Envoyé de NOM   
            'template'      => 'default.php', // Template mail pour internaute
        ],
        'gestionnaire' => [
            'From'      => 'contact@ma-vitrine.pro',
            'FromName'  => 'Imag\'Inside - Ma Vitrine',
            'template'  => 'gestionnaire.php',
            'to'        => 'contact@ma-vitrine.pro' // Mail pour le gestionnaire // dvd.chester@gmail.com // farkas.axel@gmail.com // hello@imaginside.com
        ],
        'internaute' => [
            'template'      => 'internaute.php',
            'ReplyTo'       => 'contact@ma-vitrine.pro', // Répondre à MAIL
            'ReplyToName'   => 'Imag\'Inside - Ma Vitrine', // Répondre à NOM
            // 'to'        => 'dvd.chester@gmail.com' // Mail pour l'internaute
        ],
    ],


    /**
     * Système de Blog
     */
    'Blog' => [
        'Comments' => true, // Affichage des commentaires sur les actualités. true = activé | false = désactivé
        'SidebarBlogActiv' => true, // Affichage de la sidebar. true = activé | false = désactivé
        'SidebarBlogPosition' => 'right', // Position de la sidebar. 'right' | 'left'
        'SidebarBlogSearch' => true, // Affichage du champ de recherche. true = activé | false = désactivé
        'SidebarBlogNewsletter' => true, // Affichage du champ newsletter. true = activé | false = désactivé
        'SidebarBlogCategories' => true, // Affichage des catégories. true = activé | false = désactivé
        'SidebarBlogTwitter' => true, // Affichage du pavé Twitter. true = activé | false = désactivé
        'SidebarBlogTwitterURL' => 'https://twitter.com/ImagInside?ref_src=twsrc%5Etfw', // URL du fil d'actualité
        'SidebarBlogTwitterheight' => '600', // Hauteur du fil d'actualité
    ],
];

