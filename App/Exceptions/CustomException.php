<?php
namespace II\Exceptions;

class CustomException extends \Exception
{
    protected $data = [];

    public function __construct($message = null, array $data = [], $errorcode = 1)
    {
        if(empty($message))
        {
            $message = get_called_class() . ' sans message';
        }
        parent::__construct($message, $errorcode);
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}