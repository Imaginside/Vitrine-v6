<?php
namespace II\Utilities;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use II\Utilities\Configure;
use \Views;

class Mailer extends Views{

    protected $Mailer;
    protected $config;

    function __construct($config = [], $sup = [])
    {
        if(is_string($config))
        {
            $config = Configure::read('Mails.' . $config);
            $config = $config + $sup;
        }
        else
        {
            $config = $config + Configure::read('Mails.default');
        }

        $this->config = $config;

        $this->Mailer = new PHPMailer(true);
        
        $this->Mailer->CharSet = 'utf-8';
        $this->Mailer->isHTML(true);
        $this->Mailer->setFrom($config['From'], $config['FromName']);
        
    }

    public function send($variables = [], $debug = false)
    {
        $this->Mailer->Body = $this->element('Mails/' . $this->config['template'], $variables);
        if($debug)
            return $this->Mailer->Body;
        else
            return $this->Mailer->send();
    }

    public function __set($name, $value)
    {
        $this->Mailer->$name = $value;
    }

    public function __get($name)
    {
        return $this->Mailer->$name;
    }

    public function __call($name, $args)
    {
        return call_user_func_array([$this->Mailer, $name], $args);
    }

}