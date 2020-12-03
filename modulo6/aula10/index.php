<?php

    session_start();
    // $_SESSION['nome'] = 'Josa';
    // $_SESSION['idade'] = '20';
    setcookie('nome', 'Josa', time() + (60*60*24), '/');
    // setcookie('nome', 'Josa', time() - (60*60*24), '/');
    // para destruir tem que colocar um valor negativo

    echo $_COOKIE['nome'];



?>