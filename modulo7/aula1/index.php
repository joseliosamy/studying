<?php

    class Pessoa{
        //objeto pessoa

        private $nome = 'Josa';
        private $idade = '23';
        private $peso = '92kg';

        public function crescer(){
            $this->comer(); // usando o 'this' para chamar uma função private
            echo 'estou crescendo ';

        }

        private function comer(){
            echo 'estou comendo ';

        }
    }
    //instanciar
    $pessoa = new Pessoa;

    $pessoa->crescer();

?>