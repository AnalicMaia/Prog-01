<?php
$nome_servidor_bd = 'localhost';
$usuario_bd = 'root';
$senha_bd = 'root';
$nome_bd = 'prog-01';


$conexao = mysqli_connect('localhost','root','root','prog-01');

// Se NÃO conectou e para o processamento e envia uma mensagem para a pagina
if (!$conexao){
	die('Problemas com conexão!');
}
?>