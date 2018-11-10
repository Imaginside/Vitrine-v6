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
    'PageTitleSubTitle' => $DescPage, // Sous titre

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
                <?php
                // Affichage gallery
                echo $this->element('Blog/blog-video-single.php', [
                    'NewsTitle' => 'Lighthouse, standard post with a single image',
                    'NewsVideo' => 'https://www.youtube.com/embed/dA8Smj5tZOQ', // url Youtube ou Vimeo
                    'NewsCategories' => array('Vidéo'),
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
                    'NewsComments' => true, // Affiche des commentaires pour l'article. 'true' | 'false'
                ]);
                ?>
                </div>
            </div>

            <?php
            // Sidebar
            echo $this->element('Sidebar/sidebar-blog.php');
            ?>
        </div>
    </div>
</section>