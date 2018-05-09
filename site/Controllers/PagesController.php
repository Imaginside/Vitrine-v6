<?php
class PagesController extends Controllers
{
    public function index()
    {
        $this->set('test', 'nope');
        return ['test' => 'ok'];
    }
}