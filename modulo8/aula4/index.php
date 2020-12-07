<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8','root','');

    $id = 7;

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

    if($sql->execute(array($id))){
        echo 'cliente foi deletado com sucesso!';
    }

?>