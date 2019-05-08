<?php
    //se incluye el archivo donde esta la clase alumno
    include "alumno.php";
    //se instancian 10 objetos de la clase alumno
    $al1 = new alumno();
    $al2 = new alumno();
    $al3 = new alumno();
    $al4 = new alumno();
    $al5 = new alumno();
    $al6 = new alumno();
    $al7 = new alumno();
    $al8 = new alumno();
    $al9 = new alumno();
    $al10 = new alumno();
    //se le agregan valores a las instancias
    $al1->init("Alumno1",100,0,0);
    $al2->init("Alumno2",100,10,30);
    $al3->init("Alumno3",10,40,30);
    $al4->init("Alumno4",100,100,100);
    $al5->init("Alumno5",100,40,90);
    $al6->init("Alumno6",100,70,100);
    $al7->init("Alumno7",100,0,30);
    $al8->init("Alumno8",80,80,70);
    $al9->init("Alumno9",100,78,98);
    $al10->init("Alumno10",78,100,100);
    //se agregan las instancias a un array
    $arrAlumno = array($al1,$al2,$al3,$al4,$al5,$al6,$al7,$al8,$al9,$al10);

    /*for($n=0; $n<=9; $n++){
        echo"<br>Nombre: ".$arrAlumno[$n]->getNombre();
        echo"<br>Promedio: ".$arrAlumno[$n]->getTotal();
    }*/

    //se ordenan de mayor a menor dependiendo del promedio
        for($n = 1; $n<=9; $n++){
            for($r = 0; $r<=9-$n; $r++){
                if($arrAlumno[$r]->getTotal()<$arrAlumno[$r+1]->getTotal()){
                    $arr1 = $arrAlumno[$r+1];
                    $arrAlumno[$r+1]=$arrAlumno[$r];
                    $arrAlumno[$r]=$arr1;
                }
            }
        }
        //se mustran los nombres y los promedios
    for($n=0; $n<=9; $n++){
        echo"<br>Nombre: ".$arrAlumno[$n]->getNombre();
        echo"<br>Promedio: ".$arrAlumno[$n]->getTotal();
    }

?>