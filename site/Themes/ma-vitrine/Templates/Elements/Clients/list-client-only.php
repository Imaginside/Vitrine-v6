<?php
echo '<li>
    <a ';
    if($ToggleActivate===true) {
        echo 'data-content="' . $ToggleDataContent . '" title="" data-placement="top" data-toggle="popover" data-container="body" data-original-title="' . $ToggleTitle . '" data-trigger="hover"';
    }
    echo '>
    <img src="site/Medias/img/clients/' . $ClientImage . '" alt="' . $ClientName . '"></a>
</li>';