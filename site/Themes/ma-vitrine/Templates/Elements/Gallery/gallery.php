<?php

foreach ($GalleryPictures as $Picture => $TitrePicture) {
    echo '
    <div class="grid-item">
        <a class="image-hover-zoom" href="/site/Medias/img/gallery/' . $Picture . 'l.jpg" data-lightbox="gallery-item" title="' . $TitrePicture . '"><img src="/site/Medias/img/gallery/' . $Picture . '.jpg"></a>
    </div>';
}
