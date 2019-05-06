<?php

    //codigo imperativo o espagueti
    $automovil1 = (object)["marca"=>"Chevrolet","modelo"=>"Chevy"];
    $automovil2 = (object)["marca"=>"Ford","modelo"=>"Lobo"];
    $automovil3 = (object)["marca"=>"Honda","modelo"=>"CRV"];

    //funcion con parametros para imprimir determinado automovil
    function mostrar($automovil){
        echo"<p> Hola soy un $automovil->marca, modelo $automovil->modelo</p>";
    }

    mostrar($automovil1);

?>