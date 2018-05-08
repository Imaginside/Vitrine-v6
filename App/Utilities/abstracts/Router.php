<?php
namespace II\Utilities\Abstracts;

abstract class Router
{
    abstract public function match($uri);
}