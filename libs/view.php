<?php
class View {
    public function __construct(){
        // echo "<p>vista base</p>";
    }
    public function render($name){
        require_once('views/' . $name . '.php');
    }
}