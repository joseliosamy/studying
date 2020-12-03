<?php

    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque sed magna eget feugiat. Quisque venenatis gravida hendrerit. Nulla volutpat fringilla erat, aliquet mattis nisi dictum eu.';

    // recirte de sting
    echo substr($conteudo, 0, 20);

    $nome = 'guilherme dev void';

    // transforma em um arrei conforme a quandtidade de espaços
    $nomes = explode(' ',$nome);
    print_r($nomes);

    // transforma em string conforme a quantidade de posições no array
    $nomes = implode(' ',$nomes);
    echo $nomes;

    // ------------------


    echo '<hr/>';
    $conteudo = '<h1>Josa</h1> Outra coisa';
    // retira o html do conteudo
    echo strip_tags($conteudo);

    echo '<br/>';
    
    echo htmlentities('<div></div>');
?>