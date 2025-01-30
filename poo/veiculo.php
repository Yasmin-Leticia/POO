<?php
    abstract class Veiculo{
        public $tipo;
        public function __construct($tipo){
            $this->tipo = $tipo;
        }
        abstract function Acelerar();
        abstract function Frear();
    }

    class Barco extends Veiculo{
        public function Acelerar(){
            return "$this->tipo usou propulsão mecanica pra acelerar";
        }
        public function Frear(){
            return "$this->tipo usou freio de hélice para frear";
        }
    }
    class Aviao extends Veiculo{
        public function Acelerar(){
            return "$this->tipo aumentou a potencia do motor pra acelerar";
        }
        public function Frear(){
            return "$this->tipo usou thrust reversers para frear";
        }
    }
    class Carro extends Veiculo{
        public function Acelerar(){
            return "$this->tipo ";
        }
        public function Frear(){
            return "$this->tipo usuou freio para frear";
        }
    }
    class Bicicleta extends Veiculo{
        public function Acelerar(){
            return "$this->tipo ";
        }
        public function Frear(){
            return "$this->tipo usou freios a cabo para frear";
        }
    }
    class Skate extends Veiculo{
        public function Acelerar(){
            return "$this->tipo ";
        }
        public function Frear(){
            return "$this->tipo usou freagem com o tail para frear";
        }
    }
    class Elevador extends Veiculo{
        public function Acelerar(){
            return "$this->tipo ";
        }
        public function Frear(){
            return "$this->tipo usou ";
        }
    }
    
?>