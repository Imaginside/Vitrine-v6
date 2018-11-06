<?php
use II\Utilities\Configure;
/**
 * Affichage vidéo
 */


echo '
<div class="post-item border ' . $NewsCategoriesFilter . '">
    <div class="post-item-wrap">
        <div class="post-video">
            <iframe width="560" height="320" src="' . $NewsVideoYT . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
//         <div class="post-video">
//             <iframe src="https://player.vimeo.com/video/198559065?title=0&byline=0&portrait=0" width="560" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
//             <span class="post-meta-category"><a href="/actualites/categorie/video/">Vidéo</a></span>
//         </div>
//         <div class="post-item-description">
//             <span class="post-meta-date"><i class="fa fa-calendar-o"></i>5 novembre 2018, 11h18</span>
//             <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Commentaires</a></span>
//             <h2><a href="/actualite/article/mon-super-article/">This is a example post with Vimeo video</a></h2>
//             <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.
//             Cagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
//             <a href="/actualite/article/mon-super-article/" class="item-link">Lire la suite... <i class="fa fa-arrow-right"></i></a>
//         </div>
//     </div>
// </div>

// echo '<div class="post-item border">
//     <div class="post-item-wrap">
//         <div class="post-video">
//             <iframe width="560" height="320" src="https://www.youtube.com/embed/dA8Smj5tZOQ" frameborder="0" allowfullscreen></iframe>
//             <span class="post-meta-category"><a href="/actualites/categorie/video/">Vidéo</a></span>
//         </div>
//         <div class="post-item-description">
//             <span class="post-meta-date"><i class="fa fa-calendar-o"></i>5 novembre 2018, 11h18</span>
//             <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Commentaires</a></span>
//             <h2><a href="/actualite/article/mon-super-article/">Exemple vidéo YouTube</a></h2>
//             <p>Vidéo YouTube euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
//             <a href="/actualite/article/mon-super-article/" class="item-link">Lire la suite... <i class="fa fa-arrow-right"></i></a>
//         </div>
//     </div>
// </div>';

?>