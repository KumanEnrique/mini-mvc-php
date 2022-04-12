<?php
class Error_ extends Controller {
    public function __construct(){
        parent::__construct();
        $url_e = $_GET['url'];
        $this->view->mensaje = "error el controlador ((" . $url_e. "))no existe";
        $this->view->render('error/index');
        // echo "no existe el controlador $url_e";
    }
}