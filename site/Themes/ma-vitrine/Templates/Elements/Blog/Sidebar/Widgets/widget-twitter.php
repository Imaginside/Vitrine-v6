<?php
use II\Utilities\Configure;

echo '<div class="widget widget-tweeter" data-username="envato" data-limit="2">
    <h4 class="widget-title">Tweets récents</h4>
    <a class="twitter-timeline" data-lang="fr" data-height="' . Configure::read('Blog.SidebarBlogTwitterheight') . '" data-theme="light" href="' . Configure::read('Blog.SidebarBlogTwitterURL') . '"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
</div>';