<?php
echo'
<div class="widget widget-modal-box text-center border-box">
    <h2>' . $Title . '</h2>
    <p>' . $Description . '</p>

    <a href="#' . $IdModal . '" data-lightbox="inline" class="btn ' . $BtnClass . '">' . $BtnText . '</a>

    <div id="' . $IdModal . '" class="modal no-padding" data-delay="2000" style="max-width: 700px;">
        <div class="col-sm-6 hidden-xs no-padding" style="' . $ModalStyle . '"></div>
        <div class="col-sm-6">
            <div class="p-40 p-xs-20">
                ' . $ModalTitle;
                if(isset($ModalDesc) && $ModalDesc !== '')
                echo '<p class="m-b-20">' . $ModalDesc . '</p>';

                echo '
                <a href="' . $ModalBtnLink . '" class="btn ' . $ModalBtnStyle . '">' . $ModalBtnText . '</a>';
                if(isset($ModalMention) && $ModalMention !== '')
                echo '<small class="t300"><p class="text-center m-b-0"><em>' . $ModalMention . '</em></p></small>';

            echo '</div>
        </div>
    </div>

</div>';
