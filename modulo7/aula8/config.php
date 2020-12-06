<?php

    function myAutoLoad($class){
        $class = str_replace('\\','/',$class); // trocando a contra barra '\' pela barra '/' para nao dar problema em servidores linux
        echo $class;
        if(file_exists('classes/'.$class.'.php')){
            include('classes/'.$class.'.php');
        }
    }

?>