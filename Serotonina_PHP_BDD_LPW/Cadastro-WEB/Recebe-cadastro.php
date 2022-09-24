<?php
        require_once("Cadastro.class.php");
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Mostrando dados criando um objeto
        $objetoCadastro= new Cadastro ($nome, $email, $senha);
        $objetoCadastro -> inserirCadastro();
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serotonina</title>
    <link href="style2.css" rel="stylesheet" type="text/css" />

    
</head>
<body>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
     <img src="1.jpg" id=""/>  
    <div class="loader">
        <div class="loading_1"></div>
    
</body>
</html>