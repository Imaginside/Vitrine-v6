<?php
namespace II\Utilities\Abstracts;

abstract class Router
{
    abstract public function __construct($url);
    abstract public function run();
}