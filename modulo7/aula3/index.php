<?php

    class Filha{
        // protected function funcaoTeste(){
        //     echo 'protected func';
        // }
        private function funcaoTeste(){
            echo 'protected func';
        }
        public function mostrarOla(){
            echo 'ola mundo';
            $this->funcaoTeste();
        }
    }
    //com o extends, Pai recebe todos os metodos da classe filha
    class Pai extends Filha{
        public function mostrarOla(){
            parent::mostrarOla();//chamar a mostrarOla da classe filha
            echo 'nova funcao';
        }

        public function mostrarTchau(){
            echo 'tchau mundo!';
            
        }
    }
    // $pai = new Pai;
    // $pai->mostrarTchau();

    $pai = new Pai;
    $pai->mostrarOla();
    // $filha->mostrarOla();

?>