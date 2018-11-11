<!--Navigation-->
<div id="mainMenu" class="light">
<?php
// Possiblité d'ajouter des classes à la div mainMenu :
// - menu-left | menu-right | menu-center
?>
    <div class="container">
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li class="dropdown">
                    <a href="#">Modules</a>
                    <ul class="dropdown-menu">
                        <li>
                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only"><i class="fa fa-newspaper-o"></i>Actualité / Blog</span>
                                <ul class="dropdown-menu">
                                    <li><a href="/actualites/"></i>Toutes les actualités</a></li>
                                    <li><a href="/actualites/article-simple/"></i>Article simple</a></li>
                                    <li><a href="/actualites/article-gallery/"></i>Article gallerie</a></li>
                                    <li><a href="/actualites/article-video/"></i>Article vidéo</a></li>
                                    <li><a href="/actualites/article-audio/"></i>Article audio</a></li>
                                </ul>
                            </li>
                        </li>
                        <li>
                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only"><i class="fa fa-book"></i>Réalisations</span>
                                <ul class="dropdown-menu">
                                    <li><a href="/portfolio/"></i>Toutes les réalisations</a></li>
                                    <li><a href="/portfolio/portfolio-default/"></i>Portfolio default</a></li>
                                </ul>
                            </li>
                        </li>
                        <li><a href="/gallery/"><i class="fa fa-picture-o"></i>Galerie Photos</a></li>
                    </ul>
                </li>
                <li><a href="/contact/">Contact</a></li>
                <li class="dropdown">
                    <a href="#">Features</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/page-title/"><i class="fa fa-heart"></i>Titre de la page</a>
                        </li>
                    </ul>  
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--end: Navigation-->