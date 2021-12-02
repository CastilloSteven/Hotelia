<?php
require_once('Conexion.php');

class Hotel extends Conexion{

    public function __construct(){
        $this->db=parent::__construct();
    }

    public function getIdHot($IdEnc){
        $rows=null;
        $statement=$this->db->prepare('CALL proInfoHot(:idEnc);');
        $statement->bindparam(':idEnc',$IdEnc);
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
    }

    public function add($NomHot,$DirHot,$DesHot,$ImaHot,$EstHot,$IdEnc){
        $statement=$this->db->prepare('CALL proInsertHot(:NomHot,:DirHot,:DesHot,:ImaHot,:EstHot,:IdEnc)');
            $statement->bindparam(':NomHot',$NomHot);
            $statement->bindparam(':DirHot',$DirHot);
            $statement->bindparam(':DesHot',$DesHot);
            $statement->bindparam(':ImaHot',$ImaHot);
            $statement->bindparam(':EstHot',$EstHot);
            $statement->bindparam(':IdEnc',$IdEnc);

            if ($statement->execute()) {
                header('Location:../view/HotelView/apartadoHotel.php');
            }else{
                header('Location:../view/HotelView/signupHotel.php');
            }
    }

    public function update($IdHot,$NomHot,$DirHot,$DesHot,$EstHot,$IdEnc){
        $statement=$this->db->prepare('CALL proUpdateHot(:IdHot,:NomHot,:DirHot,:DesHot,:EstHot,:IdEnc)');
            $statement->bindparam(':IdHot',$IdHot);
            $statement->bindparam(':NomHot',$NomHot);
            $statement->bindparam(':DirHot',$DirHot);
            $statement->bindparam(':DesHot',$DesHot);
            $statement->bindparam(':EstHot',$EstHot);
            $statement->bindparam(':IdEnc',$IdEnc);
        if ($statement->execute()) {
            header('Location:../view/HotelView/apartadoHotel.php');
        }else{
            header('Location:../view/HotelView/apartadoHotel.php');

        }

    }

    public function getIdHotel($IdEnc){
        $rows=null;
        $statement=$this->db->prepare("SELECT Id_Hotel from Hotel where Id_Encargado=:idEnc");
        $statement->bindparam(':idEnc',$IdEnc);
        $statement->execute();
        if ($statement->rowCount()==1) {
            $result=$statement->fetch();
            $_SESSION['IDHOTEL']=$result['Id_Hotel'];
            return true;
        }
        return false;
    }

// *************

public function listarHot(){
    $rows=null;
    $statement=$this->db->prepare("SELECT Imagen_Hotel, Nombre_Hotel, Direccion_Hotel, Descripcion_Hotel FROM hotel;");
    $statement->execute();
    while ($result=$statement->fetch()) {
        $rows[]=$result;
    }
    return $rows;
}












}



?>