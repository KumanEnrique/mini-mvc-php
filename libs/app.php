<?php 
require_once('controllers/error.php');

class App{
    function __construct(){
        $url = $_GET['url'];
        $url = rtrim($url,'/');
        $url = explode('/',$url);
        // var_dump($url);
        $archivoController = 'controllers/' . $url[0] . '.php';
        
        if(file_exists($archivoController)){
            require_once($archivoController);
            $controller = new $url[0]();
            if(isset($url[1])){
                if(method_exists($controller,$url[1])){
                    $controller->{$url[1]}();
                }else{
                    echo "error!!!! no existe el metodo " . $url[1];
                }
            }
        }else{
            $error = new Error_();
        }
        // echo "<p>hola nueva app</p>";
    }
}