<?php

     $var1 = array("chave1"=>"valor1", "chave2"=>"valor2");
     $var2 = array("chave1"=>"outro valor","chave3"=>"valor3","chave4"=>"valor4");
            // server para unir um ou mais arrays
    // $result = array_merge($var1, $var2);
    //  print_r($result);

            // serve para reortnar valores com a mesma chave em 1 ou mais arrays
    // print_r(array_intersect_key($var1, $var2));

    // array map serve para aplicar uma funcao em todos os valores do array
     $arr = ['<p>josa</p>', 'gui', '<h1>faba</h1>'];
                // retirar o html
     print_r(array_map('strip_tags',$arr));

?>