
<?php

class maestro{
    private $con;
    private $n_empleado;
    private $carrera;
    private $nombre;
    private $telefono;

    public function conectarDB(){
        $this->con = mysqli_connect("localhost","root","","tarea2");
    }

    public function form_subir(){
        echo"<h2>Formulario Maestros</h2>";
        echo"<form method='"."post'"." action=''>";
            echo"N° Empleado: <input type='"."text'"." name='"."n_empleado'"." value=''>";
            echo"<br><br>";
            echo"Carrera: <input type='"."text'"." name='"."carrera'"." value=''>";
            echo"<br><br>";
            echo"Nombre: <input type='"."text'"." name='"."nombre'"." value=''>";
            echo"<br><br>";
            echo"telefono: <input type='"."text'"." name='"."telefono'"." value=''>";
            echo"<br><br>";
            echo"<input type='"."submit'"." name='"."submit'"." value='"."Submit'>";
        echo"</form>";
        $this->n_empleado=$_POST['n_empleado'];
        $this->carrera=$_POST['carrera'];
        $this->nombre=$_POST['nombre'];
        $this->telefono=$_POST['telefono'];

        $sentencia = "INSERT into maestro(n_empleado,carrera,nombre,telefono) VALUES ('".$this->n_empleado."','".$this->carrera."','".$this->nombre."','".$this->telefono."');";
        $resultado = $this->con->query($sentencia);
    }

    public function mostrar(){
        $sentencia = "SELECT * FROM maestro";
        $resultado = $this->con->query($sentencia);
        if($resultado->num_rows>0)
        {
            echo"<table border='1' align='center'>
            <tr bgcolor='#E6E6E6'>
            <th>N° Empleado</th>
            <th>Carrera</th>
            <th>Nombre</th>
            <th>Telefono</th>
            </tr>";

        while ($fila=$resultado->fetch_array())
        {
            echo "<tr>
            <td>".$fila["n_empleado"]."</td>";
            echo "<td>".$fila["carrera"]."</td>";
            echo "<td>".$fila["nombre"]."</td>";
            echo "<td>".$fila["telefono"]."</td></tr>";
        }
        }
        else
        {
        echo "No hay Registros";
        }
    }
}

$maestro1=new maestro();
$maestro1->conectarDB();
$maestro1->form_subir();
$maestro1->mostrar();

?>