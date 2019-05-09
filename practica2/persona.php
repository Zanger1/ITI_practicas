<?php

    $edad = $_POST['edad'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $con = mysqli_connect("localhost","root","","tarea2");
    if(mysqli_connect_error()){
        die("Conexion a la base de datos fallo ".mysqli_connect_error().mysqli_connect_errno());
    }
    $imc=$peso/($altura*$altura);
    $sentencia = "INSERT into imc(edad,altura,peso,imc) VALUES ('".$edad."','".$altura."','".$peso."','".$imc."');";
    //$sentencia = "INSERT into imc(edad,altura,peso,imc) VALUES (10,10,10,10);";
    $con->query($sentencia);

    $sentencia = "SELECT * FROM imc";
    $resultado = $con->query($sentencia);
    if($resultado->num_rows>0)
    {
        echo"<table border='1' align='center'>
        <tr bgcolor='#E6E6E6'>
        <th>Edad</th>
        <th>Altura</th>
        <th>Peso</th>
        <th>IMC</th>
        </tr>";

    while ($fila=$resultado->fetch_array())
    {
        echo "<tr><td>".$fila["edad"]."</td>";
        echo "<td>".$fila["altura"]."</td>";
        echo "<td>".$fila["peso"]."</td>";
        echo "<td>".$fila["imc"]."</td></tr>";
    }
    }
    else
    {
    echo "No hay Registros";
    }
?>