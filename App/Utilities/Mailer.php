<?php
namespace II\Utilities;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use II\Utilities\Configure;

class Mailer extends PHPMailer {

    public $CharSet = 'utf-8';

    function __construct()
    {
        parent::__construct(true);
    }

}