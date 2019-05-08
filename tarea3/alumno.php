<?php
    //clase alumno y variables
    class alumno{
        private $c1;
        private $c2;
        private $c3;
        private $nombre;
        private $total;
        //funcion para calcular el promedio y si una calificacion es menor a 60 el promedio se le da el valor de 60
        public function prom(){
            if($this->c1<=60||$this->c2<=60||$this->c3<=60){
                $this->total=60;
            }
            else{
                $this->total=($this->c1+$this->c2+$this->c3)/3;
            }
        }
        //funciones get
        public function getC1(){
            return $this->c1;
        }
        public function getC2(){
            return $this->c2;
        }
        public function getC3(){
            return $this->c3;
        }
        public function getTotal(){
            return $this->total;
        }

        public function getNombre(){
            return $this->nombre;
        }
        //funcion para dar el valor a las variables
        public function init($nombre,$val1,$val2,$val3){
            $this->nombre=$nombre;
            $this->c1=$val1;
            $this->c2=$val2;
            $this->c3=$val3;

            $this->prom();
        }
    }

?>