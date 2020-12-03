<?php

    include('exemplo.php');
    // instanciando objeto
    $exemplo = new Exemplo();// SEMPRE INSTANCIAR O OBJETO NUMA VARIAVEL PARA PODER USÁ-LO
    $exemplo2 = new Exemplo();

    $exemplo3 = new Exemplo();

    $exemplo = new Exemplo(); // instanciou
    $exemplo->setVar1('Josa'); // setou o parametro var1 como 'josa'
    echo $exemplo->pegaVar1(); // usou outra func para printar na tela

    $exemplo2 = new Exemplo();
    $exemplo2->setVar1('Joao');
    echo $exemplo2->pegaVar1();


    // $exemplo->var2 = 'Josa';
    // $exemplo2->var2 = 'Jota';

    // echo $exemplo->var2;  
    // echo '<hr/>';
    // echo $exemplo2->var2;
    // echo '<hr/>';

    // Exemplo::$var3 = 'coisa feia';
    // echo Exemplo::$var3; // chamando objeto static

    // echo '<hr/>';

    // Exemplo::metodoEstatico();

    
    

   


?>