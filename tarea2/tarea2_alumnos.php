
<?php

class alumno{
    private $con;
    private $matricula;
    private $nombre;
    private $carrera;
    private $email;
    private $telefono;

    public function conectarDB(){
        $this->con = mysqli_connect("localhost","root","","tarea2");
    }

    public function form_subir(){
        echo"<h2>Formulario Alumnos</h2>";
        echo"<form method='"."post'"." action=''>";
            echo"Matricula: <input type='"."text'"." name='"."matricula'"." value=''>";
            echo"<br><br>";
            echo"Nombre: <input type='"."text'"." name='"."nombre'"." value=''>";
            echo"<br><br>";
            echo"Carrera: <input type='"."text'"." name='"."carrera'"." value=''>";
            echo"<br><br>";
            echo"E-mail: <input type='"."text'"." name='"."email'"." value=''>";
            echo"<br><br>";
            echo"Telefono: <input type='"."text'"." name='"."telefono'"." value=''>";
            echo"<br><br>";
            echo"<input type='"."submit'"." name='"."submit'"." value='"."Submit'>";
        echo"</form>";
        $this->matricula=$_POST['matricula'];
        $this->nombre=$_POST['nombre'];
        $this->carrera=$_POST['carrera'];
        $this->email=$_POST['email'];
        $this->telefono=$_POST['telefono'];

        $sentencia = "INSERT into alumno(matricula,nombre,carrera,email,telefono) VALUES ('".$this->matricula."','".$this->nombre."','".$this->carrera."','".$this->email."','".$this->telefono."');";
        $resultado = $this->con->query($sentencia);
    }

    public function mostrar(){
        $sentencia = "SELECT * FROM alumno";
        $resultado = $this->con->query($sentencia);
        if($resultado->num_rows>0)
        {
            echo"<table border='1' align='center'>
            <tr bgcolor='#E6E6E6'>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Carrera</th>
            <th>E-mail</th>
            <th>Telefono</th>
            </tr>";

        while ($fila=$resultado->fetch_array())
        {
            echo "<tr>
            <td>".$fila["matricula"]."</td>";
            echo "<td>".$fila["nombre"]."</td>";
            echo "<td>".$fila["carrera"]."</td>";
            echo "<td>".$fila["email"]."</td>";
            echo "<td>".$fila["telefono"]."</td></tr>";

        }
        }
        else
        {
        echo "No hay Registros";
        }
    }
}

$alumno1=new alumno();
$alumno1->conectarDB();
$alumno1->form_subir();
$alumno1->mostrar();

?>