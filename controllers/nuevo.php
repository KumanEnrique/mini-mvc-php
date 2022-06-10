<?php
class Nuevo extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
    }
    public function registrarAlumno(){
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        echo('metodo registrarAlumno del controlador nuevo');
        $this->model->insert(['matricula'=>$matricula,'nombre'=>$nombre,'apellido'=>$apellido]);
    }
}