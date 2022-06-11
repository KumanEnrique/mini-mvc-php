<?php
class Main extends Controller{
    public function __construct(){
        parent::__construct();
        // $this->view->render('main/index');
    }
    public function render(){
        $this->view->render('main/index');
    }
}