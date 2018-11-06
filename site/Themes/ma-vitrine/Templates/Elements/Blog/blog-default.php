<?php
use II\Utilities\Configure;
/**
 * Affichage standard
 */


echo '
<div class="post-item border ' . $NewsCategoriesFilter . '">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="' . $NewsLink . '">
                <img alt="" src="/site/Medias/img/actualites/' . $NewsPicture . '">
            </a>
            <span class="post-meta-category"><a href="/actualites/categorie/' . $NewsCategoryURL . '/">' . $NewsCategory . '</a></span>
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>' . $NewsDatePost . '</span>
            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>' . $NewsNbComment . ' Commentaires</a></span>
            <h2><a href="' . $NewsLink . '">' . $NewsTitle . '</a></h2>
            <p>' . $NewsContent . '</p>
            <a href="/actualite/article/' . $NewsLink . '" class="item-link">Lire la suite... <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</div>';


// <div class="post-item border">
//     <div class="post-item-wrap">
//         <div class="post-image">
//             <a href="/actualite/article/mon-super-article/">
//                 <img alt="" src="/site/Medias/img/actualites/12.jpg">
//             </a>
//             <span class="post-meta-category"><a href="/actualites/categorie/lifestyle/">Lifestyle</a></span>
//         </div>
//         <div class="post-item-description">
//             <span class="post-meta-date"><i class="fa fa-calendar-o"></i>5 novembre 2018, 11h18</span>
//             <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Commentaires</a></span>
//             <h2><a href="/actualite/article/mon-super-article/">Lighthouse, standard post with a single image</a></h2>
//             <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
//             <a href="/actualite/article/mon-super-article/" class="item-link">Lire la suite... <i class="fa fa-arrow-right"></i></a>

//         </div>
//     </div>
// </div>
?>