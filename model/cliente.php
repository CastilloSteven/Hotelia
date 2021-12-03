<?php

require_once 'conexion.php';
session_start();

class Cliente extends Conexion{

    public function __construct(){
        $this->db=parent::__construct();
    }

    public function tipoDoc(){
        $smt=$this->db->prepare("SELECT * FROM tipodocumento;");
        $smt->execute();
        $data=$smt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
}

    public function login($correo,$clave){
        $rows=null;
        $statement=$this->db->prepare("SELECT * FROM cliente WHERE Correo_Cliente =:correo and Contraseña_Cliente = :clave");
        $statement->bindparam(':correo',$correo);
        $statement->bindparam(':clave',$clave);
        $statement->execute();
        if ($statement->rowCount()==1) {
            $result=$statement->fetch();
            $_SESSION['Nombre']=$result['Nombres_Cliente'];
            $_SESSION['Id']=$result['Id_Cliente'];
            return true;
        }
        return false;
    }

    public function agregar($nombre,$apellido,$fechaNac,$telefono,$tipoDoc,$numDoc,$correo,$clave){
        $smt=$this->db->prepare("INSERT INTO cliente (Nombres_Cliente, Apellidos_Cliente, FechaNac_Cliente, Telefono_Cliente, Numero_Documento_Cliente, Correo_cliente, Contraseña_Cliente, Id_TipoDocumento) VALUES (:nombre, :apellido, :fechaNac, :telefono, :numDoc, :correo, :clave, :tipoDoc);");

        $smt->bindparam(':nombre',$nombre);
        $smt->bindparam(':apellido',$apellido);
        $smt->bindparam(':fechaNac',$fechaNac);
        $smt->bindparam(':telefono',$telefono);
        $smt->bindparam(':tipoDoc',$tipoDoc);
        $smt->bindparam(':numDoc',$numDoc);
        $smt->bindparam(':correo',$correo);
        $smt->bindparam(':clave',$clave);

        if($smt->execute()){
            header('Location:../index.php');
        }
    }

    public function signOut(){
        session_unset();
        session_destroy();
        header('Location:../index.php');
    }

    public function getId($id){
        $rows=null;
        $statement=$this->db->prepare('SELECT * FROM cliente INNER JOIN tipodocumento on cliente.Id_TipoDocumento = tipodocumento.Id_TipoDocumento WHERE Id_Cliente = :id;');
        $statement->bindparam(':id',$id);
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
        
    }

    public function update($nombres,$apellidos,$fechaNac,$telefono,$correo,$id){
        $smt=$this->db->prepare("UPDATE cliente SET Nombres_Cliente = :nombre, Apellidos_Cliente = :apellido, FechaNac_Cliente = :fechaNac, Telefono_Cliente = :telefono, Correo_cliente = :correo WHERE cliente.Id_Cliente = :id;");
        $smt->bindparam(':id',$id);
        $smt->bindparam(':nombre',$nombres);
        $smt->bindparam(':apellido',$apellidos);
        $smt->bindparam(':fechaNac',$fechaNac);
        $smt->bindparam(':telefono',$telefono);
        $smt->bindparam(':correo',$correo);

        if($smt->execute()){
            echo '
            <script>
                alert("Datos actualizados");
                window.location = "../view/Cliente/configCuenta.php";
            </script>        
            ';
        }else{
            echo '
            <script>
                alert("Error al actualizar");
                window.location = "../view/Cliente/configCuenta.php";
            </script>        
            ';
        }
    }

    public function Password($newPass,$id){
        $smt=$this->db->prepare("UPDATE cliente SET Contraseña_Cliente = :newPass WHERE Id_Cliente = :id;");
        $smt->bindparam(':id',$id);
        $smt->bindparam(':newPass',$newPass);

        if($smt->execute()){
            echo '
            <script>
                alert("Contraseña actualizada");
                window.location = "../view/Cliente/configCuenta.php";
            </script>        
            ';
        }else{
            echo '
            <script>
                alert("Error al actualizar");
                window.location = "../view/Cliente/configCuenta.php";
            </script>        
            ';
        }
    }

}
?>