<?php
use II\Utilities\Configure;

echo '
<div style="' . $StyleWidget . '" class="widget widget-contact-us">
    <h4 class="widget-title">' . $Title . '</h4>
    <ul class="list-icon">
        <li><i class="fa fa-map-marker"></i>
        <strong>Adresse :</strong> ' . Configure::read('Society.Adress') . '
        <br>' . Configure::read('Society.Zipcode') . ', ' . Configure::read('Society.Town') . '</li>
        <li><i class="fa fa-phone"></i><strong>Tél :</strong> <a href="tel:' . Configure::read('Society.Phone1Link') . '">' . Configure::read('Society.Phone1') . '</a> </li>
        <li><i class="fa fa-envelope"></i><strong>Email :</strong> <a href="mailto:' . Configure::read('Society.Mail') . '">' . Configure::read('Society.Mail') . '</a>
        </li>';
        /*<li><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
        <br>Saturday, Sunday: <strong>Closed</strong>
        </li>*/
    echo '
    </ul>
    <div class="text-center"><a href="' . $BtnUrl . '" class="btn ' . $BtnClass . '">' . $BtnText . '</a></div>
</div>';