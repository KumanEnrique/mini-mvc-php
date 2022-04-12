<?php
class Error_ {
    public function __construct(){
        $url_e = $_GET['url'];
        echo "no existe el controlador $url_e";
    }
}