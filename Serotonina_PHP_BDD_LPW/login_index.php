<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title> Entrar </title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <article>
    <section>
        <h1><b> Entrar </b></h1>
      <!-- <form name="cadastro" id="cadastro" onsubmit="return validar()"> -->
    <form class="form" method="POST" action="recebe-login.php" name="cadastro" id="cadastro" onsubmit="return validar()">
      <label for="nome"></label>
            <input type="text" name="nome" id="nome" placeholder="Nome" />
        
            <label for="senha"></label>
            <div class="senhaFlex">
              <input type="password" name="senha" id="senha" placeholder="Senha"/> 
              <img src="olho.png" onclick="Toggle()" class="ver">
            </div>
            
            <small id="mensagem"></small>
            
            <input type="submit" value="Enviar" class="enviar"/>
            <a class="enviar-2"href="../cadastro/index.html">Cadastro</a>
            
        </form>
    </section>
  </article>

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <script src="script.js"></script>
</body>

</html>