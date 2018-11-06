<?php
use II\Utilities\Configure;
/**
 * Affichage standard
 */

// 'NewsGalleryType' => 'fade', // 'fade' | 'slide'
// 'NewsTitle' => 'Gallery Fade',
// 'NewsPicture' => array('11.jpg','16.jpg'),
// 'NewsCategory' => 'Technologie',
// 'NewsCategoriesFilter' => array('bc-general','bc-technologie'),
// 'NewsDatePost' => '5 novembre 2018, 11h18',
// 'NewsNbComment' => '12',
// 'NewsContent' => 'Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Pulvinar euismod antesagittis ante posuere ligula pharetra laoreet.',
// 'NewsLink' => 'article-simple',
 

echo '
<div class="post-item border ' . implode(' ',$NewsCategoriesFilter) . '">
    <div class="post-item-wrap">
        <div class="post-slider">';
        
        if($NewsGalleryType === 'fade') {
            echo '
                <div class="carousel dots-inside arrows-visible arrows-only" data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true" data-lightbox="gallery">';
        }

        else if ($NewsGalleryType === 'slide') {
            echo '
                <div class="carousel dots-inside arrows-visible arrows-only" data-items="1" data-loop="true" data-autoplay="true" data-lightbox="gallery">';
        }

        foreach ( $NewsPicture as $NewsPicture ) {
            echo '
            <a href="/site/Medias/img/actualites/' . $NewsPicture . '" data-lightbox="gallery-item">
                <img alt="" src="/site/Medias/img/actualites/' . $NewsPicture . '">
            </a>';
        }

        echo '
            </div>
            <span class="post-meta-category"><a href="/actualites/categorie/technologie">Technologie</a></span>
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