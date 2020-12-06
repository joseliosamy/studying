<?php

    class Cachorro{
        public function __construct(){
            echo 'cachoro';
        }
    }
    
    class Gato{
        public function __construct(){
            echo 'gato';
        }
    }
    
    class Animal{
        public static function build($nomeClasse){
            return new $nomeClasse;
        }
    }
    Animal::build('Gato')
?>