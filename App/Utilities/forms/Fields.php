<?php
namespace II\Utilities\Forms;

class Fields {

    protected $fields = [];
    
    public function addDiv($name, $class) {
        $this->fields[$name] = new \II\Utilities\Forms\Fields\Div($name, $class);
        return $this->fields[$name];
    }

    public function addText($name) {
        $this->fields[$name] = new \II\Utilities\Forms\Fields\Text($name);
        return $this->fields[$name];
    }

    public function addEmail($name) {
        $this->fields[$name] = new \II\Utilities\Forms\Fields\Email($name);
        return $this->fields[$name];
    }

    public function addTextarea($name) {
        $this->fields[$name] = new \II\Utilities\Forms\Fields\Textarea($name);
        return $this->fields[$name];
    }

}