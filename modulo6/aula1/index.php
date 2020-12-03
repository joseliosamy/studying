<?php
            // esse 0=> é para escolher o valor de inicio do array
    $array = [0=>'gui', 'josa', 'jaca', 'uto'];

    // foreach($array as $key => $value){
    //      echo $key;
    //      echo '=>';
    //      echo $value;
    //      echo '<hr/>';
    // }

    $total = count($array);
    for($i = 0; $i < $total; $i++){
        echo $array[$i]; 
        echo '<hr/>'; 
    }
?>