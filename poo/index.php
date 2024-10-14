<?php

    class Usuario{
        //atributos = são caracteristicas que nossos objetos terão
        public $nome; 
        public $idade;
        public $email;
        public $senha;

        //metodos = ações que nossos objetos poderão executar
        public function Cadastrar(){
            if ($this->email =="yasmin@gmail.com" && $this->senha =="12345"){
                echo "Cadastrado com sucesso";
            }
            else{
                echo "erro";
            }
        }

    }
    // palavra reservada "new" para criarmos um novo objeto a partir da classe referida
    $yasmin = new Usuario();
    // -> (setinnha) é para indicar qual atributo ou qual metodo vc vai utilizar 
    $yasmin->nome = "Yasmin Letícia";
    $yasmin->idade = 17;
    $yasmin->email = "yasmin@gmail.com";
    $yasmin->senha = "12345";
    var_dump($yasmin);

    $yasmin->Cadastrar();

    class Pessoa{
        public $nome;
        public $idade;
        public $altura;
        public $peso;

        public function __construct($nome, $idade, $altura, $peso){
            $this->nome= $nome;
            $this->idade= $idade;
            $this->altura= $altura;
            $this->peso= $peso;

        }

        public function setNome($n){
            $this->nome = $n;
        }
        public function getNome(){
            return $this->nome;
        }
        public function Andar(){
            echo $this->nome . " andou";
        }
        public function Falar(){
            echo $this->nome . " falou";
        }
        public function Comer(){
            echo $this->nome . " comeu";
        }
        public function Dormiu(){
            echo $this->nome . " dormiu";
        }   
        
    }

    $leticia = new Pessoa("leticia yasmin", 17, 1.65, 50);
    // echo $leticia->getNome()

    $leticia->Comer();


    class Kpop{

        public $nome;
        public $grupo;
        public $empresa;
        public $musica;

        public function __construct($nome, $grupo, $empresa, $musica){
            $this->nome = $nome;
            $this->grupo = $grupo;
            $this->empresa = $empresa;
            $this->musica = $musica;
        }


        public function Dancar(){
            echo " está dançando.";
        }

        public function Cantar(){
            echo " está cantando.";
        }

    }
   

    class Musica{
        public $nome;
        public $genero;
        public $minutos;

        public function __construct($nome, $grupo, $minutos){
            $this->nome = $nome;
            $this->genero = $grupo;
            $this->minutos = $minutos;
        }
    }
    
    $hanni = new Kpop("Hanni", "new jeans", "ador", "super shy");
    $supershy = new Musica("super shy", "kpop", "3:00");

    echo "<pre>";
    var_dump($hanni);
    echo "</pre>";
    echo "<br>";
    echo "</pre>";
    var_dump($supershy);
    echo "</pre>";
    echo "<br>";
    echo "</pre>";

    $hanni->Dancar();

?>