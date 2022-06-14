<?php

$nome = $_POST['name'];
$datanasc = $_POST['datanasc'];
$email= $_POST['email'];

echo "O nome é $nome, com o email $email e com data de nascimento de: $datanasc";
-------------------------
// conectar 

$sql = "INSERT INTO usuarios (nome, email, nascimento) VALUES ($nome, $datanasc, $email)";


?>