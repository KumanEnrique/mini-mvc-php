<?php
// class NueoModel extends Model{
//     public function insert(){
//         echo('<p>alumno insertado en la bd</p>');
//     }
// }
class Controller{
    public function __construct(){
        // echo "<p>Controlador base</p>";
        $this->view = new View();
    }
    public function loadModel($model){
        $url = 'models/' . $model . 'model.php';
        if(file_exists($url)){
            // echo('el archivo no existe '. $url);
            require($url);
            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }
}