function validar() {
    var nome = document.forms["cadastro"]["nome"];
    if (nome.value == "") {
      nome.classList.add("erro");
      mensagem.innerHTML = "Preencha o nome";
      return false;
    } else {
      nome.classList.remove("erro");
      nome.classList.add("sucesso");
    }
  
    var nome = document.forms["cadastro"]["email"];
    if (nome.value == "") {
      nome.classList.add("erro");
      mensagem.innerHTML = "Preencha o email";
      return false;
    } else {
      nome.classList.remove("erro");
      nome.classList.add("sucesso");
    }
  
  
    var senha = document.forms["cadastro"]["senha"]
    if (senha.value == "") {
      nome.classList.add("erro");
      mensagem.innerHTML = "Preencha a senha";
      return false;
    } else {
      nome.classList.remove("erro");
      nome.classList.add("sucesso");
    }
  
    var senha = document.forms["cadastro"]["senha"]
    if (senha.value.length <= 5) {
      nome.classList.add("erro");
      mensagem.innerHTML = "Preencha a senha com mais de 6 digitos!";
      return false;
    } else {
      nome.classList.remove("erro");
      nome.classList.add("sucesso");
    }
  
    return true;
  }
  
  function Toggle() {
    var temp = document.getElementById("senha");
    if (temp.type === "password") {
      temp.type = "text";
    }
    else {
      temp.type = "password";
    }
  }