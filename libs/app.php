<?php 
require_once('controllers/error.php');

class App{
    function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url,'/');
        $url = explode('/',$url);
        // var_dump($url);
        //cuando se ingresa si definir controlador
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once($archivoController);
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
        $archivoController = 'controllers/' . $url[0] . '.php';
        
        if(file_exists($archivoController)){
            require_once($archivoController);
            //inicializar controlador
            $controller = new $url[0]();
            $controller->loadModel($url[0]);
            //si hay metodo que se quiere cargar
            // numero de elementos en el arreglo
            $nparam = sizeof($url);
            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for($i = 2;$i < $nparam ;$i++){
                        array_push($param,$url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                //no funciona con el metodo
                $controller->render();
            }
        }else{
            $error = new Error_();
        }
        // echo "<p>hola nueva app</p>";
    }
}