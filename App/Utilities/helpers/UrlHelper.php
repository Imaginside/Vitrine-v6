<?php
namespace II\Utilities\Helpers;

use II\Utilities\Configure;
use II\Utilities\Inflector;

class UrlHelper
{

    public function __construct(){}

    public function link(array $link = [])
    {
        $link = $link + [
            'c' => 'Pages',
            'a' => Configure::read('default.action'),
        ];

        $controller = $link['c'];
        unset($link['c']);

        $action = $link['a'];
        unset($link['a']);

        $action = Inflector::dasherize(Inflector::underscore($action));

        $str = '';
        if(!$controller === 'Pages')
            $str .= $controller . '/';
        $str = $action . '/' . implode('/', $link);

        return $str;
    }

}