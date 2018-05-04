<?php
class defaultView extends AppView
{
    public function __construct(){ print 'defaultview'; }

    public function home(){
        $this->set('Title', 'Mon titre');
    }

    public function demo(){
        print 'demo';
    }

}