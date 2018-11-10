<?php
echo '
<div class="widget widget-tags">';
    if(isset($Title) && $Title !== '')
    echo '<h4 class="widget-title">' . $Title . '</h4>';
    
    if(isset($Description) && $Description !== '')
    echo '<small class="m-b-20 show">' . $Description . '</small>';

    echo '<div class="tags">';
        foreach ($Categories as $NameCat => $LinkCat) {
        echo '
            <a href="' . $LinkCat . '">' . $NameCat . '</a>';
        }
        echo '
    </div>
</div>';