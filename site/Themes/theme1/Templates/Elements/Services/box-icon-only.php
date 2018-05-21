<?php
echo '<div class="' . $ClassCol . '">
    <div class="icon-box ' . $IconBoxSize;
        if($IconBoxBorder===true) echo ' border ';
        if($IconBoxEffect===true) echo ' effect ';
        if($IconBoxAlignCenter===true) echo ' center ';
    
    echo '">
        <div class="icon">
            <a href="#"><i class="fa ' . $IconBoxIconFA . '"></i></a>
        </div>
        <h3>' . $IconBoxTitle . '</h3>
        <p class="text-muted">' . $IconBoxDesc . '</p>
    </div>
</div>';