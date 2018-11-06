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


<!-- Page Content -->
<section id="page-content" class="<?php if(Configure::read('Blog.SidebarBlogActiv') === true) echo 'sidebar-' . Configure::read('Blog.SidebarBlogPosition'); ?>">
    <div class="container">
        <div class="row">
            <!-- content -->
            <div class="<?php if(Configure::read('Blog.SidebarBlogActiv') === true) echo 'content col-md-9' ?>">
                

                <?php
                
                // $NewsCategories = array('Général','Audio');


                // Affichage default
                echo $this->element('Blog/blog-default-single.php', [
                    'NewsTitle' => 'Lighthouse, standard post with a single image',
                    'NewsPicture' => '1.jpg',
                    'NewsCategories' => array('Général','Audio'),
                    'NewsDatePost' => '5 novembre 2018, 11h18',
                    'NewsNbComment' => '33',
                    'NewsContent' => '
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit. Nulla facilisi. Pellentesque sed nibh a quam accumsan dignissim quis quis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus.M</p>
                        <blockquote>
                            <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don\'t do anything about it.</p>
                            <small>by <cite>Albert Einstein</cite></small>
                        </blockquote>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendisse vel lacus est, sit amet tincidunt erat. Etiam purus sem, euismod eu vulputate eget, porta quis sapien. Donec tellus est, rhoncus vel scelerisque id, iaculis eu nibh.</p>
                        <p>Donec posuere bibendum metus. Quisque gravida luctus volutpat. Mauris interdum, lectus in dapibus molestie, quam felis sollicitudin mauris, sit amet tempus velit lectus nec lorem. Nullam vel mollis neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel enim dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed tincidunt accumsan massa id viverra. Sed sagittis, nisl sit amet imperdiet convallis, nunc tortor consequat tellus, vel molestie neque nulla non ligula. Proin tincidunt tellus ac porta volutpat. Cras mattis congue lacus id bibendum. Mauris ut sodales libero. Maecenas feugiat sit amet enim in accumsan.</p>
                        <p>Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>',
                    'NewsComments' => false, // Affiche des commentaires pour l'article. 'true' | 'false'
                ]);
                ?>

                </div>
            </div>
            <!-- end: content -->

        <?php
        if(Configure::read('Blog.SidebarBlogActiv') === true) {
        ?>
        <!-- Sidebar-->
        <div class="sidebar col-md-3">
            <div class="pinOnScroll">
                
                <?php
                if(Configure::read('Blog.SidebarBlogSearch') === true) {
                echo '
                <div class="widget widget-newsletter">
                    <form id="widget-search-form-sidebar" action="search-results-page.html" method="get" class="form-inline">
                        <div class="input-group">
                            <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Rechercher...">
                            <span class="input-group-btn">
                            <button type="submit" id="widget-widget-search-form-button" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>';
                }
                ?>


                <!-- POST RECENT TABS -->
                <!--Tabs with Posts
                <div class="widget">
                    <div id="tabs-01" class="tabs simple">
                        <ul class="tabs-navigation">
                            <li class="active"><a href="#tab1">Populaire</a> </li>
                            <li class=""><a href="#tab2">Mise en avant</a> </li>
                            <li class=""><a href="#tab3">Récent</a> </li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tab-pane active" id="tab1">
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="/site/Medias/img/actualites/thumbnail/5.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Suspendisse consectetur fringilla luctus</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 6 minutes</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Technologie</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="/site/Medias/img/actualites/thumbnail/6.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 6 heures</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Vidéo</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="/site/Medias/img/actualites/thumbnail/7.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 9 jours</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Musique</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="/site/Medias/img/actualites/thumbnail/6.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 6 minutes</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Technologie</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="/site/Medias/img/actualites/thumbnail/7.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 6 heures</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Vidéo</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="/site/Medias/img/actualites/thumbnail/8.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Fringilla luctus Lorem ipsum dolor sit amet</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 9 jours</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Musique</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="/site/Medias/img/actualites/thumbnail/7.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 6 heures</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Vidéo</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="/site/Medias/img/actualites/thumbnail/8.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Fringilla luctus Lorem ipsum dolor sit amet</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 6 heures</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Vidéo</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="/site/Medias/img/actualites/thumbnail/6.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 9 jours</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Musique</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--End: Tabs with Posts-->




                <!-- POST RECENT SIMPLE -->
                <!--Tabs with Posts-->
                <div class="widget ">
                    <h4 class="widget-title">Dernières actualités</h4>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="/site/Medias/img/actualites/thumbnail/5.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 55 minutes</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technologie</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="/site/Medias/img/actualites/thumbnail/6.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 12 heures</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Vidéo</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="/site/Medias/img/actualites/thumbnail/7.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 3 jours</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Musique</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End: Tabs with Posts-->

                <?php
                if(Configure::read('Blog.SidebarBlogTwitter') === true) {
                echo '
                <div class="widget widget-tweeter" data-username="envato" data-limit="2">
                    <h4 class="widget-title">Tweets récents</h4>
                    <a class="twitter-timeline" data-lang="fr" data-height="' . Configure::read('Blog.SidebarBlogTwitterheight') . '" data-theme="light" href="' . Configure::read('Blog.SidebarBlogTwitterURL') . '"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                </div>';
                }
                ?>

                <?php
                if(Configure::read('Blog.SidebarBlogCategories') === true) {
                echo '
                <div class="widget widget-tags">
                    <h4 class="widget-title">Catégories</h4>
                    <div class="tags">
                        <a href="/actualites/categorie/general/">Général</a>
                        <a href="/actualites/categorie/audio/">Musique</a>
                        <a href="/actualites/categorie/video/">Vidéo</a>
                        <a href="/actualites/categorie/technologie/">Technologie</a>
                    </div>
                </div>';
                }
                ?>

                <?php
                if(Configure::read('Blog.SidebarBlogNewsletter') === true) {
                echo '
                <div class="widget widget-newsletter">
                    <form class="widget-subscribe-form form-inline" action="include/subscribe-form.php" role="form" method="post">
                        <h4 class="widget-title m-b-0">Newsletter</h4>
                        <small class="m-b-20">Restez informé de nos dernières actualités !</small>
                        <div class="input-group">
                            <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Votre email">
                            <span class="input-group-btn">
                                <button type="submit" id="widget-subscribe-submit-button" class="btn btn-default"><i class="fa fa-paper-plane"></i></button>
                            </span>
                        </div>
                    </form>
                </div>';
                }
                ?>

            </div>
        </div>
        <!-- end: Sidebar-->
        <?php
        }
        ?>

    </div>
</div>
<!-- end: Sidebar-->

</section>