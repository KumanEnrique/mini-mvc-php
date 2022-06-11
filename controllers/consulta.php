<?php
class Consulta extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->datos = [];
    }
    public function render(){
        $alumnos = $this->model->get();
        $this->view->datos = $alumnos;
        $this->view->render('consulta/index');
    }
}