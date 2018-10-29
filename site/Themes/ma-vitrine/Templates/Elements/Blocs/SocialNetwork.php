<?php
use II\Utilities\Configure;
echo '<ul>';
if (Configure::read('SocialNetwork.Facebook') !== '') { echo '<li class="social-facebook"><a href="' . Configure::read('SocialNetwork.Facebook') . '"><i class="fa fa-facebook"></i></a></li>'; }
if (Configure::read('SocialNetwork.Twitter') !== '') { echo '<li class="social-twitter"><a href="' . Configure::read('SocialNetwork.Twitter') . '"><i class="fa fa-twitter"></i></a></li>'; }
if (Configure::read('SocialNetwork.GooglePlus') !== '') { echo '<li class="social-google"><a href="' . Configure::read('SocialNetwork.GooglePlus') . '"><i class="fa fa-google-plus"></i></a></li>'; }
if (Configure::read('SocialNetwork.Pinterest') !== '') { echo '<li class="social-pinterest"><a href="' . Configure::read('SocialNetwork.Pinterest') . '"><i class="fa fa-pinterest"></i></a></li>'; }
if (Configure::read('SocialNetwork.Vimeo') !== '') { echo '<li class="social-vimeo"><a href="' . Configure::read('SocialNetwork.Vimeo') . '"><i class="fa fa-vimeo-square"></i></a></li>'; }
if (Configure::read('SocialNetwork.Linkedin') !== '') { echo '<li class="social-linkedin"><a href="' . Configure::read('SocialNetwork.Linkedin') . '"><i class="fa fa-linkedin"></i></a></li>'; }
if (Configure::read('SocialNetwork.Viadeo') !== '') { echo '<li class="social-viadeo"><a href="' . Configure::read('SocialNetwork.Viadeo') . '"><i class="fa fa-viadeo"></i></a></li>'; }
if (Configure::read('SocialNetwork.Dribbble') !== '') { echo '<li class="social-dribbble"><a href="' . Configure::read('SocialNetwork.Dribbble') . '"><i class="fa fa-dribbble"></i></a></li>'; }
if (Configure::read('SocialNetwork.YouTube') !== '') { echo '<li class="social-youtube"><a href="' . Configure::read('SocialNetwork.YouTube') . '"><i class="fa fa-youtube-play"></i></a></li>'; }
if (Configure::read('SocialNetwork.RSS') !== '') { echo '<li class="social-rss"><a href="' . Configure::read('SocialNetwork.RSS') . '"><i class="fa fa-rss"></i></a></li>'; }
echo '</ul>';
?>