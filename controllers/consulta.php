<?php
class Consulta extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->datos = [];
        $this->view->mensaje = "";
    }
    public function render(){
        $alumnos = $this->model->get();
        $this->view->datos = $alumnos;
        $this->view->render('consulta/index');
    }
    public function verAlumno($param = null){
        $idAlumno = $param[0];
        $alumno = $this->model->getById($idAlumno);
        session_start();
        $_SESSION['idveralumno'] = $alumno->matricula;
        $this->view->datos = $alumno;
        $this->view->render('consulta/detalle');
    }
    public function actualizarAlumno(){
        session_start();
        $matricula = $_SESSION['idveralumno'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        session_destroy();
        if($this->model->update(['matricula'=>$matricula,'nombre'=>$nombre,'apellido'=>$apellido])){
            $alumno = new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;
            $this->view->datos = $alumno;
            $this->view->mensaje = "Alumno actualizado correctamente";
        }else{
            $this->view->mensaje = "hubo un problema en actualizar";
        }
        $this->view->render('consulta/detalle');
    }
    public function eliminarAlumno($param = null){
        $matricula = $param[0];
        if($this->model->delete($matricula)){
            $this->view->mensaje = "Alumno eliminado correctamente";
        }else{
            $this->view->mensaje = "hubo un problema en eliminar";
        }
        /* $alumnos = $this->model->get();
        $this->view->datos = $alumnos;
        $this->view->render('consulta/index'); */
        header('Location: http://localhost:8080/fg/framework-mvc-php/consulta');
    }
}