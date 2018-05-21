
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

    'PageTitleBreadcrumb' => true, // Affiche ou non du fil d'ariane => true | false | '' => '' vide pour laisser la configuration par défault via app.php
    'PageTitleScroller' => true, // Activer le bouton scroller
        'PageTitleScrollerClasses' => 'light circle-color', // Style du scroller : [light | dark | color] && [circle-light | circle-dark | circle-color]
        'PageTitleScrollerLink' => '#portfolio', // Lien du scroller. Ex. : #portfolio
]);
?>



<section class="service-box">
	<div class="container">
		<div class="heading heading-center">
			<h2>Vos services inclus dans l'offre "Site Vitrine"</h2>
			<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
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
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '1.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '2.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '3.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '4.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '5.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '6.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '7.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '8.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '9.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '10.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '3.png',
            ]);
            echo $this->element('Clients/list-client-only.php', [
                'ToggleActivate' => true,
                'ToggleDataContent' => 'Notre client fait des superbes choses.',
                'ToggleTitle' => 'Le client',
                'ClientName' => 'Le client',
                'ClientImage' => '5.png',
            ]);
            ?>
		</ul>
	</div>
</section>


<section class="background-grey">
	<div class="container">
		<div class="text-center">
			<h2>Votre société à besoin d'un site professionnel&nbsp;!</h2>
			<p class="lead">
				Pour se faire, rien de plus simple. Contactez-nous !<br>Vous n'avez pas de parrain pour vos 2 mois offerts ? Nous en trouverons un pour vous.
			</p>

			<a class="btn btn-default icon-left" href="contact"><span>C'est parti&nbsp;!</span></a>
		</div>
	</div>
</section>

<!-- REVOLUTION SLIDER -->
<div id="slider">

    <div id="rev_slider_30_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="POLO Homepage" style="background-color:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.1 fullscreen mode -->
        <div id="rev_slider_30_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-130" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="/site/Themes/theme1/img/slider/notgeneric_bg3-180x100.jpg" data-rotate="0" data-saveperformance="off" data-title="WORLD OF POLO" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="1920" height="1080" data-lazyload="/site/Themes/theme1/img/slider/notgeneric_bg3.jpg" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption text-center NotGeneric-Title tp-resizeme" id="slide-130-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','-1','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-54','0','-90','-92']" data-fontsize="['70','55','40','45']" data-lineheight="['70','70','70','50']" data-width="['none','none','none','462']" data-height="['none','none','none','124']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;text-align:center;">WELCOME TO THE WORLD OF POLO
                    </div>

                    <!-- LAYER NR. 2 -->
                    <p class="tp-caption text-center thintext_dark tp-resizeme" id="slide-130-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','1','0']" data-y="['middle','middle','middle','middle']" data-voffset="['10','52','-33','3']" data-fontsize="['16','13','13','13']" data-lineheight="['26','20','20','20']" data-width="['946','879','736','421']" data-height="['none','none','61','69']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 946px; max-width: 946px; white-space: normal; font-weight: 500; color: rgba(255, 255, 255, 1.00);text-align:center;">Say hello to the smartest and most flexible bootstrap template. Polo is an powerful template that can build any type of websites, and quite possibly the only one you will ever need.
                    </p>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption rev-scroll-btn " id="slide-130-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" data-width="35" data-height="55" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:pointer;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                        <span>
                    </span>

                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption text-center Fashion-BigDisplay tp-resizeme" id="slide-130-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','-3']" data-y="['top','top','top','top']" data-voffset="['500','476','476','408']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1290;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="2340" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;"><a href="#" class="btn btn-outline btn-light">Explore more</a>
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme" id="slide-130-layer-12" data-x="['left','left','left','left']" data-hoffset="['291','291','291','291']" data-y="['top','top','top','top']" data-voffset="['276','276','276','276']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1050;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 9;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake1.png" data-no-retina>
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption tp-resizeme" id="slide-130-layer-13" data-x="['left','left','left','left']" data-hoffset="['706','706','706','706']" data-y="['top','top','top','top']" data-voffset="['347','347','347','347']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:850;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 10;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake2.png" data-no-retina>
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption tp-resizeme" id="slide-130-layer-14" data-x="['left','left','left','left']" data-hoffset="['836','836','836','836']" data-y="['top','top','top','top']" data-voffset="['586','586','586','586']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1030;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 11;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake3.png" data-no-retina>
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption tp-resizeme" id="slide-130-layer-15" data-x="['left','left','left','left']" data-hoffset="['539','539','539','539']" data-y="['top','top','top','top']" data-voffset="['627','627','627','627']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 12;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake4.png" data-no-retina>
                    </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption tp-resizeme" id="slide-130-layer-16" data-x="['left','left','left','left']" data-hoffset="['180','180','180','180']" data-y="['top','top','top','top']" data-voffset="['629','629','629','629']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1180;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 13;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake3.png" data-no-retina>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-125" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="/site/Themes/theme1/img/slider/pattern-180x100.png" data-rotate="0" data-saveperformance="off" data-title="100+ LAYOUTS" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="1920" height="1080" data-lazyload="/site/Themes/theme1/img/slider/pattern.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption text-center NotGeneric-Title tp-resizeme" id="slide-125-layer-1" data-x="['center','center','center','center']" data-hoffset="['5','5','-5','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-223','-136','-302','-122']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; color: rgba(17, 17, 17, 1.00);">200+ Layouts
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption text-center thintext_dark tp-resizeme" id="slide-125-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','5','3','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-131','-72','-201','-40']" data-fontsize="['16','13','13','13']" data-lineheight="['26','20','20','20']" data-color="['rgba(0, 0, 0, 1.00)','rgba(17, 17, 17, 1.00)','rgba(17, 17, 17, 1.00)','rgba(17, 17, 17, 1.00)']" data-width="['943','none','673','445']" data-height="['61','none','61','none']" data-whitespace="['normal','nowrap','normal','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 943px; max-width: 943px; max-width: 61px; max-width: 61px; white-space: normal; font-weight: 500; color: rgba(0, 0, 0, 1.00);text-align:center;">POLO is packed with 100+ pre-made layouts that allow you to quickly jumpstart your project. Completely customizable for creating your own designs.
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-17" data-x="['left','left','left','left']" data-hoffset="['331','331','290','142']" data-y="['top','top','top','top']" data-voffset="['701','701','533','501']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1000" data-responsive_offset="on" style="z-index: 7;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','183']" data-hh="['168px','168px','168px','122']" data-lazyload="/site/Themes/theme1/img/slider/40.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-13" data-x="['left','left','left','left']" data-hoffset="['53','53','53','-52']" data-y="['top','top','top','top']" data-voffset="['686','686','686','605']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:470;s:470;" data-start="1050" data-responsive_offset="on" style="z-index: 8;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['278px','278px','278px','202.45652173913044']" data-hh="['184px','184px','184px','134']" data-lazyload="/site/Themes/theme1/img/slider/18.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-19" data-x="['left','left','left','left']" data-hoffset="['786','786','339','339']" data-y="['top','top','top','top']" data-voffset="['700','700','826','826']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1100" data-responsive_offset="on" style="z-index: 9;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','252px']" data-hh="['168px','168px','168px','168px']" data-lazyload="/site/Themes/theme1/img/slider/39.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-21" data-x="['left','left','left','left']" data-hoffset="['-166','-166','-75','-75']" data-y="['top','top','top','top']" data-voffset="['721','721','814','814']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1450" data-responsive_offset="on" style="z-index: 10;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['268px','268px','268px','268px']" data-hh="['177px','177px','177px','177px']" data-lazyload="/site/Themes/theme1/img/slider/34.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-20" data-x="['left','left','left','left']" data-hoffset="['1009','1009','708','708']" data-y="['top','top','top','top']" data-voffset="['712','712','802','802']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1200" data-responsive_offset="on" style="z-index: 11;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','252px']" data-hh="['168px','168px','168px','168px']" data-lazyload="/site/Themes/theme1/img/slider/32.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-22" data-x="['left','left','left','left']" data-hoffset="['165','165','60','60']" data-y="['top','top','top','top']" data-voffset="['587','587','879','879']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1250" data-responsive_offset="on" style="z-index: 12;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['305.8531073446328','305.8531073446328','305.8531073446328','305.8531073446328']" data-hh="['202','202','202','202']" data-lazyload="/site/Themes/theme1/img/slider/42.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-23" data-x="['left','left','left','left']" data-hoffset="['31','31','30','-3']" data-y="['top','top','top','top']" data-voffset="['452','452','489','516']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:910;s:910;" data-start="1910" data-responsive_offset="on" style="z-index: 13;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['314px','314px','314px','169.07692307692307']" data-hh="['208px','208px','208px','112']" data-lazyload="/site/Themes/theme1/img/slider/19.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-24" data-x="['left','left','left','left']" data-hoffset="['407','407','521','309']" data-y="['top','top','top','top']" data-voffset="['593','593','527','503']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:490;s:490;" data-start="1540" data-responsive_offset="on" style="z-index: 14;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['268px','268px','268px','205.94285714285712']" data-hh="['177px','177px','177px','136']" data-lazyload="/site/Themes/theme1/img/slider/29.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-25" data-x="['left','left','left','left']" data-hoffset="['634','634','-204','-204']" data-y="['top','top','top','top']" data-voffset="['444','444','738','738']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1400" data-responsive_offset="on" style="z-index: 15;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['391px','391px','391px','391px']" data-hh="['259px','259px','259px','259px']" data-lazyload="/site/Themes/theme1/img/slider/20.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-26" data-x="['left','left','left','left']" data-hoffset="['857','857','469','191']" data-y="['top','top','top','top']" data-voffset="['483','483','613','411']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1450" data-responsive_offset="on" style="z-index: 16;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['364px','364px','364px','225.04564315352695']" data-hh="['241px','241px','241px','149']" data-lazyload="/site/Themes/theme1/img/slider/17.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-27" data-x="['left','left','left','left']" data-hoffset="['1041','1041','450','450']" data-y="['top','top','top','top']" data-voffset="['586','586','852','852']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1500" data-responsive_offset="on" style="z-index: 17;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['268px','268px','268px','268px']" data-hh="['177px','177px','177px','177px']" data-lazyload="/site/Themes/theme1/img/slider/22.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-18" data-x="['left','left','left','left']" data-hoffset="['578','578','168','169']" data-y="['top','top','top','top']" data-voffset="['740','740','622','607']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1550" data-responsive_offset="on" style="z-index: 18;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','184.5']" data-hh="['168px','168px','168px','123']" data-lazyload="/site/Themes/theme1/img/slider/41.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-28" data-x="['left','left','left','left']" data-hoffset="['232','232','307','323']" data-y="['top','top','top','top']" data-voffset="['399','399','693','601']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1910" data-responsive_offset="on" style="z-index: 19;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['364px','364px','364px','231.08713692946057']" data-hh="['241px','241px','241px','153']" data-lazyload="/site/Themes/theme1/img/slider/25.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-29" data-x="['left','left','left','left']" data-hoffset="['1186','1186','1186','1186']" data-y="['top','top','top','top']" data-voffset="['741','741','741','741']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:490;s:490;" data-start="1910" data-responsive_offset="on" style="z-index: 20;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['268px','268px','268px','268px']" data-hh="['177px','177px','177px','177px']" data-lazyload="/site/Themes/theme1/img/slider/15.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-30" data-x="['left','left','left','left']" data-hoffset="['1245','1245','1245','1245']" data-y="['top','top','top','top']" data-voffset="['633','633','633','633']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1910" data-responsive_offset="on" style="z-index: 21;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','252px']" data-hh="['168px','168px','168px','168px']" data-lazyload="/site/Themes/theme1/img/slider/38.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-31" data-x="['left','left','left','left']" data-hoffset="['-99','-99','-48','66']" data-y="['top','top','top','top']" data-voffset="['578','578','652','604']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1910" data-responsive_offset="on" style="z-index: 22;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','178.5']" data-hh="['168px','168px','168px','119']" data-lazyload="/site/Themes/theme1/img/slider/11.jpg" data-no-retina>
                    </div>

                    <!-- LAYER NR. 19 -->
                    <div class="tp-caption tp-resizeme" id="slide-125-layer-32" data-x="['left','left','left','left']" data-hoffset="['479','479','290','36']" data-y="['top','top','top','top']" data-voffset="['417','417','445','438']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1910" data-responsive_offset="on" style="z-index: 23;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="600" height="400" data-ww="['312px','312px','312px','172.5']" data-hh="['208px','208px','208px','115']" data-lazyload="/site/Themes/theme1/img/slider/2.jpg" data-no-retina>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-132" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="/site/Themes/theme1/img/slider/Three-Swans-180x100.jpg" data-rotate="0" data-saveperformance="off" data-title="BACKGROUND VIDEO" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="1920" height="1080" data-lazyload="/site/Themes/theme1/img/slider/Three-Swans.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- BACKGROUND VIDEO LAYER -->
                    <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videoogv="/site/Themes/theme1/img/slider/Three-Swans.ogv" data-videowebm="/site/Themes/theme1/img/slider/Three-Swans.webm" data-videomp4="/site/Themes/theme1/img/slider/Three-Swans.mp4" data-videopreload="preload" data-videoloop="none" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption text-center NotGeneric-Title tp-resizeme" id="slide-132-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">STAY COOL MATE
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption text-center thintext_dark tp-resizeme" id="slide-132-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['51','52','52','51']" data-fontsize="['16','13','13','13']" data-lineheight="['26','20','20','20']" data-width="['755','none','none','none']" data-height="none" data-whitespace="['normal','nowrap','nowrap','nowrap']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 755px; max-width: 755px; white-space: normal; font-weight: 500; color: rgba(255, 255, 255, 1.00);text-align:center;">More layout demos are coming!
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" id="slide-132-layer-12" data-x="['left','left','left','left']" data-hoffset="['291','291','291','291']" data-y="['top','top','top','top']" data-voffset="['276','276','276','276']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 7;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake1.png" data-no-retina>
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme" id="slide-132-layer-13" data-x="['left','left','left','left']" data-hoffset="['706','706','706','706']" data-y="['top','top','top','top']" data-voffset="['347','347','347','347']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 8;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake2.png" data-no-retina>
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme" id="slide-132-layer-14" data-x="['left','left','left','left']" data-hoffset="['836','836','836','836']" data-y="['top','top','top','top']" data-voffset="['586','586','586','586']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 9;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake3.png" data-no-retina>
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption tp-resizeme" id="slide-132-layer-15" data-x="['left','left','left','left']" data-hoffset="['539','539','539','539']" data-y="['top','top','top','top']" data-voffset="['627','627','627','627']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 10;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake4.png" data-no-retina>
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption tp-resizeme" id="slide-132-layer-16" data-x="['left','left','left','left']" data-hoffset="['180','180','180','180']" data-y="['top','top','top','top']" data-voffset="['629','629','629','629']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 11;"><img src="/site/Themes/theme1/img/slider/dummy.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-lazyload="/site/Themes/theme1/img/slider/blurflake3.png" data-no-retina>
                    </div>
                </li>
            </ul>
            <div class="tp-static-layers">
            </div>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>
<!-- END REVOLUTION SLIDER -->

<!-- WELCOME -->
<section class="p-b-0">
    <div class="container">
        <div class="heading heading-center m-b-40" data-animation="fadeInUp">
            <h2>WELCOME TO THE WORLD OF POLO</h2>
            <span class="lead">Create amam ipsum dolor sit amet, consectetur adipiscing elit.</span>
        </div>
        <div class="row" data-animation="fadeInUp">
            <div class="col-md-12">
                <img class="img-responsive" src="/site/Themes/theme1/img/other/responsive-1.jpg" alt="Welcome to POLO">
            </div>
        </div>
    </div>
</section>
<!-- end: WELCOME -->

<!-- WHAT WE DO -->
<section class="background-grey">
    <div class="container">
        <div class="heading text-left">
            <h2>WHAT WE DO</h2>
            <span class="lead">Create amam ipsum dolor sit amet, consectetur adipiscing elit.</span>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="" data-animation="fadeInUp" data-animation-delay="0">
                    <h4>Modern Design</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="" data-animation="fadeInUp" data-animation-delay="200">
                    <h4>Loaded with Features</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="" data-animation="fadeInUp" data-animation-delay="400">
                    <h4>Completely Customizable</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="" data-animation="fadeInUp" data-animation-delay="600">
                    <h4>100% Responsive Layout</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="" data-animation="fadeInUp" data-animation-delay="800">
                    <h4>Clean Modern Code</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="" data-animation="fadeInUp" data-animation-delay="1000">
                    <h4>Free Updates & Support</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- END WHAT WE DO -->

<!-- PORTFOLIO -->
<section class="p-b-0">
    <div class="container">
        <div class="heading text-left">
            <h2>RECENT WORK</h2>
            <span class="lead">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</span>
        </div>
    </div>
    <div class="portfolio">
        <!-- Portfolio Items -->
        <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">

            <!-- portfolio item -->
            <div class="portfolio-item no-overlay pf-illustrations pf-media pf-icons pf-Media pf-graphics">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-slider">
                        <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="1500">
                            <a href="#"><img src="/site/Themes/theme1/img/portfolio/64.jpg" alt=""></a>
                            <a href="#"><img src="/site/Themes/theme1/img/portfolio/70.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom pf-illustrations pf-uielements pf-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="/site/Themes/theme1/img/portfolio/60.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a title="Paper Pouch!" data-lightbox="image" href="/site/Themes/theme1/img/portfolio/83l.jpg"><i class="fa fa-expand"></i></a>
                        <a href="portfolio-page-grid-gallery.html"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->


            <!-- portfolio item -->
            <div class="portfolio-item img-zoom pf-illustrations pf-media pf-icons pf-Media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="/site/Themes/theme1/img/portfolio/61.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="portfolio-page-grid-gallery.html">
                            <h3>Let's Go Outside</h3>
                            <span>Illustrations / Graphics</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom pf-illustrations pf-media pf-icons pf-uielements pf-graphics">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="/site/Themes/theme1/img/portfolio/65.jpg" alt=""></a>
                    </div>

                    <div class="portfolio-description" data-lightbox="gallery">
                        <a title="Photoshop Mock-up!" data-lightbox="gallery-item" href="/site/Themes/theme1/img/portfolio/80l.jpg"><i class="fa fa-clone"></i></a>
                        <a title="Paper Pouch!" data-lightbox="gallery-item" href="/site/Themes/theme1/img/portfolio/81l.jpg" class="hidden"></a>
                        <a title="Mock-up" data-lightbox="gallery-item" href="/site/Themes/theme1/img/portfolio/82l.jpg" class="hidden"></a>
                        <a href="portfolio-page-grid-gallery.html"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom pf-uielements pf-media pf-icons pf-uielements pf-graphics">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="/site/Themes/theme1/img/portfolio/66.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="portfolio-page-grid-gallery.html">
                            <h3>Last Iceland Sunshine</h3>
                            <span>Graphics</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->


            <!-- portfolio item -->
            <div class="portfolio-item img-zoom pf-illustrations pf-media pf-icons pf-uielements pf-graphics">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="/site/Themes/theme1/img/portfolio/67.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="fa fa-play"></i></a>
                        <a href="portfolio-page-grid-gallery.html"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->


            <!-- portfolio item -->
            <div class="portfolio-item no-overlay pf-illustrations pf-media pf-icons pf-Media pf-uielements pf-graphics">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-slider">
                        <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="1500">
                            <a href="#"><img src="/site/Themes/theme1/img/portfolio/68.jpg" alt=""></a>
                            <a href="#"><img src="/site/Themes/theme1/img/portfolio/71.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->


            <!-- portfolio item -->
            <div class="portfolio-item img-zoom pf-illustrations pf-uielements pf-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="/site/Themes/theme1/img/portfolio/69.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="portfolio-page-grid-gallery.html">
                            <h3>Luxury Wine</h3>
                            <span>Graphics / Branding</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->
        </div>
        <!-- end: Portfolio Items -->

    </div>
</section>
<!-- end: PORTFOLIO -->

<!-- SERVICES -->
<section>
    <div class="container">
        <div class="heading heading-center">
            <h2>SERVICES</h2>
            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
        </div>

        <div class="row">
            <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="0">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-plug"></i></a>
                    </div>
                    <h3>Powerful template</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="200">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-desktop"></i></a>
                    </div>
                    <h3>Flexible Layouts</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="400">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-cloud"></i></a>
                    </div>
                    <h3>Retina Ready</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>

            <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="600">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-lightbulb-o"></i></a>
                    </div>
                    <h3>Fast processing</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="800">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-trophy"></i></a>
                    </div>
                    <h3>Unlimited Colors</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="1000">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                    </div>
                    <h3>Premium Sliders</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>

            <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="1200">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-rocket"></i></a>
                    </div>
                    <h3>Modern Design</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="1400">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-flask"></i></a>
                    </div>
                    <h3>Clean Modern Code</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="1600">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-umbrella"></i></a>
                    </div>
                    <h3>Free Updates & Support</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: SERVICES -->



<!-- BLOG -->
<section class="content background-grey">
    <div class="container">
        <div class="heading heading text-left">
            <h2>OUR BLOG</h2>
            <span class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>
        </div>
        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="#">
                            <img alt="" src="/site/Themes/theme1/img/blog/12.jpg">
                        </a>
                        <span class="post-meta-category"><a href="">Lifestyle</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                        <h2><a href="#">Lighthouse, standard post with a single image
    </a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                        <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>
            <!-- end: Post item-->

            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="#">
                            <img alt="" src="/site/Themes/theme1/img/blog/17.jpg">
                        </a>
                        <span class="post-meta-category"><a href="">Science</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                        <h2><a href="#">Lighthouse, standard post with a single image
    </a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                        <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>
            <!-- end: Post item-->


            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="#">
                            <img alt="" src="/site/Themes/theme1/img/blog/18.jpg">
                        </a>
                        <span class="post-meta-category"><a href="">Science</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                        <h2><a href="#">Lighthouse, standard post with a single image
    </a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                        <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>
            <!-- end: Post item-->
        </div>
    </div>
</section>
<!-- end: BLOG -->

<!-- CLIENTS -->
<section class="p-t-60">
    <div class="container">
        <div class="heading heading-center">
            <h2>CLIENTS</h2>
            <span class="lead">Our awesome clients we've had the pleasure to work with! </span>
        </div>
        <div class="carousel" data-items="6" data-items-sm="4" data-items-xs="3" data-items-xxs="2" data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay-timeout="3000" data-loop="true">
            <div>
                <a href="#"><img alt="" src="/site/Themes/theme1/img/clients/1.png"> </a>
            </div>
            <div>
                <a href="#"><img alt="" src="/site/Themes/theme1/img/clients/2.png"> </a>
            </div>
            <div>
                <a href="#"><img alt="" src="/site/Themes/theme1/img/clients/3.png"> </a>
            </div>
            <div>
                <a href="#"><img alt="" src="/site/Themes/theme1/img/clients/4.png"> </a>
            </div>
            <div>
                <a href="#"><img alt="" src="/site/Themes/theme1/img/clients/5.png"> </a>
            </div>
            <div>
                <a href="#"><img alt="" src="/site/Themes/theme1/img/clients/6.png"> </a>
            </div>
            <div>
                <a href="#"><img alt="" src="/site/Themes/theme1/img/clients/7.png"> </a>
            </div>
            <div>
                <a href="#"><img alt="" src="/site/Themes/theme1/img/clients/8.png"> </a>
            </div>
            <div>
                <a href="#"><img alt="" src="/site/Themes/theme1/img/clients/9.png"> </a>
            </div>
        </div>
    </div>

</section>
<!-- end: CLIENTS -->

<!-- TEAM -->
<section class="background-grey">
    <div class="container">
        <div class="heading heading-center">
            <h2>MEET OUR TEAM</h2>
            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
        </div>
        <div class="row team-members">
            <div class="col-md-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="/site/Themes/theme1/img/team/6.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Alea Smith</h3>
                        <span>Software Developer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#">
                                <i class="fa fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                <i class="fa fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                <i class="fa fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
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
                        <img src="/site/Themes/theme1/img/team/7.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Ariol Doe</h3>
                        <span>Software Developer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#">
                                <i class="fa fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                <i class="fa fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                <i class="fa fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
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
                        <img src="/site/Themes/theme1/img/team/8.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Emma Ross</h3>
                        <span>Software Developer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#">
                                <i class="fa fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                <i class="fa fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                <i class="fa fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
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
                        <img src="/site/Themes/theme1/img/team/9.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Victor Loda</h3>
                        <span>Software Developer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#">
                                <i class="fa fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                <i class="fa fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                <i class="fa fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
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