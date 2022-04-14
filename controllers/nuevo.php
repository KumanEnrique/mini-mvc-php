<?php
class Nuevo extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
    }
}