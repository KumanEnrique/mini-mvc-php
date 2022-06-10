<?php
class NuevoModel extends Model{
    public function __construct()    {
        parent::__construct();
    }
    public function insert(){
        echo('<p>alumno insertado en la bd</p>');
    }
}