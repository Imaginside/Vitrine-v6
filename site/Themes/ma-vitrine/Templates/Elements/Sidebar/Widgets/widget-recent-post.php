<?php
echo '
<div class="widget ">
    <h4 class="widget-title">' . $Title . '</h4>';
    if(isset($Description) && $Description !== '')
    echo '<small class="m-b-20 show">' . $Description . '</small>';
    echo '<div class="post-thumbnail-list">';
        foreach ($Posts as $Post) {
            echo '
            <div class="post-thumbnail-entry">
                <img alt="' . $Post[1] . '" src="' . $DirImg . $Post[0] . '">
                <div class="post-thumbnail-content">
                    <a href="' . $DirURL . $Post[3] . '">' . $Post[2] . '</a>';
                    if($Post[4] !== '')
                    echo '<span class="post-date"><i class="fa fa-clock-o"></i> ' . $Post[4] . '</span>';
                    echo '<span class="post-category"><i class="fa fa-tag"></i> ' . $Post[5] . '</span>
                </div>
            </div>';
        }
        echo '
    </div>
</div>';