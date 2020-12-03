<?php
    // classe abstrata serve apenas para ser herdada
    abstract class Teste{

        public function func1(){
            echo 'chamando funcao 1';
        }
        abstract function func2();// tem que ter caso uma classe herde os metodos
    }

    class Principal extends Teste{
        public function func2(){//declarando a funcao func2 na classe que herda a classe Teste
            echo 'estou cagado';
        }
        public static function metodoEstatico(){
            echo 'vai pra china';
        }
        public function funcao(){
            // Principal::metodoEstatico();
            self::metodoEstatico();
        }
    }
    
    $principal = new Principal;
    $principal->funcao();//chamando metodo estatico dentro da funcao
    // Principal::metodoEstatico();//chamando metodo estatico
    // $principal->func1();
    // $principal->func2();