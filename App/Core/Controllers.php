<?php
class Controllers
{

    private $viewVars = [];

    protected function set($name, $value = null)
    {
        if(is_array($name))
        {
            foreach($name as $_name => $_value)
            {
                $this->set($_name, $_value);
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

    public function preprocess(){}
    public function postprocess(){}

}