<?php
class EnlacesPaginas{
    //modelo para validar el action
    public function enlacesPaginasModel($enlacesModel){
        if($enlacesModel=="maestros"){
            $module="views/modules/".$enlacesModel.".php";
        }else if($enlacesModel=="alumnos"){
            $module="views/modules/".$enlacesModel.".php";
        }elseif($enlacesModel=="agregarAlumno"){
            $module="views/modules/".$enlacesModel.".php";
        }elseif($enlacesModel=="agregarMaestro"){
            $module="views/modules/".$enlacesModel.".php";
        }
        return $module;
    }
}

?>