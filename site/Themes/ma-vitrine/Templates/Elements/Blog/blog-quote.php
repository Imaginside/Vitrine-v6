<?php
use II\Utilities\Configure;
/**
 * Affichage standard
 */

// 'NewsCategoriesFilter' => array('bc-general', 'bc-technologie', 'bc-quote'),
// 'NewsDatePost' => '6 novembre 2018, 10h22',
// 'NewsContent' => 'Choisissez un travail que vous aimez et vous n\'aurez pas à travailler un seul jour de votre vie. Confucius',

echo '
<div class="post-item quote ' . implode(' ',$NewsCategoriesFilter) . ' ';
if(Configure::read('Blog.BlogBorder') === true) { echo ' border '; }
if(Configure::read('Blog.BlogShadow') === true) { echo ' shadow '; }
echo '">
    <div class="post-item-wrap">
        <div class="post-quote-img">
            <img src="/site/Medias/img/quote.png">
            <span class="post-meta-category">Citation</a></span>
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>' . $NewsDatePost . '</span>
            <p>' . $NewsContent . '</p>
        </div>
    </div>
</div>';
