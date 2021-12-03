<?php
require_once 'conexion.php';
session_start();

class Hotel extends Conexion{

    public function __construct(){
        $this->db=parent::__construct();
    }

    public function listarHot(){
        $rows=null;
        $statement=$this->db->prepare("SELECT Imagen_Hotel, Nombre_Hotel, Direccion_Hotel, Descripcion_Hotel, (SELECT min(Costo_Habitacion) from habitacion) as 'Costo_Habitacion' FROM hotel;");
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
    }

}
?>