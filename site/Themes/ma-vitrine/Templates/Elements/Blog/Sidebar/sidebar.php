<?php
use II\Utilities\Configure;

/**
 * SIDEBAR
 */
if(Configure::read('Blog.SidebarBlogActiv') === true) {
echo '
<div class="sidebar col-md-3">
    <div class="pinOnScroll">';
        
        if(Configure::read('Blog.SidebarBlogSearch') === true) {
            echo $this->element('Blog/Sidebar/Widgets/widget-search.php');
        }

        if(Configure::read('Blog.SidebarBlogRecentPostTab') === true) {
            echo $this->element('Blog/Sidebar/Widgets/widget-recent-post-tabs.php');
        }
        
        if(Configure::read('Blog.SidebarBlogRecentPost') === true) {
            echo $this->element('Blog/Sidebar/Widgets/widget-recent-post.php');
        }
        
        if(Configure::read('Blog.SidebarBlogTwitter') === true) {
            echo $this->element('Blog/Sidebar/Widgets/widget-twitter.php');
        }
        
        if(Configure::read('Blog.SidebarBlogCategories') === true) {
            echo $this->element('Blog/Sidebar/Widgets/widget-categories.php');
        }
        
        if(Configure::read('Blog.SidebarBlogNewsletter') === true) {
            echo $this->element('Blog/Sidebar/Widgets/widget-newsletter.php');
        }
        
    echo '
    </div>
</div>';
}
/**
 * end: SIDEBAR
 */
?>