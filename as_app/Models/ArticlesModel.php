<?php
class ArticlesModel{
    public function getAll(){
        return [4,5,6];
    }
    public function get($id){
        die(var_dump($id));
    }
}