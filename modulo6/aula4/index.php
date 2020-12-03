<?php

    function mostrarNome($nome){
        echo '<h2>nome é: '. $nome. '</h2>';
    }
    mostrarNome('josa');

    function calc($num1 = 10, $num2 = 15){
        echo ($num1+$num2);
    }
    calc(20, 30);
    // posso mudar os valores
    
    function verdade(){
        return true;
    }
    $vari = verdade();
    
?>