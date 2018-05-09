<?php
class Controllers
{

    private $viewVars = [];

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
        $this->data[$name] = $value;
        return $this;
    }

    public function getViewVars()
    {
        return $this->viewVars;
    }

}