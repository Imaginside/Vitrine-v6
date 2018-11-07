<?php
use II\Utilities\Configure;
/**
 * Affichage standard
 */

// 'NewsTitle' => 'Article simple',
// 'NewsPicture' => '12.jpg', // Possible sans image, laisser vide
// 'NewsCategory' => 'Général',
// 'NewsCategoriesFilter' => array('bc-general','bc-technologie'),
// 'NewsDatePost' => '5 novembre 2018, 11h18',
// 'NewsNbComment' => '33',
// 'NewsContent' => 'Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.',
// 'NewsLink' => 'article-simple',
// 'NewsAuthor' => 'Prénom NOM',
// 'NewsAuthorPicture' => 'prenom-nom.jpg',

echo '
<div class="post-item ' . implode(' ',$NewsCategoriesFilter) . ' ';
if(Configure::read('Blog.BlogBorder') === true) { echo ' border '; }
if(Configure::read('Blog.BlogShadow') === true) { echo ' shadow '; }
if(Configure::read('Blog.BlogBackground') === true) { echo ' bg-post-item '; }
echo '">
    <div class="post-item-wrap">';
        if($NewsPicture !== '') {
        echo '<div class="post-image">
            <a href="' . $NewsLink . '">
                <img alt="" src="/site/Medias/img/actualites/' . $NewsPicture . '">
            </a>
            <span class="post-meta-category"><a href="/actualites/categorie/' . $NewsCategoryURL . '/">' . $NewsCategory . '</a></span>
        </div>';
        }
        echo '<div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>' . $NewsDatePost . '</span>
            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>' . $NewsNbComment . ' Commentaires</a></span>
            <h2><a href="' . $NewsLink . '">' . $NewsTitle . '</a></h2>
            <p>' . $NewsContent . '</p>';
            if(Configure::read('Blog.BlogLinkReadMore') === true) {
            echo '
            <a href="/actualite/article/' . $NewsLink . '" class="item-link">Lire la suite... <i class="fa fa-arrow-right"></i></a>';
            }
            if(Configure::read('Blog.BlogAuthor') === true) {
            echo '
            <div class="post-author"><img src="/site/Medias/img/actualites/authors/' . $NewsAuthorPicture . '"><p>Par <span class="text-primary">' . $NewsAuthor . '</span></p></div>';
            }
        echo '
        </div>
    </div>
</div>';
?>