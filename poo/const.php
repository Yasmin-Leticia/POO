<?php
    class Pessoa{
        const nome = "Yasmin";

        public function getNome(){
            echo self::nome;
        }
    }

    class Lorena extends Pessoa{
        const nome = "Leticia";
        public function getNomeParent(){
            echo parent::nome;
        }
    }