<?php
$nome_servidor_bd = 'localhost';
$usuario_bd = 'root';
$senha_bd = 'root';
$nome_bd = 'prog-01';
$porta = 3306;

$conexao = mysqli_connect($nome_servidor_bd,$usuario_bd,$senha_bd,$nome_bd,$porta);

// Se NÃO conectou e para o processamento e envia uma mensagem para a pagina
if (!$conexao){
	die('Problemas com conexão!');
}
?>