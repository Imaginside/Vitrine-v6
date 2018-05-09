<?php
use II\Utilities\Configure;
use II\Exceptions\ViewsException;

class Views
{

    protected $templatesPath;
    protected $template;
    protected $layout = 'default.php';

    public function __construct($template, $templatesPath = null)
    {   
        $this->setTemplatesPath(is_string($templatesPath) ? $templatesPath : SITE . Configure::read('Paths.templates'));
        $this->template = $template;
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
        return (new static($element, SITE .Configure::read('Paths.templates') . 'elements/'))->render();
    }

}