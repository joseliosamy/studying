<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <?php
    
    // o $_GET recupera os dados do link   

    // if(isset($_GET['acao'])){
    //     $nome = $_GET['nome'];
    //     $email = $_GET['email'];
    //     echo $nome;
    //     echo '<br/>';
    //     echo $email;
    // }

    // o $_POST recupera os dados, porém de forma oculta
        // o @ é para não dar erro, mas não é recomendado
    if(isset($_POST['acao'])){
        foreach( $_POST['valor'] as $key => $value){
            echo $key;
            echo '-';
            echo $value;
            echo '<br/>';
        }
    }

    ?>
    <form method="post">
        <!-- <select name="nome">
            <option value="josa">josa</option>
            <option value="jota">jota</option>
        </select> -->
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="submit" name="acao" value="Enviar" />
    </form>
    
</body>
</html>