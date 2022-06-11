<?php
class NuevoModel extends Model{
    public function __construct()    {
        parent::__construct();
    }
    public function insert($data){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO alumnos (matricula,nombre,apellido) VALUES (:matricula,:nombre,:apellido)');
            $query->execute(['matricula'=>$data['matricula'],'nombre'=>$data['nombre'],'apellido'=>$data['apellido'] ] );
            return true;
            // echo('<p>alumno insertado en la bd</p>');
        } catch (PDOException $e) {
            // print_r('error de conexion '.$e->getMessage());
            return 'error de conexion '.$e->getMessage();
            // return false;
        }
        
    }
}