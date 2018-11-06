<?php
use II\Utilities\Configure;
/**
 * Affichage audio HTML5
 */

// 'NewsTitle' => 'Audio',
// 'NewsPicture' => 'audio-bg.jpg',
// 'NewsAudio' => 'beautiful-optimist.mp3',
// 'NewsCategory' => 'Vidéo',
// 'NewsCategoriesFilter' => array('bc-general','bc-technologie'),
// 'NewsDatePost' => '5 novembre 2018, 11h18',
// 'NewsNbComment' => '33',
// 'NewsContent' => 'Audio euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.',
// 'NewsLink' => 'article-simple',

echo '
<div class="post-item border ' . implode(' ',$NewsCategoriesFilter) . '">
    <div class="post-item-wrap">
        <div class="post-audio">
            <a href="/actualite/article/' . $NewsLink . '/">
                <img alt="" src="/site/Medias/img/actualites/' . $NewsPicture . '">
            </a>
            <span class="post-meta-category"><a href="/actualites/categorie/' . $NewsCategoryURL . '/">' . $NewsCategory . '</a></span>
            <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
                <source src="/site/Medias/audio/' . $NewsAudio . '" type="audio/mp3" />
            </audio>
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
?>