<?php
use II\Utilities\Configure;
use II\Utilities\Inflector;
use II\Exceptions\ViewsException;

class Views
{
    
    const TEMPLATES = 0;
    const ELEMENTS = 1;
    const LAYOUT = 2;
    const ERROR = 3;

    protected $templatesPath;
    protected $template;
    protected $layout = 'base.php';

    private $viewVars = [];

    public function __construct($template, $type = self::TEMPLATES)
    {
        
        foreach(glob(CORE_HELPERS . '*.php') as $helper)
        {
            $hcname = substr($helper, strrpos($helper, '/') + 1,  - 4);
            $hname = substr($hcname, 0, -6);
            $hcname = 'II\\Utilities\\Helpers\\' . $hcname;
            require_once $helper;
            $this->$hname = new $hcname;
        }

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

    // processors:
    // 1 - __constructor => nouvelle instance pour générer le contenu à partir du template
    // 2 - preprocess // "execution" sur l'instance créé en "1"
    // 3 - rendu du template php
    // 4 - postprocess // "execution" sur l'instance créé en "1"
    // 5 - __constructor => nouvelle instance pour générer le layout à partir du template et du contenu créé en "1"
    // 6 - prelayout // execution du l'instance créé en "5"
    // 7 - rendu du template du layout
    // 8 - postlayout // execution du l'instance créé en "5"
    public function preprocess(){}
    public function postprocess(){}

    public function prelayout(){}
    public function postlayout(){}

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

    protected function element($element, array $variables = [])
    {
        return (new self($element, static::ELEMENTS))->render($variables);
    }

    protected function set($name, $value)
    {
        if(is_array($name))
        {
            foreach($name as $_name => $_value)
            {
                $this->set($_name, $value);
            }
            return $this;
        }
        $this->viewVars[$name] = $value;
        return $this;
    }

    public function getViewVars()
    {
        return $this->viewVars;
    }
    

}