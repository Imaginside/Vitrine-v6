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
                <li><a href="/contact/">Contact</a></li>
                <li class="dropdown">
                    <a href="#">Modules</a>
                    <ul class="dropdown-menu">
                        <li>
                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only"><i class="fa fa-newspaper-o"></i>Actualité / Blog</span>
                                <ul class="dropdown-menu">
                                    <li><a href="/actualites/"></i>Toutes les actualités</a></li>
                                    <li><a href="/mon-super-article/"></i>Un article simple</a></li>
                                </ul>
                            </li>

                        </li>
                        <li>
                            <a href="/portfolio/"><i class="fa fa-newspaper-o"></i>Réalisations</a>
                        </li>
                    </ul>
                </li>
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