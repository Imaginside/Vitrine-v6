<?php
// $b = $this->Breadcrumb->getCrumbs(); // [['title' => 'jeux', 'url' => '#'], ['title' => 'jeux à bulles', 'url' => '#']]


echo '
<div class="breadcrumb">
    <ul>
        <li><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
        <li class="active"><a href="#">' . $PageTitleH1 . '</a></li>
    </ul>
</div>
';