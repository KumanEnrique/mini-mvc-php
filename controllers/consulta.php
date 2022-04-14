<?php
class Consulta extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->render('consulta/index');
    }
}