<?php
namespace II\Utilities\Forms\Fields;

use II\Utilities\Forms\Fields\Field;

class Div extends Field {

    protected $childs = []; 

    public function addChild($name, \II\Utilities\Forms\Fields\Field $child){
        $this->childs[] = $child;
    }

}