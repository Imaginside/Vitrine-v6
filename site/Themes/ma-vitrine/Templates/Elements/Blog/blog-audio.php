<?php
use II\Utilities\Configure;
/**
 * Affichage audio HTML5
 */


echo '
<div class="post-item border ' . $NewsCategoriesFilter . '">
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


// <div class="post-item border">
//     <div class="post-item-wrap">
//         <div class="post-audio">
//             <a href="/actualite/article/mon-super-article/">
//                 <img alt="" src="/site/Medias/img/actualites/audio-bg.jpg">
//             </a>
//             <span class="post-meta-category"><a href="/actualites/categorie/audio/">Audio</a></span>
//             <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
//                 <source src="audio/beautiful-optimist.mp3" type="audio/mp3" />
//             </audio>
//         </div>
//         <div class="post-item-description">
//             <span class="post-meta-date"><i class="fa fa-calendar-o"></i>5 novembre 2018, 11h18</span>
//             <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Commentaires</a></span>
//             <h2><a href="/actualite/article/mon-super-article/">Self Hosted HTML5 Audio (mp3) with image cover</a></h2>
//             <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
//             <a href="/actualite/article/mon-super-article/" class="item-link">Lire la suite... <i class="fa fa-arrow-right"></i></a>
//         </div>
//     </div>
// </div>
?>