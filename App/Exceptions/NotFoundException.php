<?php
namespace II\Exceptions;

use II\Exceptions\CustomException;

class NotFoundException extends CustomException
{
    public function handleException()
    {
        $view = new \Views('Errors/404.html');
        print $view->render();
        die();
    }
}