<?php
include("./conexao.php");

$nome = $_POST['name'];
$datanasc = $_POST['datanasc'];
$email= $_POST['email'];

echo "O nome é $nome, com o email $email e com data de nascimento de: $datanasc";

$sql = "INSERT INTO usuarios (nome, email, nascimento) VALUES ('$nome', '$datanasc', '$email')";
if(mysqli_query($conexao,$sql)){
    echo ' Cadastro realizado com sucesso';
} else{
    echo 'Problemaas na hora de inserir';
}

mysqli_close($conexao);

?>