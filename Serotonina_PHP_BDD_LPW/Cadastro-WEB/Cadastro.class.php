<?php

    class Cadastro{
        private $nome;
        private $email;
        private $senha;

        /* Foi retirada para passar para o banco os dados!
        public function entrar(){
            echo "<p>";
            $this->nome = explode(" ", $this->nome);//pegar primeira parte do nome
            echo "<strong>Seja bem-vindo(a)</strong><br/>". $this->nome[0];
            echo "</p>";
        }*/

        public function __construct($nome, $email, $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function setNome($nome){
            $this->nome = $nome;
        } 

        public function getNome(){
          return $this->nome;
        }

        public function setEmail($email){
         $this->email= $email;
         }

        public function getEmail(){
          return $this->email;
        }

        public function setSenha($senha){
          $this->senha = $senha;
         }

        public function getSenha(){
           return $this-> senha;
        }

        public function inserirCadastro()
        {
            //Conectar com o BD
            $conexao = mysqli_connect("localhost","root","", "serotoninaBDD");
            //verificando a conexão
            if(!$conexao){
                die("Falha na conexão com o BD");
            }
            //echo "<br>Conectado com o banco.<br>";
            $sql = "INSERT cadastro VALUES ('$this->nome', '$this->email', '$this->senha')";
            if(mysqli_query($conexao, $sql)){
                echo "<p>";
                $this->nome = explode(" ", $this->nome);//pegar primeira parte do nome
                echo "<strong>Seja bem-vindo(a)</strong><br/>". $this->nome[0];
                echo "</p>";
            }else{
                echo "Erro: ".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }

    }


?>