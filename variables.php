<?php
    //variables numericas
    $numero = 5;
    echo"Esto es un numero: $numero<br>";
    var_dump($numero);
    echo"<br><br>";

    //palabra
    $palabra = "ITI";
    echo"Esto es una palabra: $palabra<br>";
    var_dump($palabra);
    echo"<br><br>";

    //boleano
    $boleano = true;
    echo"Esto es un booleano: $boleano<br>";
    var_dump($boleano);
    echo"<br><br>";

    //Arreglos unidimensionales
    $arregloColores= array("rojo","amarillo");
    echo"Esto es una variable de array: $arregloColores[1]<br>";
    var_dump($arregloColores);
    echo"<br><br>";

    //variables arreglo con propiedades
    $arregloVerduras= array("verdura1"=>"lechuga", "verdura2"=>"cebollas");
    echo"Esto es un array con propiedades: $arregloVerduras[verdura1]<br>";
    var_dump($arregloVerduras);
    echo"<br><br>";

    //variables de tipo objeto
    $frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
    //echo"Esto es un array de objetos: $frutas[fruta1]<br>";
    var_dump($frutas);
?>