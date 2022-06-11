<?php
class Nuevo extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }
    public function render(){
        $this->view->render('nuevo/index');
        // * mi comentario: llamar a registarAlumno dentro de un if
        // *if(si la url contiene nuevo/registrarAlumno){
        // *    $this->registrarAlumno();
        // *    $this->view->render('nuevo/index');
        // *else{
        // *    $this->view->render('nuevo/index');
        // * hacer que registrarAlumo retorne un mensaje para que lo imprima la vista
        // * mi comentario
    }
    public function registrarAlumno(){
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mensaje  = "";
        $respusta = $this->model->insert(['matricula'=>$matricula,'nombre'=>$nombre,'apellido'=>$apellido]);
        // if($this->model->insert(['matricula'=>$matricula,'nombre'=>$nombre,'apellido'=>$apellido]);){
        if($respusta=== true){
            $mensaje = "nuevo alumno creado";
        }else{
            $mensaje = $respusta;
        }
        $this->view->mensaje = $mensaje;
        $this->render();
    }
}