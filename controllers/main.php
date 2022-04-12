<?php
class Main extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->render('main/index');
        // echo "<p>soy un controlador main</p>";
    }
    public function saludo(){
        echo "<p>soy el metodo de la clase main</p>";
    }
}