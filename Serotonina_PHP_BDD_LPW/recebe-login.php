<?php
        require_once("Login.class.php");
        
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        // Mostrando dados criando um objeto
        $objetoLogin = new Login ($nome, $senha);
        $objetoLogin -> inserirLogin();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serotonina</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <img src ="img_welcome.png" id="img-welcome" >
</body>
</html>