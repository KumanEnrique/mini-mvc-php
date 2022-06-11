<?php
class ayuda extends Controller {
    public function __construct(){
        parent::__construct();
        // $this->view->render('ayuda/index');
    }
    public function render(){
        $this->view->render('nuevo/index');
    }
}