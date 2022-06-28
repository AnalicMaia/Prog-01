<?php
include('conexao.php');

$nome = $_POST['nome'];
$datanasc = $_POST['datanasc'];
$email= $_POST['email'];
$pass=$_POST['pass'];

//Arrumar essa inserção!

$sql = "INSERT INTO cadastro VALUES ('$nome', '$datanasc', '$email', '$pass')";


if(mysqli_query($conexao,$sql)){
    echo ' Cadastro realizado com sucesso';
} else{
    echo 'Problemaas na hora de inserir';
}

mysqli_close($conexao);

?>