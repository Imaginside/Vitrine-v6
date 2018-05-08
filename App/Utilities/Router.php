<?php
namespace II\Utilities;

use II\Utilities\Abstracts\Router as RouterAbstract;

class Router extends RouterAbstract
{
    public function match($uri)
    {
        return true;
    }
}