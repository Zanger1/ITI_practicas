<?php
class mvcController{
    
    public function enlacesPaginasController(){
    if(isset($_GET["action"])){
        $enlacesPaginasController = $_GET["action"];
    }else{
        $enlacesPaginasController = "index";
    }
    $respueta = enlacesPaginas::enlacesPaginasModel($enlacesPaginasController);
    include $respueta;
    }

    public function mostrarAlumnosController(){
        $respuesta = crud::mostrarModel("alumnos");

        foreach($respuesta as $row => $item){
            echo'<tr>
                <td>'.$item["matricula"].'<td>
                <td>'.$item["nombre"].'<td>
                <td>'.$item["apellidos"].'<td>
                <td>'.$item["carrera"].'<td>
                <td>'.$item["anio_ingreso"].'<td>
                <td>'.$item["id_grupo"].'<td>
                <tr>';
        }
    }

    public function mostrarGruposController(){
        $respuesta = crud::mostrarModel("grupos");

        foreach($respuesta as $row => $item){
            echo'<tr>
                <td>'.$item["cuatrimestre"].'<td>
                <td>'.$item["nombre"].'<td>
                <tr>'
        }
    }

    public function crearAlumnosController(){
        $datosController = array("matricula"=>$_POST["matricula_registro"],
                                "nombre"=>$_POST["nombre_registro"],
                                "apellidos"=>$_POST["apellido_registro"],
                                "carrera"=>$_POST["carrera_registro"],
                                "anio_ingreso"=>$_POST["anio_registro"],
                                "id_grupo"=>$_POST["grupo_registro"]);
        
        $respuesta = crud::crearAlumnosModel($datosController);

        if($respuesta == "succes"){
            echo "succes";
        }else{
            echo "failed";
        }
    }

    public function crearGruposController(){
        $datosController = arrar("cuatrimestre"=>$_Post["cuatrimestre_registro"],
                                "nombre"=>$_POST["nombre_registro"]);
        
        $respuesta = crud::crearGruposModel($datosController);

        if($respuesta == "success"){
            echo "success";
        }else{
            echo "failed";
        }
    }
}

?>