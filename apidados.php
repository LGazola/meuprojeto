<?php

$nome1 = $_POST['nome'];
$email= $_POST['email'];
$comentario = $_POST['comentario'];
$data_atual = date('d,m,y');
$hora_atual = date('H:i:s');

$server = 'localhost';
$usuario ='root';
$senha = '';
$banco = 'projeto-contato';

$conn = new mysqli($server, $usuario, $senha, $banco);

if($conn -> connect_error){
  die("falha ao conectar com o banco de dados:".$conn->connect_error);
};

$smtp = $conn -> prepare ("INSERT INTO menssagens (nome, email, mensagem, data, hora) VALUES (?,?,?,?,?)");
$smtp -> bind_param("sssss",$nome1, $email, $comentario, $data_atual, $hora_atual );

if($smtp->execute()){
  echo "Menssagem enviada com sucesso!";
}else{
  echo "Erro no envio :(".$smpt->error;
};

$smtp ->close();
$conn ->close();