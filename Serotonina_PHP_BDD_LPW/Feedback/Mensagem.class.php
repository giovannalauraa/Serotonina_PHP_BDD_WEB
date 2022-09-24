<?php
    class Mensagem{
        private $mensagem;
        private $nome;
        private $email;

        /*Foi retirado para colocar no banco
        public function enviar(){
            echo "<br />";
            echo "<strong>Muito obrigada ". $this->nome ." sua mensagem foi enviada! <strong/>";
            echo "<br />";
        }*/

        public function __construct($mensagem, $nome, $email){
            $this->mensagem = $mensagem;
            $this->nome = $nome;
            $this->email = $email;
        }

        public function setMensagem($mensagem){
            $this->mensagem = $mensagem;
        }

        public function getMensagem(){
           return $this->mensagem;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }
        
        public function inserirFeedback()
        {
            //Conectar com o BD
            $conexao = mysqli_connect("localhost","root","", "serotoninaBDD");
            //verificando a conexão
            if(!$conexao){
                die("Falha na conexão com o BD");
            }
            //echo "<br>Conectado com o banco.<br>";
            $sql = "INSERT INTO feedback VALUES ('$this->mensagem', '$this->nome', '$this->email')";
            if(mysqli_query($conexao, $sql)){
                echo "<br />";
                echo "<strong>Muito obrigada ". $this->nome ." sua mensagem foi enviada! <strong/>";
                echo "<br />";
            }else{
                echo "Erro: ".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }
    }

?>

