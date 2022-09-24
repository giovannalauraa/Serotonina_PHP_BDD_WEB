<?php

    class Login{
        private $nome;
        private $senha;

        public function entrar(){
            echo "<br />";
            echo "Seja bem-vindo(a) ". $this->nome;
            echo "<br />";
        }

        public function __construct($nome, $senha){
            $this->nome = $nome;
            $this->senha = $senha;
        }

        public function setNome(){
            $this->nome = $nome;
        }

        public function getNome(){
           return $this->nome;
        }

        public function setSenha(){
            $this->senha = $senha;
        }

        public function getSenha(){
            $this->senha = $senha;
        }

        public function inserirLogin(){

        
        $conexao = mysqli_connect("localhost", "root","","entrar");

        if(!$conexao){
            die("Falha na conexão com o BD");
        }
        echo "<br>Conectado com o banco<br>";
        $sql = "INSERT INTO login VALUES ('$this->nome', '$this->senha')";
        if(mysqli_query($conexao,$sql)){
            echo "Login inserido com sucesso";
        }else{
            echo "Erro: ".mysql_error($conexao);
        }
        mysqli_close($conexao);

        }
    }
?>