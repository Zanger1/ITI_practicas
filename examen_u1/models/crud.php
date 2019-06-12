<?php

require_once "db.php";
class crud extends conexion{
    public function mostrarModel($tabla){
        $stm = conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stm->execute();
        return $stm->fetchAll();
        $stm->close();
    }

    public function crearAlumnosModel($datosModel){
        $stm = conexion::conectar()->prepare("INSERT INTO alumnos (matricula,nombre,apellidos,carrera,anio_ingreso,id_grupo) values(:matricula,:nombre,:apellidos:carrera,:anio_ingreso,:id_grupo)");
        $stm->bindParam(":matricula",$datosModel["matricula"],PDO::PARAM_STR);
        $stm->bindParam(":nombre",$datosModel["nombre"],PDO::PARAM_STR);
        $stm->bindParam(":apellidos",$datosModel["apellidos"],PDO::PARAM_STR);
        $stm->bindParam(":carrera",$datosModel["carrera"],PDO::PARAM_STR);
        $stm->bindParam(":anio_ingreso",$datosModel["anio_ingreso"],PDO::PARAM_STR);
        $stm->bindParam(":id_grupo",$datosModel["id_grupo"],PDO::PARAM_INT);

        if($stm->execute()){
            return "succes";
        }else{
            return "error";
        }
        $stm->close();

    }

    public function crearGruposModel($datosModel){
        $stm = conexion::conectar()->prepare("INSERT INTO grupos (cuatrimestre,nombre) values(:cuatrimestre,:nombre)");
        $stm->bindParam(":cuatrimestre",$datosModel["cuatrimestre"],PDO::PARAM_STR);
        $stm->bindParam(":nombre",$datosModel["nombre"],PDO::PARAM_STR);

        if($stm->execute()){
            return "succes";
        }else{
            return "error";
        }
        $stm->close();
    }
}


?>