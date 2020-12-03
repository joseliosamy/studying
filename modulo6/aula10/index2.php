<?php

    session_start();
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
        echo $_SESSION['idade'];
    }
    // unset($_SESSION['nome']) // destroi só um atributo de sessao
    session_destroy(); // destroi todos atributos da sessão
    

?>