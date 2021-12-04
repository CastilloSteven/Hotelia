<?php
require_once 'conexion.php';
session_start();

class Habitacion extends Conexion{

    public function __construct(){
        $this->db=parent::__construct();
    }

    public function listarHab(){
        $rows=null;
        $statement=$this->db->prepare("SELECT * FROM habitacion;");
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
    }
}
?>