<?php
use II\Utilities\Configure;

// Affichage grand, type page d'accueil
$this->set('page_title', [
    'PageTitleClassesSection' => 'page-title-left light',
    // - Style : EMPTY | page-title-classic
    // - Alignement : EMPTY => page-title-left | page-title-center | page-title-right |
    // - Color : dark | light | color

    'PageTitleH1' => $NamePage, // Titre de la page
        'PageTitleH1Classes' => 'text-primary', // text-muted | text-dark | text-light | text-primary | ... css bootstrap
    'PageTitleSubTitle' => 'Découvrez toutes nos dernières actualités.', // Sous titre

    // Choix du background du page-title
    'PageTitleImg' => '/site/Medias/img/header.jpg', // Lien vers l'image.  Vide si pas d'image. Ex. : /site/Medias/img/header.jpg
    'PageTitleImgSpeedParallax' => '-.170', // Vitesse du paralax -.170
    'PageTitlePattern' => '', // Lien vers l'image du pattern. Vide si pas de pattern. Ex. : /site/Medias/pattern/pattern-exemple.png
    'PageTitleBgColor' => '', // Couleur de fond - Vide si pas de couleur. Ex. : #DF0A40
    'PageTitleVideo' => '', // Lien vers la vidéo SANS EXTENSION. Ex. : /site/Medias/video/presentation

    'PageTitleBreadcrumb' => true, // Affiche ou non du fil d'ariane => true | false | '' => '' vide pour laisser la configuration par défault via app.php
    'PageTitleScroller' => false, // Activer le bouton scroller
        'PageTitleScrollerClasses' => 'dark circle-color', // Style du scroller : [light | dark | color] && [circle-light | circle-dark | circle-color]
        'PageTitleScrollerLink' => '#portfolio', // Lien du scroller. Ex. : #portfolio
]);
?>

<section id="page-content" class="<?php if(Configure::read('Blog.SidebarBlogActiv') === true) echo 'sidebar-' . Configure::read('Blog.SidebarBlogPosition'); ?>">
    <div class="container">
        <div class="row">
            <div class="<?php if(Configure::read('Blog.SidebarBlogActiv') === true) echo 'content col-md-9' ?>">
                <!-- Filter -->
                <nav class="grid-filter gf-outline" data-layout="#blog">
                    <ul>
                        <li class="active"><a href="#" data-category="*">Tous</a></li>
                        <li><a href="#" data-category=".bc-general">Général</a></li>
                        <li><a href="#" data-category=".bc-audio">Musique</a></li>
                        <li><a href="#" data-category=".bc-video">Vidéo</a></li>
                        <li><a href="#" data-category=".bc-technologie">Technologie</a></li>
                    </ul>
                    <div class="grid-active-title">Tous</div>
                </nav>
                <!-- end: Filter -->

                <!-- Actualités - Blog -->
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    
                    <?php
                    // Affichage default
                    echo $this->element('Blog/blog-default.php', [
                        'NewsTitle' => 'Article simple',
                        'NewsPicture' => '12.jpg',
                        'NewsCategory' => 'Général',
                        'NewsCategoriesFilter' => array('bc-general','bc-technologie'),
                        'NewsDatePost' => '5 novembre 2018, 11h18',
                        'NewsNbComment' => '33',
                        'NewsContent' => 'Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.',
                        'NewsLink' => 'article-simple',
                    ]);

                    // Affichage vidéo
                    echo $this->element('Blog/blog-video.php', [
                        'NewsTitle' => 'Vidéo YouTube',
                        'NewsVideoYT' => 'https://www.youtube.com/embed/dA8Smj5tZOQ', // url Youtube ou Vimeo
                        'NewsCategory' => 'Vidéo',
                        'NewsCategoriesFilter' => array('bc-video','bc-audio'),
                        'NewsDatePost' => '5 novembre 2018, 11h18',
                        'NewsNbComment' => '33',
                        'NewsContent' => 'Vidéo YouTube euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.',
                        'NewsLink' => 'article-simple',
                    ]);

                    // Affichage slider
                    echo $this->element('Blog/blog-gallery.php', [
                        'NewsGalleryType' => 'fade', // 'fade' | 'slide'
                        'NewsTitle' => 'Gallery Fade',
                        'NewsPicture' => array('11.jpg','16.jpg'),
                        'NewsCategory' => 'Technologie',
                        'NewsCategoriesFilter' => array('bc-general'),
                        'NewsDatePost' => '5 novembre 2018, 11h18',
                        'NewsNbComment' => '12',
                        'NewsContent' => 'Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Pulvinar euismod antesagittis ante posuere ligula pharetra laoreet.',
                        'NewsLink' => 'article-simple',
                    ]);

                    // Affichage slider
                    echo $this->element('Blog/blog-gallery.php', [
                        'NewsGalleryType' => 'slide', // 'fade' | 'slide'
                        'NewsTitle' => 'Gallery Slide',
                        'NewsPicture' => array('19.jpg','20.jpg'),
                        'NewsCategory' => 'Technologie',
                        'NewsCategoriesFilter' => array('bc-technologie','bc-general'),
                        'NewsDatePost' => '5 novembre 2018, 11h18',
                        'NewsNbComment' => '784',
                        'NewsContent' => 'Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.',
                        'NewsLink' => 'article-simple',
                    ]);
                    
                    // Affichage vidéo
                    echo $this->element('Blog/blog-video.php', [
                        'NewsTitle' => 'Vidéo Vimeo',
                        'NewsVideoYT' => 'https://player.vimeo.com/video/198559065?title=0&byline=0&portrait=0', // url Youtube ou Vimeo
                        'NewsCategory' => 'Vidéo',
                        'NewsCategoriesFilter' => array('bc-video','bc-audio'),
                        'NewsDatePost' => '5 novembre 2018, 11h18',
                        'NewsNbComment' => '33',
                        'NewsContent' => 'Vidéo Vimeo euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.',
                        'NewsLink' => 'article-simple',
                    ]);
                    
                    // Affichage Audio HTML5
                    echo $this->element('Blog/blog-audio.php', [
                        'NewsTitle' => 'Audio',
                        'NewsPicture' => 'audio-bg.jpg',
                        'NewsAudio' => 'beautiful-optimist.mp3',
                        'NewsCategory' => 'Vidéo',
                        'NewsCategoriesFilter' => array('bc-audio'),
                        'NewsDatePost' => '5 novembre 2018, 11h18',
                        'NewsNbComment' => '33',
                        'NewsContent' => 'Audio euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.',
                        'NewsLink' => 'article-simple',
                    ]);

                    // Affichage default
                    echo $this->element('Blog/blog-default.php', [
                        'NewsTitle' => 'Article simple',
                        'NewsPicture' => '12.jpg',
                        'NewsCategory' => 'Général',
                        'NewsCategoriesFilter' => array('bc-general'),
                        'NewsDatePost' => '5 novembre 2018, 11h18',
                        'NewsNbComment' => '33',
                        'NewsContent' => 'Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.',
                        'NewsLink' => 'article-simple',
                    ]);

                    // Affichage slider
                    echo $this->element('Blog/blog-gallery.php', [
                        'NewsGalleryType' => 'fade', // 'fade' | 'slide'
                        'NewsTitle' => 'Gallery Fade',
                        'NewsPicture' => array('11.jpg','16.jpg'),
                        'NewsCategory' => 'Technologie',
                        'NewsCategoriesFilter' => array('bc-technologie'),
                        'NewsDatePost' => '5 novembre 2018, 11h18',
                        'NewsNbComment' => '12',
                        'NewsContent' => 'Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Pulvinar euismod antesagittis ante posuere ligula pharetra laoreet.',
                        'NewsLink' => 'article-simple',
                    ]);

                    // Affichage vidéo
                    echo $this->element('Blog/blog-video.php', [
                        'NewsTitle' => 'Vidéo YouTube',
                        'NewsVideoYT' => 'https://www.youtube.com/embed/dA8Smj5tZOQ', // url Youtube ou Vimeo
                        'NewsCategory' => 'Vidéo',
                        'NewsCategoriesFilter' => array('bc-video','bc-audio'),
                        'NewsDatePost' => '5 novembre 2018, 11h18',
                        'NewsNbComment' => '33',
                        'NewsContent' => 'Vidéo YouTube euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.',
                        'NewsLink' => 'article-simple',
                    ]);
                    ?>
                
                </div>
                <!-- end: Actualités - Blog -->

                <!-- Pagination -->
                <div class="pagination pagination-simple">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a>
                        </li>
                        <li class="active"><a href="#">1</a> </li>
                        <li><a href="#">2</a> </li>
                        <li><a href="#">3</a> </li>
                        <li><a href="#">4</a> </li>
                        <li><a href="#">5</a> </li>
                        <li>
                            <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a>
                        </li>
                    </ul>
                </div>
                <!-- end: Pagination -->
            
            </div>

            <?php
            // Sidebar
            echo $this->element('Blog/Sidebar/sidebar.php');
            ?>
        </div>
    </div>
</section>