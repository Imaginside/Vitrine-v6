<?php
class defaultView extends AppView
{
    public function __construct(){
        // print 'defaultview';
    }

    public function home(){
        $this->set('Title', 'Mon titre');
        $this->set('MetaDescription', 'Mon MetaDescription');
    }

    public function demo(){
        $this->set('Title', 'Demo');
        $this->set('MetaDescription', 'Mon MetaDescription demo');
    }

}