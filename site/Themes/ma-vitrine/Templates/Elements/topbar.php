<?php
use II\Utilities\Configure;
?>
<div id="topbar" class="<?= $classesTopbar; ?>">

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <!-- <ul class="top-menu">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Terms</a></li>
                </ul> -->
                <ul class="top-menu">

                    <li class="CompagnyBaseline"><?= Configure::read('Society.Name');

                    if (Configure::read('Society.Baseline') != '' ) {
                        echo ', ' . Configure::read('Society.Baseline');
                    }
                    ?>
                    </li><span class="CompagnyBaseline">|</span><li><?= Configure::read('Society.Adress') . ' - ' . Configure::read('Society.Zipcode') . ' ' . Configure::read('Society.Town') ?></li>
                    
                </ul>
            </div>
            <div class="col-sm-6 hidden-xs">
                
                <?php
                if(Configure::read('Activate.SocialNetwork.TopBar') === true) {
                    echo '<div class="social-icons social-icons-colored-hover">';
                    echo $this->element('Blocs/SocialNetwork.php');
                    echo '</div>';
                }
                ?>

                <ul class="top-menu right">
                    <?php
                    if(Configure::read('Society.Mail') != '') {
                        echo '<li><a href="mailto:' . Configure::read('Society.Mail') . '">' . Configure::read('Society.Mail') . '</a></li>';
                    }
                    if(Configure::read('Society.Phone1') != '') {
                        echo '<span>|</span><li><a href="tel:' . Configure::read('Society.Phone1Link') . '">' . Configure::read('Society.Phone1') . '</a></li>';
                    }
                    if(Configure::read('Society.Phone2') != '') {
                        echo '<span>|</span><li><a href="tel:' . Configure::read('Society.Phone2Link') . '">' . Configure::read('Society.Phone2') . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>