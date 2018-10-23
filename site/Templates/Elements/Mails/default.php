<?php
use II\Utilities\Configure;
?>

<style>
#principal {
    text-align:center;
    background-color:#f7f7f7;
    padding:20px 0 30px;
    font-family:verdana;
    font-size:12px;
}
#content {
    width:600px;
    margin:0 auto;
    background-color:#FFF;
}
</style>

<div id="principal">
    <p>Un internaute vous a envoyé un nouveau message depuis votre site <a href="<?= Configure::read('Society.WebsiteURL'); ?>" target="_blank"><?= Configure::read('Society.Name'); ?></a></p>
    
    <div id="content">
        hello world <?= $test ?>





    </div>
</div>