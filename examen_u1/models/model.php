<?php

class enlacesPaginas{
    public function enlacesPaginasModel($enlacesModel){
        if($enlacesModel == "alumnos"){
            $module="views/modules/".$enlacesModel.".php";
        }
        elseif($enlacesModel == "grupos"){
            $module="views/modules/".enlacesModel.".php";
        }
        return $module;
    }
}


?>