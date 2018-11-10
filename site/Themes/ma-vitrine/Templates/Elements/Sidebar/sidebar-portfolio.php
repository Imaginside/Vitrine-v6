<?php
use II\Utilities\Configure;

/**
 * SIDEBAR
 */
if(Configure::read('Portfolio.SidebarPortfolioActiv') === true) {
echo '
<div class="sidebar col-md-3">
    <div class="pinOnScroll">';
        
        if(Configure::read('Portfolio.SidebarPortfolioSearch') === true) {
            echo $this->element('Sidebar/Widgets/widget-search.php');
        }

        if(Configure::read('Portfolio.SidebarPortfolioRecentPostTab') === true) {
            echo $this->element('Sidebar/Widgets/widget-recent-post-tabs.php');
        }
        
        if(Configure::read('Portfolio.SidebarPortfolioRecentPost') === true) {
            echo $this->element('Sidebar/Widgets/widget-recent-post.php', [
                'Title' => 'Dernières réalisations',
                'Description' => 'Nos dernières créations',
                'DirImg' => '/site/Medias/img/portfolio/thumbnail/', // NE PAS MODIFIER
                'DirURL' => '/portfolio/', // NE PAS MODIFIER
                'Posts' => [
                    // 'Exemple' => ['Image (5.jpg)', 'Alt image', 'Titre' , 'LienURL (/mon-article/)', 'Temps', 'Catégorie'],
                    'Exemple 1' => ['5.jpg', 'Alt image', 'Suspendisse consectetur fringilla luctus' , '#', '', 'Icons'],
                    'Exemple 2' => ['6.jpg', 'Alt image', 'Consectetur adipiscing elit' , '#', '', 'Media'],
                    'Exemple 3' => ['7.jpg', 'Alt image', 'Lorem ipsum dolor sit amet' , '#', '', 'Illustrations'],
                ],
            ]);
        }
        
        if(Configure::read('Portfolio.SidebarPortfolioTwitter') === true) {
            echo $this->element('Sidebar/Widgets/widget-twitter.php');
        }
        
        if(Configure::read('Portfolio.SidebarPortfolioCategories') === true) {
            echo $this->element('Sidebar/Widgets/widget-categories.php', [
                'Title' => 'Catégories',
                'Description' => 'Découvrez nos dernières réalisations, classées par catégories :',
                'Categories' => [
                    'Icons' => '/portfolio/categorie/icons/',
                    'Illustrations' => '/portfolio/categorie/illustrations/',
                    'UI Elements' => '/portfolio/categorie/uielements/',
                    'Media' => '/portfolio/categorie/media/',
                    'Graphics' => '/portfolio/categorie/graphics/',
                ],
            ]);
        }
        
        if(Configure::read('Portfolio.SidebarPortfolioContact') === true) {
            echo $this->element('Sidebar/Widgets/widget-contact.php', [
                'Title' => 'Contactez-nous',
                'Description' => 'Découvrez nos dernières réalisations, classées par catégories :',
                'StyleWidget' => 'background-image: url(\'/site/Themes/ma-vitrine/img/world-map-dark.png\'); background-position: 50% 20px; background-repeat: no-repeat; background-size:contain;',
                'BtnUrl' => '/contact/',
                'BtnText' => 'Contactez-nous !',
                'BtnClass' => 'btn-sm',
                ]);
            }
        
            if(Configure::read('Portfolio.SidebarPortfolioNewsletter') === true) {
                echo $this->element('Sidebar/Widgets/widget-newsletter.php');
            }
            
            if(Configure::read('Portfolio.SidebarPortfolioModalBox') === true) {
                if(Configure::read('Portfolio.SidebarPortfolioModalBoxStart') < time() && Configure::read('Portfolio.SidebarPortfolioModalBoxEnd') >= time()) {
                    echo $this->element('Sidebar/Widgets/widget-modal-box.php', [
                        'IdModal' => 'modaltest', // Id unique !
                        'Title' => 'Modal box',
                        'Description' => 'Jusqu\'au 31/12/2019, vente exclusive* de site vitrine à tarif réduit !',
                        'BtnText' => 'Je découvre l\'offre',
                        'BtnClass' => 'btn-modal btn-shadow btn-rounded',
                        'ModalStyle' => 'background: transparent url(\'/site/Medias/img/bg-modal-box.jpg\') no-repeat scroll center top / cover; height:470px;',
                        /*'ModalTitle' => '
                            <h2>BIG SALE <small>Up to</small></h2>
                            <h2 class="text-extra-large text-green lh80 m-b-30">70%</h2>',*/
                        'ModalTitle' => '
                            <h2 class="text-extra-large text-primary m-b-0">3<span style="font-size:0.5em !important;">mois</span></h2>
                            <h2 class="m-b-10">offerts</h2>',
                        'ModalDesc' => 'pour l\'achat d\'un site vitrine mensuel d\'une durée d\'un an, soit 29,90 € ht au lieu de <strike>39,90</strike> !',
                        'ModalBtnText' => 'J\'en profite !',
                        'ModalBtnStyle' => 'btn-shadow btn-rounded btn-block',
                        'ModalBtnLink' => '/contact/',
                        'ModalMention' => '* Offre limitée jusqu\'au 31/12/2019',
                    ]);
                }
            }
        
    echo '
    </div>
</div>';
}
/**
 * end: SIDEBAR
 */
?>