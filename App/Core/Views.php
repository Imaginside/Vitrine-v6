<?php
use II\Utilities\Configure;
use II\Exceptions\ViewsException;

class Views
{

    protected $templatesPath;
    protected $template;
    protected $layout = 'base.php';

    const TEMPLATES = 0;
    const ELEMENTS = 1;
    const LAYOUT = 2;
    const ERROR = 3;

    public function __construct($template, $type = 0)
    {   
        switch($type)
        {
            case static::TEMPLATES:
                $this->setPathAsTemplate($template);
                break;
            case static::ELEMENTS:
                $this->setPathAsElement($template);
                break;
            case static::LAYOUT:
                $this->setPathAsLayout($template);
                break;
            case static::ERROR:
                $this->setPathAsError($template);
                break;
            default:
                $this->setPathAsTemplate($template);
                break;
        }
        $this->template = $template;
    }

    protected function setPathAsTemplate($file)
    {
        $path = SITE . Configure::read('Paths.themes') . Configure::read('theme') . '/' . Configure::read('Paths.templates');
        if(!file_exists($path . $file))
            $path = SITE . Configure::read('Paths.templates');
        $this->setTemplatesPath($path);
    }

    protected function setPathAsElement($file)
    {
        $path = SITE . Configure::read('Paths.themes') . Configure::read('theme') . '/' . Configure::read('Paths.templates') . 'Elements/';
        if(!file_exists($path . $file))
            $path = SITE . Configure::read('Paths.templates') . 'Elements/';
        $this->setTemplatesPath($path);
    }

    protected function setPathAsLayout($file)
    {
        $path = SITE . Configure::read('Paths.themes') . Configure::read('theme') . '/' . Configure::read('Paths.templates') . 'Layout/';
        $this->setTemplatesPath($path);
    }

    protected function setPathAsError($file)
    {
        $path = SITE . Configure::read('Paths.themes') . Configure::read('theme') . '/' . Configure::read('Paths.templates') . 'Errors/';
        if(!file_exists($path . $file))
            $path = SITE . Configure::read('Paths.templates') . 'Errors/';
        $this->setTemplatesPath($path);
    }


    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function setTemplatesPath($path)
    {
        $this->templatesPath = $path;
    }

    public function layout()
    {
        return $this->layout;
    }

    public function render(array $viewVars = [])
    {
        extract($viewVars);
        ob_start();
            if(!@include $this->templatesPath . $this->template)
                throw new ViewsException('Inclusion du fichier de template impossible', [$this->templatesPath . $this->template]);
        return ob_get_clean();
    }

    protected function element($element)
    {
        return (new static($element, static::ELEMENTS))->render();
    }

}