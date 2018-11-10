<?php
use II\Utilities\Configure;

/**
 * SIDEBAR
 */
if(Configure::read('Blog.SidebarBlogActiv') === true) {
echo '
<div class="sidebar col-md-3">
    <div class="pinOnScroll">';
        
        if(Configure::read('Blog.SidebarBlogSearch') === true) {
            echo $this->element('Sidebar/Widgets/widget-search.php');
        }

        if(Configure::read('Blog.SidebarBlogRecentPostTab') === true) {
            echo $this->element('Sidebar/Widgets/widget-recent-post-tabs.php');
        }
        
        if(Configure::read('Blog.SidebarBlogRecentPost') === true) {
            echo $this->element('Sidebar/Widgets/widget-recent-post.php', [
                'Title' => 'Dernières actualités',
                'Description' => 'Nos dernières actus',
                'DirImg' => '/site/Medias/img/actualites/thumbnail/', // NE PAS MODIFIER
                'DirURL' => '/actualites/', // NE PAS MODIFIER
                'Posts' => [
                    // 'Exemple' => ['Image (5.jpg)', 'Alt image', 'Titre' , 'LienURL (/mon-article/)', 'Temps', 'Catégorie'],
                    'Exemple 1' => ['5.jpg', 'Alt image', 'Suspendisse consectetur fringilla luctus' , 'article-simple', '55 Minutes', 'Technologie'],
                    'Exemple 2' => ['6.jpg', 'Alt image', 'Consectetur adipiscing elit' , '#', '12 heures', 'Vidéos'],
                    'Exemple 3' => ['7.jpg', 'Alt image', 'Lorem ipsum dolor sit amet' , '#', '3 jours', 'Musique'],
                ],
            ]);
        }
        
        if(Configure::read('Blog.SidebarBlogTwitter') === true) {
            echo $this->element('Sidebar/Widgets/widget-twitter.php');
        }
        
        if(Configure::read('Blog.SidebarBlogCategories') === true) {
            echo $this->element('Sidebar/Widgets/widget-categories.php', [
                'Title' => 'Catégories',
                'Description' => 'Découvrez les catégories du blog',
                'Categories' => [
                    'Général' => '/actualites/categorie/general/',
                    'Musique' => '/actualites/categorie/audio/',
                    'Vidéo' => '/actualites/categorie/video/',
                    'Technologie' => '/actualites/categorie/technologie/',
                ],
            ]);
        }

        if(Configure::read('Blog.SidebarBlogContact') === true) {
            echo $this->element('Sidebar/Widgets/widget-contact.php', [
                'Title' => 'Contactez-nous',
                'Description' => 'Découvrez nos dernières réalisations, classées par catégories :',
                'StyleWidget' => 'background-image: url(\'/site/Themes/ma-vitrine/img/world-map-dark.png\'); background-position: 50% 20px; background-repeat: no-repeat; background-size:contain;',
                'BtnUrl' => '/contact/',
                'BtnText' => 'Contactez-nous !'
            ]);
        }
        
        if(Configure::read('Blog.SidebarBlogNewsletter') === true) {
            echo $this->element('Sidebar/Widgets/widget-newsletter.php');
        }
            
        if(Configure::read('Blog.SidebarBlogModalBox') === true) {
            if(Configure::read('Blog.SidebarBlogModalBoxStart') < time() && Configure::read('Blog.SidebarBlogModalBoxEnd') >= time()) {
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