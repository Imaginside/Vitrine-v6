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
        $config = $config + Configure::read('Mails.default');
        

        $this->config = $config;

        $this->Mailer = new PHPMailer(true);
        
        // $this->isSMTP(true);

        $this->Mailer->CharSet = 'utf-8';
        $this->Mailer->isHTML(true);
        
        $this->Mailer->Sender = $config['Sender'];
        if(isset($config['From']))
            $this->Mailer->setFrom($config['From'], !empty($config['FromName']) ? $config['FromName'] : null);


        if(isset($config['ReplyTo']))
            $this->Mailer->addReplyTo($config['ReplyTo'], isset($config['ReplyToName']) ? $config['ReplyToName'] : null);
            

        if(isset($config['to'])){
            if(is_array($config['to']))
            {
                foreach($config['to'] as $to)
                {
                    $this->Mailer->addAddress($to);
                }
            }
            else
            {
                $this->Mailer->addAddress($config['to']);
            }
        }
        
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