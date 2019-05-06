<?php

    #CLASE:
    //una clase es un modelo que se utiliza para crear modelos que se utiliza para crear objetos que comparten un mismo comportamiento, estado o identidad
    class automovil {
        //propiedades: son las caracteristicas que puede tener un objeto
        public $marca;
        public $modelo;
        //metodos: es el algoritmo asociado a un objeto que indica la capacidad de lo que puede hacer. la unica diferencia entre el metodo y funcion es que llamamos funciones a los algoritmos de la programacion estructurada
        public function mostrar(){
            echo"<p> Hola soy un $this->marca, modelo $this->modelo</p>";
        }
    }
    //objeto: entidad probista de metodos o mensajes a los cuales responde propiedades con valores concretos
    $a = new Automovil();
    $a -> marca = "Chevrolet";
    $a -> modelo = "Chevy";
    $a -> mostrar();

    $b = new Automovil();
    $b -> marca = "Ford";
    $b -> modelo = "Lobo";
    $b -> mostrar();

    $c = new Automovil();
    $c -> marca = "Honda";
    $c -> modelo = "CRV";
    $c -> mostrar();
    //Principios de la programacion orientada a objetos que se cumplen en este ejemplo
    //1.- Abstraccion: nuevos tipos de datos(el quieras lo creas)
    //2.- Encapsulacion: organiza el codigo en grupos logicos
    //3.- Ocultamiento: oculta detalles de implementacion y expone solo los detalles que sean necesarios para el resto del sistema

?>