<?= 
$this->element('Page-title/page-title.php', [
    'PageTitleClassesSection' => 'page-title-center light', 
    // - Style : EMPTY | page-title-classic
    // - Alignement : EMPTY => page-title-left | page-title-center | page-title-right |
    // - Color : dark | light | color

    'PageTitleH1' => 'Votre site professionnel<br>à partir 39€/mois !', // Titre de la page
        'PageTitleH1Classes' => 'text-primary', // text-muted | text-dark | text-light | text-primary | ... css bootstrap
    'PageTitleSubTitle' => '<strong>Bienvenue sur le site de démonstration de l\'offre Vitrine</strong>.<br>
    Découvrez tous les avantages de cette offre ci-dessous.', // Sous titre

    // Choix du background du page-title
    'PageTitleImg' => '/site/Medias/img/header.jpg', // Lien vers l'image.  Vide si pas d'image. Ex. : /site/Medias/img/header.jpg
    'PageTitleImgSpeedParallax' => '-.170', // Vitesse du paralax -.170
    'PageTitlePattern' => '/site/Medias/pattern/pattern-exemple.png', // Lien vers l'image du pattern. Vide si pas de pattern. Ex. : /site/Medias/pattern/pattern-exemple.png
    'PageTitleBgColor' => '#DF0A40', // Couleur de fond - Vide si pas de couleur. Ex. : #DF0A40
    'PageTitleVideo' => '/site/Medias/video/We-Work-We-Wait', // Lien vers la vidéo SANS EXTENSION. Ex. : /site/Medias/video/presentation

    'PageTitleBreadcrumb' => false, // Affiche ou non du fil d'ariane => true | false | '' => '' vide pour laisser la configuration par défault via app.php
    'PageTitleScroller' => true, // Activer le bouton scroller
        'PageTitleScrollerClasses' => 'light circle-color', // Style du scroller : [light | dark | color] && [circle-light | circle-dark | circle-color]
        'PageTitleScrollerLink' => '#les-raisons-de-choisir-notre-site-vitrine', // Lien du scroller. Ex. : #portfolio
]);
?>




<section class="service-box" id="les-raisons-de-choisir-notre-site-vitrine">
	<div class="container">
		<div class="heading heading-center">
			<h2>Les raisons de choisir notre offre de site vitrine</h2>
			<p>Un site web de qualité - Une prestation professionnelle - Une offre exclusive</p>
		</div>
        <div class="row">
            <?php
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-diamond', // fa-XXXXXXX
                'IconBoxTitle' => 'Un site personnalisé',
                'IconBoxDesc' => 'avec votre <strong>logo</strong>, vos <strong>couleurs</strong>, vos <strong>contenus</strong>, vos <strong>photos</strong>, vos <strong>modules</strong>.',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-star-o', // fa-XXXXXXX
                'IconBoxTitle' => 'Un design moderne',
                'IconBoxDesc' => 'et qui le restera, en évoluant dans le temps avec vous.',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-file-text-o', // fa-XXXXXXX
                'IconBoxTitle' => '5 pages incluses',
                'IconBoxDesc' => 'puis 4,90€ ht la page supplémentaire',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-paper-plane', // fa-XXXXXXX
                'IconBoxTitle' => 'Restez en contact',
                'IconBoxDesc' => 'avec vos clients et prospect. <strong>Formulaire</strong>, carte <strong>Google Maps</strong>, liens vers les <strong>réseaux sociaux</strong>.',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-newspaper-o', // fa-XXXXXXX
                'IconBoxTitle' => 'Référencement SEO',
                'IconBoxDesc' => 'optimisé pour apparaître sur les principaux moteurs de recherche.',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-picture-o', // fa-XXXXXXX
                'IconBoxTitle' => 'Présentez les photos',
                'IconBoxDesc' => 'de vos réalisations, produits, équipe, ou encore de votre lieu de travail.',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-chain-broken', // fa-XXXXXXX
                'IconBoxTitle' => '12 mois',
                'IconBoxDesc' => 'd\'engagement seulement&nbsp;! Oubliez les <s>24</s> ou <s>36</s> mois de nos concurrents...',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-eur', // fa-XXXXXXX
                'IconBoxTitle' => '39€ /mois',
                'IconBoxDesc' => 'Soit un café par jour&nbsp;! <br>Vous voulez payer moins&nbsp;? Lisez le pavé suivant..',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-group', // fa-XXXXXXX
                'IconBoxTitle' => 'Parrainage',
                'IconBoxDesc' => 'Pour payez moins, parrainez&nbsp;!<br>2 mois offerts par parrainé et par filleul.',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-trash', // fa-XXXXXXX
                'IconBoxTitle' => 'Pas de publicité',
                'IconBoxDesc' => 'C\'est la base d\'un site <u>professionnel</u> et <u>sur-mesure</u>&nbsp;!',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-server', // fa-XXXXXXX
                'IconBoxTitle' => 'Le nom de domaine',
                'IconBoxDesc' => 'et l\'hébergement inclus la 1<sup>ère</sup> année, puis la 2<sup>ème</sup>, la 3<sup>ème</sup>, ... <br>Bref, c\'est <u>inclus</u>',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-pencil', // fa-XXXXXXX
                'IconBoxTitle' => 'Modification',
                'IconBoxDesc' => '2 modifications en cours d\'année + 1 modification complète des contenus /an.',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-magic', // fa-XXXXXXX
                'IconBoxTitle' => 'Un site évolutif',
                'IconBoxDesc' => 'Tous les 2 ans, un nouveau site, adapté aux technologies du moment&nbsp;!',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-bar-chart', // fa-XXXXXXX
                'IconBoxTitle' => 'Statistiques',
                'IconBoxDesc' => 'de fréquentation avec <strong>Google Analytics</strong>.',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-heart', // fa-XXXXXXX
                'IconBoxTitle' => 'Conçu avec amour',
                'IconBoxDesc' => '(et beaucoup de travail..) pour associations, artisans, commerçants, TPE et PME.',
            ]);
            echo $this->element('Services/box-icon-only.php', [
                'ClassCol' => 'col-md-3',
                'IconBoxEffect' => true,
                'IconBoxBorder' => true,
                'IconBoxSize' => 'large', // small | medium | large
                'IconBoxAlignCenter' => true,
                'IconBoxIconFA' => 'fa-glass', // fa-XXXXXXX
                'IconBoxTitle' => '100% Made in France',
                'IconBoxDesc' => 'Un développement technique, une gestion et une équipe basée à Reims',
            ]);
            ?>
        </div>
	</div>
</section>

<!-- COUNTERS -->
<section class="text-light p-t-150 p-b-150 background-overlay" data-parallax-image="/site/Medias/img/parallax/12.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <div class="text-center">
                    <div class="icon"><i class="fa fa-3x fa-code"></i></div>
                    <div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>LIGNES DE CODES</p>
                </div>
            </div>

            <div class="col-md-3">

                <div class="text-center">
                    <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                    <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>TASSES DE CAFÉ</p>
                </div>
            </div>

            <div class="col-md-3">

                <div class="text-center">
                    <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
                    <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>PROJETS FINIS</p>
                </div>
            </div>

            <div class="col-md-3">

                <div class="text-center">
                    <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
                    <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>CLIENTS SATISFAITS</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: COUNTERS -->


<section id="nos-clients" style="padding-bottom:0;">
	<div class="container">
		<div class="heading heading-center">
			<h2>Ils ont choisi notre offre de site vitrine</h2>
			<span class="lead">Nos clients géniaux avec qui nous avons le plaisir de travailler !</span>
		</div>
		<ul class="grid grid-4-columns">
            <?php
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Maison familiale depuis 1960, au cœur de la vallée de la Marne, à Dormans, sur les coteaux de Soilly.',
                'ToggleTitle' => 'Champagne Hugues Huttinot',
                'ClientName' => 'Champagne Hugues Huttinot',
                'ClientImage' => 'champagne-hugues-huttinot.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'H.M prestige VTC est spécialisée dans les navettes aéroports, navettes gares et transport de personnes, 24h/24 et 7j/7.',
                'ToggleTitle' => 'H.M Prestige VTC',
                'ClientName' => 'H.M Prestige VTC',
                'ClientImage' => 'hm-prestige-vtc.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Aménagement et entretien paysager, entretien des milieux aquatiques.',
                'ToggleTitle' => 'Edivert',
                'ClientName' => 'Edivert',
                'ClientImage' => 'edivert.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Le Sourire de Reims, spécialiste de la dragée Médicis depuis 1929, est le complice de toutes vos cérémonies et de votre envie de partager.',
                'ToggleTitle' => 'Le Sourire de Reims',
                'ClientName' => 'Le Sourire de Reims',
                'ClientImage' => 'le-sourire-de-reims.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Actuel Paysage crée, aménage et entretient des espaces verts de tous types : parcs, jardins, terrasses...',
                'ToggleTitle' => 'Actuel Paysage',
                'ClientName' => 'Actuel Paysage',
                'ClientImage' => 'actuel-paysage.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Un Dj à Reims qui vous conseille et vous écoute.',
                'ToggleTitle' => 'Sound Lights Diffusion',
                'ClientName' => 'Sound Lights Diffusion',
                'ClientImage' => 'sound-lights-diffusion.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Concepteur 3D, gestion et aménagement d\'intérieur.',
                'ToggleTitle' => 'Agence Fourmis Bleues',
                'ClientName' => 'Agence Fourmis Bleues',
                'ClientImage' => 'agence-fourmis-bleues.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Chambres d\'hôtes de charme en Champagne.',
                'ToggleTitle' => 'Le Mas Champenois',
                'ClientName' => 'Le Mas Champenois',
                'ClientImage' => 'le-mas-champenois.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Votre restaurant Indien en plein coeur de Châlons-en-Champagne.',
                'ToggleTitle' => 'Namaste India',
                'ClientName' => 'Namaste India',
                'ClientImage' => 'namaste-india.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Méca-Passions vous propose plusieurs services mécaniques autour des 4x4 raid, des voitures anciennes et des voitures américaines.',
                'ToggleTitle' => 'Méca Pasions',
                'ClientName' => 'Méca Pasions',
                'ClientImage' => 'meca-passions.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Bubble Best oeuvre dans l\'initiation et l\'animation de jeux et structures gonflables.',
                'ToggleTitle' => 'Bubble Best',
                'ClientName' => 'Bubble Best',
                'ClientImage' => 'bubble-best.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Coach sportif et remise en forme à Reims.',
                'ToggleTitle' => 'Sport Santé & You',
                'ClientName' => 'Sport Santé & You',
                'ClientImage' => 'sport-sante-and-you.png',
            ]);
            ?>
		</ul>
	</div>
</section>


<section class="background-grey">
	<div class="container">
		<div class="text-center">
			<h2>Votre société a besoin d'un site professionnel&nbsp;!</h2>
			<p class="lead">
				Pour se faire, rien de plus simple. Contactez-nous !<br>Vous n'avez pas de parrain pour vos 2 mois offerts ? Nous en trouverons un pour vous.
			</p>

			<a class="btn btn-default icon-left" href="contact"><span>C'est parti&nbsp;!</span></a>
		</div>
	</div>
</section>


<!-- TEAM -->
<section class="background-grey">
    <div class="container">
        <div class="heading heading-center">
            <h2>NOTRE ÉQUIPE</h2>
            <p>On se plie en 4 pour vous offrir un site vitrine de qualité !</p>
        </div>
        <div class="row team-members">
            <div class="col-md-offset-3 col-md-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="/site/Medias/img/team/david-adam.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>David ADAM</h3>
                        <span>Gérant, Web Designer, Infographiste</span>
                        <p>Un site beau, fonctionnel et optimisé, il n'y a que ça de vrai pour garder un internaute !</p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="https://www.facebook.com/imaginside.communication" target="_blank">
                                <i class="fa fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="https://twitter.com/ImagInside" data-width="100" target="_blank">
                                <i class="fa fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="https://www.instagram.com/imaginside/" data-width="118" target="_blank">
                                <i class="fa fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="https://www.linkedin.com/in/davadam/" data-width="100" target="_blank">
                                <i class="fa fa-linkedin"></i>
                                <span>LinkedIn</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:hello@imaginside.com" data-width="80">
                                <i class="fa fa-envelope"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="/site/Medias/img/team/axel-farkas.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Axel FARKAS</h3>
                        <span>Web Developer</span>
                        <!-- <p><strong>Axel</strong> : "Oui mais non, regarde, c'est facile en fait ! Si tu $this->element avant le $MaVar, ça ne marche pas !"<br><strong>David</strong> : "Bah oui, j'suis bête..."</p> -->
                        <p>Développeur fou...<br>Même fatigué, ça fuse dans son cerveau !</p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100" target="_blank">
                                <i class="fa fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="https://www.linkedin.com/in/axel-farkas-87b18b105/" data-width="100" target="_blank">
                                <i class="fa fa-linkedin"></i>
                                <span>LinkedIn</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:hello@imaginside.com" data-width="80">
                                <i class="fa fa-envelope"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end: TEAM -->